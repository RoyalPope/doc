<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
               body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    }
  
    form {
    border: 5px inset rgb(0, 158, 158);
    max-width: 400px;
    margin: 0 auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 8px;
    margin-top: 80px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  
    h1 {
    font-size: 24px;
    margin-bottom: 20px;
    }
    select {
    width: 200px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    appearance: none;
    }

    select option {
    font-size: 16px;
    }

    select option:checked {
    background-color: #f0f0f0;
    }

    input{
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    }
  
    input[type="submit"] {
    background-color: rgb(0, 158, 158);
    color: white;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    }
  
    input[type="submit"]:hover {
    background-color: white;
    color:rgb(0, 158, 158);
    border: 1px solid rgb(0, 158, 158);
    transform: scale(1.05);
    }
    a {
    color: rgb(0, 158, 158);
    text-decoration: none;
    }

    a:hover {
    color: #7D7C7A;
    }
    span{
        display: flex;
        justify-content: center;
        font-family: 'Lucida Handwriting';
        color: rgb(0,158,158);
        font-weight: bold;
    }
    </style>
</head>
<body>
    <form action="create.php" method="post">
        <span>HPOINT Appointments</span>
    <h1>Sign Up</h1>    
    Username: <input type="text" name="username">
        Password: <input type="password" name="pass">
        User Type: <select name="type">
            <option value="#"></option>
            <option value="Doc">Doc</option>
            <option value="Nurse">Nurse</option>
            <option value="Admin">Admin</option>
        </select><br><br>
        <input type="submit" value="Submit">
        Have account? <a href="index.php">LogIn</a>
    </form>
</body>
</html>