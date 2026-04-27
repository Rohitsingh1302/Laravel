<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> COOOKIES</title>
</head>
<body>
    <form action="login" method="post">
        @csrf
        <label>Enter the name:-</label><br>
        <input type="text" name="name"><br><br>

        <label>Enter the password:-</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Submit</button>   
    </form>
</body>
</html>
