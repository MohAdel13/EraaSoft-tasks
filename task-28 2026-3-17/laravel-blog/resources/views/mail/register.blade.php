<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Email</title>
</head>
<body style="font-family: Arial, sans-serif; background-color:#f4f4f4; padding:20px;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <table width="600" cellpadding="20" cellspacing="0" style="background:white; border-radius:8px;">
                    
                    <!-- Header -->
                    <tr>
                        <td align="center" style="background:#4CAF50; color:white; border-radius:8px 8px 0 0;">
                            <h2>Welcome {{ $user->name }} 🎉</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td>
                            <p>Hello {{ $user->name }},</p>

                            <p>
                                Thank you for registering with us. Your account has been successfully created.
                            </p>

                            <p>
                                You can now log in and start using our platform.
                            </p>

                            <p style="text-align:center; margin:30px 0;">
                                <a href="{{ url('/login') }}" 
                                   style="background:#4CAF50; color:white; padding:10px 20px; text-decoration:none; border-radius:5px;">
                                   Login Now
                                </a>
                            </p>

                            <p>
                                If you have any questions, feel free to contact us anytime.
                            </p>

                            <p>Best regards,<br>Your Team</p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="font-size:12px; color:#999;">
                            © {{ date('Y') }} Blog App. All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>