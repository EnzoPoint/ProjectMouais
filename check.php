<?php
$post_data = http_build_query(
    array(
        'secret' => "6LfE2ZkaAAAAAI9oOMby5LSoBH__ZzcoIDfPwHj7",
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
    )
);
$context  = stream_context_create($opts);
$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
$result = json_decode($response);

if (!$result->success) {
    header("Location: ./index.php?err=999");    
}

$hwid = $_POST['hwid'];

try {
    $hwidsite = file_get_contents('./test.txt', true);
    if(strpos($hwidsite, $hwid) !== false) {
        // $dir = "./stock_dorks/";
        // $handler = opendir($dir);
        // $files = array_diff($handler, array('.', '..'));
        // echo $files;
        // $nbDir = count(glob("$dir/*"));
        // if($nbDir === 0) {
        //     Header("Location: ./index.php?err=50");
        // } 
        // echo "Nombre de Stock Encore : ". $nbDir;
        // if ($handle = opendir($dir)) {
        //     while (false !== ($entry = readdir($handle))) {
        //         if ($entry != "." && $entry != "..") {
        //             echo "<a href='download.php?file=".$entry."'>".$entry."</a>\n";
        //         }
        //     }
            
        //     closedir($handle);
        // }

        $file = file('./stock_dorks/dorks.txt');
        $nbligne = count($file);
        if($nbligne < 10) {
            Header("Location: ./index.php?err=50");
        } else {
            file_put_contents('dorks1.txt', "--- Dork Daily ---");

            $texte = file_get_contents('dorks1.txt');
        
            foreach($file as $numeroligne => $ligne) { 
                for ($i = 0; $i < 2500; $i++) {
                
                    $texte .= "\n $ligne";
                    file_put_contents('dorks.txt', $texte);
                }
        }

        $ptr = fopen('./stock_dorks/dorks.txt', "r");
        $contenu = fread($ptr, filesize('./stock_dorks/dorks.txt'));

        fclose($ptr);

        $contenu = explode(PHP_EOL, $contenu);

        for($i = 0; $i < 10; $i++) {
            echo "test";
            unset($contenu[$i]);
        }
        $contenu = array_values($contenu); 
        
        $ptr = fopen("./stock_dorks/dorks.txt", "w");
        fwrite($ptr, $contenu);
    }

    } else {
        Header("Location: ./index.php?err=1");
    }
} catch (Exception $e) {
    Header("Location: ./index.php?err=0");
}

?>
