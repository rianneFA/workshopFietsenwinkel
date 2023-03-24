<?php
    require_once "header.php";
?>

<html>
    <body>
        <div class="adresGegevens">
            <h2>Adres gegevens</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label>Plaats</label>
                    <input type="text" name="plaats" class="form-control" value="">
                </div>    
                <div class="form-group">
                    <label>Straatnaam</label>
                    <input type="password" name="straatnaam" class="form-control">
                </div>
                <div class="form-group">
                    <label>Huisnr & toevoeging</label>
                    <input type="password" name="huisnr" class="form-control">
                </div>
                <div class="form-group">
                    <label>Postcode</label>
                    <input type="password" name="postcode" class="form-control">
            </form>
        </div>

        <div>
            <h2>Bezorgdatum</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label>Selecteer Bezorgdatum</label>
                    <input type="date" name="bezorgdatum" class="form-control" value="">
                </div>   
            </form>    
        </div>

        <div>
            <h2>Betaal methodes</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label>Selecteer Bezorgdatum</label>
                    <input type="date" name="bezorgdatum" class="form-control" value="">
                </div>   
            </form>    
        </div>
    </body>
</html>

<?php
    require_once "footer.php";
?>