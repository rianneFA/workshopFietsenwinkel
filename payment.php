<?php
    require_once "header.php";
?>
<html>
    <body>
        <div class="paymentMethod">
            <div>
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
            </div></div>

            <div class="bezorgDatum">
                <h2>Bezorgdatum</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Selecteer Bezorgdatum</label>
                        <input type="date" name="bezorgdatum" class="form-control" value="">
                    </div>   
                </form>    
            </div>

            <div class="betaalMethodes">
                <h2>Betaal methodes</h2>
                
                <form action="" method="post" class="formPaymethod">
                    <select name="payMethod" size="5">
                        <option value="paypal">PayPal</option>
                        <option value="creditcard">Credit Card</option>
                        <option value="bank">SEPA/Bank Transfer</option>
                        <option value="bitcoin">Bitcoin</option>
                        <option value="achteraf">Achteraf Betalen</option>
                    </select>
                    <!-- <div class="paypalPayMethod">
                        <a class="paymethodA"><image class="paymethodImg" src="img/paypal.png"></image><p class="paymethodP">PayPal</p></a>
                        <input type="checkbox" name="paypal" class="checkboxPayment" value="">
                    </div>   
                    <div class="paypalPayMethod">
                        <a class="paymethodA"><image class="paymethodImg" src="img/credit-card.png"></image><p class="paymethodP">Credit Card</p></a>
                        <input type="checkbox" name="creditcard" class="checkboxPayment" value="">
                    </div> 
                    <div class="paypalPayMethod">
                        <a class="paymethodA"><image class="paymethodImg" src="img/bank.png"></image><p class="paymethodP">SEPA/Bank Transfer</p></a>
                        <input type="" name="paypal" class="checkboxPayment" value="">
                    </div> 
                    <div class="paypalPayMethod">
                        <a class="paymethodA"><image class="paymethodImg" src="img/bitcoin-logo.png"></image><p class="paymethodP">Bitcoin</p></a>
                        <input type="checkbox" name="paypal" class="checkboxPayment" value="">
                    </div> 
                    <div class="paypalPayMethod">
                        <a class="paymethodA"><image class="paymethodImg" src="img/back-arrow.png"></image><p class="paymethodP">Achteraf Betalen</p></a>
                        <input type="checkbox" name="paypal" class="checkboxPayment" value="">
                    </div>  -->
                </form>    
            </div>

            <button>Betalen</button>
        </div>    
    </body>
</html>

<!-- <?php
    require_once "footer.php";
?> -->