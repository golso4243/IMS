 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> IMS Login | Inventory Management System </title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="loginStyle.css">

    <!-- Awesome Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <section>
        <div class="form-container">

            <h1>IMS</h1>
            <h3>INVENTORY MANAGEMENT SYSTEM</h3>
            <hr>

            <!-- Login Form -->
            <form action="loginAuth.php" method="POST" >

                <!-- UserID -->
                <div class="control">
                    <label for="userID">User ID:</label><br>
                    <input type="text" name="username" id="username" required>
                </div>

                <!-- Password -->
                <div class="password-container">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="password" required>
                    <i title="Show/Hide Password" class="fa-solid fa-eye-slash" id="show" onclick="iconFunction()"></i>
                    <i title="Show/Hide Password" class="fa-solid fa-eye" id="hide" onclick="iconFunction()"></i>
                </div>

                <!-- Remember Me -->
                <span class="checkbox"><input type="checkbox" name="rememberMe" id="rememberMe"> Remember Me</span>

                <!-- Submit Login Credentials -->
                <div class="control">
                    <input type="submit" value="Login">
                </div>

            </form>

            <!-- Forgot Password -->
            <div class="link">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="loginScript.js"></script>
</body>
</html>