<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php form validation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
         <h2>User Registration Form</h2>
    <form action="formhandler.php" method="post">
        <div class="form-group">
            <label>User Name</label>
        <input type="text" name="name" required>
        </div>
        
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" name="submit">
        </div>
        
    </form>
    </div>
   
    
</body>
</html>