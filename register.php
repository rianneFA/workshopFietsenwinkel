<?php
require_once "header.php";
require_once "database/userFunctions.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    registerUser($username, $email, $password);

    echo "Registeren is gelukt! Je kan na inloggen";

}
?>

<html>
<body>
    <div class="login">
        <h2 class="bold">Registreer</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
            </div>  
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="">
            </div>  
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="">
            </div>
            <div class="form-group">
                <input type="submit" class="buttonPrimair" value="Submit" name="submit">
                <input type="reset" class="buttonPrimair buttonSecondair" value="Reset">
            </div>
            <p>Heb je al een account? <a href="login.php" class="linkColorText">Login hier</a>.</p>
        </form>
    </div>    
</body>
</html>

<?php
require_once "footer.php";
?>