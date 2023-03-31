<?php
    require_once "header.php";
?>
<html>
    <body>
        <div class="paymentMethod">
            <div class="leftSide">
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

            <div class="bezorgDatum">
                <h2>Bezorgdatum</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Selecteer Bezorgdatum</label>
                        <input type="date" name="bezorgdatum" class="form-control" value="">
                    </div>   
                </form>    
            </div></div>

            <div class="rightSide">
                <div class="betaalMethodes">
                    <h2 class="h2BetaalMethodes">Betaal methodes</h2>
                    <form action="" method="post">
                        <div class="paypalPayMethod">
                            <a class="paymethodA"><image class="paymethodImg" src="img/paypal.png"></image><p class="paymethodP">PayPal</p></a>
                        </div>   
                        <div class="paypalPayMethod">
                            <a class="paymethodA"><image class="paymethodImg" src="img/credit-card.png"></image><p class="paymethodP">Credit Card</p></a>
                        </div> 
                        <div class="paypalPayMethod">
                            <a class="paymethodA"><image class="paymethodImg" src="img/bank.png"></image><p class="paymethodP">SEPA/Bank Transfer</p></a>
                        </div> 
                        <div class="paypalPayMethod">
                            <a class="paymethodA"><image class="paymethodImg" src="img/bitcoin-logo.png"></image><p class="paymethodP">Bitcoin</p></a>
                        </div> 
                        <div class="paypalPayMethod">
                            <a class="paymethodA"><image class="paymethodImg" src="img/back-arrow.png"></image><p class="paymethodP">Achteraf Betalen</p></a>
                        </div> 
                </div>
                <div class="buttonBetalenDiv">
                    <button>Betalen</button>
                </div>
            </div>    
        </div>    
    </body>
</html>

<?php
    require_once "footer.php";
?>