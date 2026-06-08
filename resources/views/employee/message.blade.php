<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            padding: 40px;
            text-align: center;
            max-width: 500px;
        }
        .message {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
            padding: 20px;
            background: #e7f3f3;
            border-left: 4px solid #667eea;
            border-radius: 5px;
        }
        .icon {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .back-btn {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            transition: background 0.2s;
        }
        .back-btn:hover {
            background: #764ba2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">{{ $icon }}</div>
        <div class="message">{{ $message }}</div>
        <a href="/" class="back-btn">← Back to Home</a>
    </div>
</body>
</html>
