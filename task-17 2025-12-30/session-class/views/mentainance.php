<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog App</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #000;
        }

        .error-box {
            background: #fff;
            padding: 40px 50px;
            border-radius: 16px;
            text-align: center;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 15px 40px rgba(255, 255, 255, 0.15);
        }

        .error-box h1 {
            font-size: 90px;
            color: #000;
            margin-bottom: 10px;
        }

        .error-box h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #222;
        }

        .error-box p {
            font-size: 15px;
            color: #444;
            margin-bottom: 25px;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <div class="error-box">
        <h1>OOPS..</h1>
        <p>
            Sorry, the service is under mentainance right now, please come again soon.
        </p>
    </div>

</body>
</html>