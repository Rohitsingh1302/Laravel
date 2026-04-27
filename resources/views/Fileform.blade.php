<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="uploadData" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Select File:</label>
        <input type="file" name="file">
        <br><br>
        <button type="submit">UPLOAD FILE</button>
</body>
</html>