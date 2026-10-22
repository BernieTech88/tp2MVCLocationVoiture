<?php
namespace App\Providers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View {
    static public function render(string $template, $data = []){
       // echo "TEMPLATE : ".$template.".php";
       // echo "Twig pk";
       //exit;

        $loader = new FilesystemLoader('views');
        $twig = new Environment($loader);
        $twig->addGlobal('asset', ASSET);
        $twig->addGlobal('base', BASE);

        /*
         echo "<pre>";
    var_dump(file_exists('views/home/index.php'));
    echo "</pre>";

    die();
*/
        echo $twig->render($template.".php", $data);
    }

    static public function redirect(string $url){
        header('location:'.BASE.'/'.$url);
    }

}
?>