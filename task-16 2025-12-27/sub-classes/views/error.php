<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> </title>

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
            background: #000; /* black background */
        }

        .error-box {
            background: #fff; /* white card */
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

        .error-btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            border: 2px solid #000;
            transition: 0.3s ease;
        }

        .error-btn:hover {
            background-color: #fff;
            color: #000;
        }

        .page-error.hide-layout ~ footer, header{
            display: none;
        }
    </style>
</head>

<body>

    <div class="page-error hide-layout">
        <div class="error-box">
            <h1>404</h1>
            <h2>Page Not Found</h2>
            <p>
                Sorry, the page you are looking for might have been removed,
                renamed, or is temporarily unavailable.
            </p>
            <a href="index.php?page=home" class="error-btn">Back to Home</a>
        </div>
    </div>

</body>

</html>