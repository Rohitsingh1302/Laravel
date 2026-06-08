<!DOCTYPE html>
<html>
<head>
    <title>Insert New Employee</title>
</head>
<body>
    <h1>Insert New Employee</h1>
    <form action="/insert" method="POST">
        @csrf
        
        <label>Employee ID</label>
        <input type="text" name="emp_id" placeholder="e.g., EMP102" required>
        <br><br>
        
        <label>Name</label>
        <input type="text" name="name" placeholder="e.g., John Doe" required>
        <br><br>
        
        <label>Email</label>
        <input type="email" name="email" placeholder="e.g., john@gmail.com" required>
        <br><br>
        
        <label>Salary</label>
        <input type="number" name="salary" placeholder="e.g., 50000" required>
        <br><br>
        
        <label>Joining Date</label>
        <input type="date" name="joining_date" required>
        <br><br>
        
        <button type="submit">Add Employee</button>
        <a href="/">Back</a>
    </form>
</body>
</html>
