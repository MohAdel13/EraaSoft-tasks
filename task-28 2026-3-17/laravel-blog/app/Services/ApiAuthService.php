<?php
namespace App\Services;

use App\Http\Resources\Api\V1\AuthResource;
use App\Models\User;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Throwable;

use function Laravel\Prompts\error;

class ApiAuthService
{
    use ApiResponseTrait;
    private $locale = 'en';

    public function login(Request $request){
        $this->locale = $request->header('Accept_Language', 'en');
        app()->setLocale($this->locale);
        
        $result = null;
        try{
            if($request->has('provider')){
                $result = $this->customLogin($request);
            }

            else{
                $result = $this->standardLogin($request);
            }
        }
        catch(Throwable $th){
            $result = $this->error(
                error: __('message.login_failed')
            );
        }

        return $result;
    }

    public function standardLogin(Request $request)
    {
        try{
            $validator = Validator::make($request->all(),[
                'email'=>['required', 'email'],
                'password'=>['required']
            ]);

            if($validator->fails()){
                return $this->error(
                    message: __('message.login_failed'),
                    error: $validator->errors()->first()
                );
            }

            $user = User::where('email', $request->email)->first();

            if(!$user){
                return $this->error(
                    message: __('message.login_failed'),
                    error: __('message.wrong_email')
                );
            }


            try {
                if (!Hash::check($request->password, $user->password)) {
                    return $this->error(
                        message: __('message.login_failed'),
                        error: __('message.wrong_password')
                    );
                }
            } catch (\RuntimeException $e) {
                return $this->error(
                    message: __('message.login_failed'),
                    error: __('message.invalid_password_hash')
                );
            }
            
            $token = $user->createToken($user->name)->plainTextToken;

            $user_data = new AuthResource($user);

            return $this->success(
                message: __('message.login_success'),
                data: [
                    'user'=> $user_data,
                    'token'=> $token
                ]
            );
        }
        catch(Throwable $th){
            return $this->error(
                error: __('message.login_failed')
            );
        }
    }

    public function customLogin(Request $request){
        return $this->success(
            message: __('message.login_success'), data: []);
    }

    public function register(Request $request){
        $this->locale = $request->header('Accept_Language', 'en');
        app()->setLocale($this->locale);
        
        $result = null;
        try{
            if($request->has('provider')){
                $result = $this->customRegister($request);
            }

            else{
                $result = $this->standardRegister($request);
            }
        }
        catch(Throwable $th){
            $result = $this->error(
                error: __('message.register_failed')
            );
        }

        return $result;
    }

    public function standardRegister(Request $request){
        try{
            $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
            'phone' => ['required', 'string', 'max:15', 'min:10', 'unique:' . User::class],
            'job_title' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048']
        ]);

            if($validator->fails()){
                return $this->error(
                    message: __('message.register_failed'),
                    error: $validator->errors()->first()
                );
            }

            $imagePath = null;

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('users', 'public');
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'job_title' => $request->job_title,
                'bio' => $request->bio,
                'image' => $imagePath
            ]);

            if(!$user){
                return $this->error(
                    error: __('message.register_failed')
                );
            }
            
            $token = $user->createToken($user->name)->plainTextToken;

            $user_data = new AuthResource($user);

            return $this->success(
                message: __('message.register_success'),
                data: [
                    'user'=> $user_data,
                    'token'=> $token
                ]
            );
        }
        catch(Throwable $th){
            return $this->error(
                message: __('message.register_failed'),
                error: $th->getMessage()
            );
        }
    }

    public function customRegister(Request $request){

    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete;

        return $this->success(message:__('message.logout_success'), data:[]);
    }
}
?>