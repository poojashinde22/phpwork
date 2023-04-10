<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup/Login Page</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Sign Up</h2>
                <form action="signup.php" method="post">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Phone:</label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password:</label>
                        <input type="password" class="form-control" name="confirm_password" required>
                    </div>
                    <div class="form-group">
                        <label>Profile Image:</label>
                        <input type="file" class="form-control" name="profile_image" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label>Cover Image:</label>
                        <input type="file" class="form-control" name="cover_image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label>Email/Phone/Username:</label>
                        <input type="text" class="form-control" name="login_id" required>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
