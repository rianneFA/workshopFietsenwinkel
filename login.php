<?php
require_once "header.php";
?>

<html>
<body>
    <div class="login">
            <h2>Login</h2>

        <!-- <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?> -->

        <form action="" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="buttonLoginform" value="Login">
            </div>
            <p>Nog geen account? <a href="register.php">Registreer nu</a>.</p>
        </form>
    </div>
</body>
</html>

<?php
require_once "footer.php";
?>