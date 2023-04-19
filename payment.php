<?php
    require_once "header.php";
?>
<html>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/payment.js"></script>
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
                            <input type="text" name="straatnaam" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Huisnr & toevoeging</label>
                            <input type="text" name="huisnr" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Postcode</label>
                            <input type="text" name="postcode" class="form-control">
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
                            <a class="paymethodA" id="payPalA"><image class="paymethodImg" src="img/paypal.png"></image><p class="paymethodP" id="payPal">PayPal</p></a>
                        </div>   
                        <div class="paypalPayMethod">
                            <a class="paymethodA" id="creditA"><image class="paymethodImg" src="img/credit-card.png"></image><p class="paymethodP" id="credit">Credit Card</p></a>
                        </div> 
                        <div class="paypalPayMethod">
                            <a class="paymethodA" id="bankA"><image class="paymethodImg" src="img/bank.png"></image><p class="paymethodP" id="bank">SEPA/Bank Transfer</p></a>
                        </div> 
                        <div class="paypalPayMethod">
                            <a class="paymethodA" id="bitcoinA"><image class="paymethodImg" src="img/bitcoin-logo.png"></image><p class="paymethodP" id="bitcoin">Bitcoin</p></a>
                        </div> 
                        <div class="paypalPayMethod">
                            <a class="paymethodA" id="achterafA"><image class="paymethodImg" src="img/back-arrow.png"></image><p class="paymethodP" id="achteraf">Achteraf Betalen</p></a>
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