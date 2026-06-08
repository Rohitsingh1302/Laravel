<!DOCTYPE html>
<html>
<head>
    <title>Employee Management System</title>
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
            max-width: 800px;
            width: 100%;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }
        .routes {
            display: grid;
            gap: 15px;
        }
        .route-item {
            padding: 15px;
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            border-radius: 5px;
            transition: transform 0.2s;
        }
        .route-item:hover {
            transform: translateX(5px);
            background: #e7e9f3;
        }
        .route-item a {
            text-decoration: none;
            color: #667eea;
            font-weight: 600;
            display: block;
            margin-bottom: 5px;
        }
        .route-item a:hover {
            color: #764ba2;
        }
        .description {
            color: #666;
            font-size: 14px;
        }
        .method {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
            margin-right: 8px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>👨‍💼 Employee Management System</h1>
        <p class="subtitle">CRUD Operations with Query Builder</p>
        
        <div class="routes">
            <div class="route-item">
                <span class="method">GET</span>
                <a href="/insert">/insert</a>
                <div class="description">Insert a new employee (Rohit with salary 60000)</div>
            </div>
            
            <div class="route-item">
                <span class="method">GET</span>
                <a href="/show">/show</a>
                <div class="description">Display all employees from database</div>
            </div>
            
            <div class="route-item">
                <span class="method">GET</span>
                <a href="/update/1">/update/{id}</a>
                <div class="description">Update employee salary to 70000 (try /update/1)</div>
            </div>
            
            <div class="route-item">
                <span class="method">GET</span>
                <a href="/delete/1">/delete/{id}</a>
                <div class="description">Delete an employee (try /delete/1)</div>
            </div>
            
            <div class="route-item">
                <span class="method">GET</span>
                <a href="/highsalary">/highsalary</a>
                <div class="description">Show employees with salary greater than 50,000</div>
            </div>
        </div>
    </div>
</body>
</html>
