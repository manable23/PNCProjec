<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <style>
        /* Styles for the landing page */
        html, body {
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-image: url('https://i.imgur.com/9jPQjuY.jpeg'); /* Imgur image URL */
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            color: #fff;
        }
        .header {
            font-size: 48px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Text shadow for better visibility */
        }
        .top-links {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .top-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }
        .main-content {
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }
        .main-content a {
            display: inline-block;
            margin: 10px 0;
            padding: 15px 40px;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
            background-color: #333;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .main-content a:hover {
            background-color: #555;
        }

        .bottom-button {
            position: fixed;
            bottom: 125px; /* Adjust as needed */
            left: 48%; /* Center it horizontally */
            transform: translateX(-50%);
            z-index: 9999; /* Ensure it's on top */
            /* visibility: hidden; */
            opacity: 0;
            color: white;
            /* Additional styles to make it invisible */
            width: 0;
            height: 0;
            padding: 0;
            border: none;
            background: none;
            outline: none;
        }
    </style>
</head>
<body>
    <div class="top-links">
        @if (Route::has('login'))
            <a href="{{ route('login') }}">Login</a>
        @endif
        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif
    </div>
    <a href="{{ route('login') }}" class="bottom-button">Register</a>
</body>
</html>
