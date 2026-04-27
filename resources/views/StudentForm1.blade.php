<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student Form  validation</h2>
    <form action="#" method="POST">
        @csrf
            <label>Enter the name:</label><br>
            <input type="text" name="name" ><br> <br>
            <label >Enter the roll no:</label><br>
            <input type="text" name="roll_no" ><br> <br>
            <label >Enter the section:</label><br>
            <input type="text"  name="section" ><br> <br>
            <label >Enter the email:</label><br>
            <input type="text"  name="email" ><br> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>