<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAIL FORM</title>
</head>
<body>
    <h1>EMAIL FORM</h1>
    <form action="sendEmail" method="POST">
        @csrf
        <label> TO: </label>
        <input type="email" name="to" required>
        <br><br>
        <label> SUBJECT: </label>
        <input type="text" name="subject" required>
        <br><br>
        <label> MESSAGE: </label>
        <textarea name="message" required></textarea>
        <br><br>
        <button type="submit">SEND EMAIL</button>   
    </form>
</body>
</html>