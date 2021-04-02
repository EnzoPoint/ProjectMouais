<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Dork</title>
<script type="text/javascript">
        var verifyCallback = function(response) {
        
        };
      var widgetId;
      var onloadCallback = function() {
        widgetId =
        grecaptcha.render('captcha', {
          'sitekey' : '6LfE2ZkaAAAAAK1IOQp9U2jxSKCY4xSDSJl2Xa2I',
          'callback' : verifyCallback,
          'theme' : 'dark'
        });
      };
    </script>
  </head>
  <body>

    <h1 class="title">Daily Dork Gen</h1>

    <form enctype="multipart/form-data" action="./check.php" method="post">
  
        <input type="password" name="hwid" id="hwid"> </input>
 	   <div id="captcha"></div>
 	    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer> </script>
        <input type="submit" class="btn" value="Click to Gen"></input>
        <?php
            require_once './checkstats.php';

            verif_get();
        ?>
        <br> 
        <p> Pour récuperer votre hwid :</p>
        <br>
        <p> Windows : </p>
        <p><a href="./script/Script_Powershell.ps1"
   download="Script_Powershell.ps1">Télécharger le Script</a></p>
        <br>
        <p> Pour le lancer Windows + R et tapez powershell </p>
        <p>     - Pour l'éxecuté allez au PATH de la ou se trouve Script_Powershell.ps1 (via cd ./chemin_daccess/.. (commande dir for help)) puis exécute en tappant cette commande ./Script_Powershell.ps1 et il vous renverra votre HWID (uuid). </p>
        <br>
        <p> Linux : </p>
        <p><a href="./script/Script_Linux.sh"
   download="Script_Powershell.ps1">Télécharger le Script</a></p>
        <br>
        <p> Pour le lancer | Lancez le Terminal </p>
        <p>     - Pour l'éxecuté allez au PATH de la ou se trouve le Script_Linux.sh (via cd ./chemin_dacces../ (commande ls for help)) puis exécute en tappant cette commande sh ./Script_Linux.sh et il vous renverra votre HWID (uuid). </p>
    </form>

</body>
</html>