<?php
    function verif_get() {
        if(isset($_GET['err'])) {
            $erreur = $_GET['err'];
            if($erreur == 1) {
                echo "<center> <p style='color:red'>HWID invalide</p> </center>";
            }

            if($erreur == 0) {
                echo "<center> <p style='color:red'>Erreur Inconnu (Recommancez)</p> </center>";
            } 

            if($erreur == 50) {
                echo "<center> <p style='color:red'>Stock Épuisé.</p> </center>";
            }
            
            if($erreur == 999) {
                echo "<center> <p style='color:red'>Captcha Invalide Retry Plz</p> </center>";
            }
        }
}