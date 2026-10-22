<?php

namespace App\Controllers;
use App\Providers\View;

/**Contrôleur de la page d'accceuil **/
class HomeController
{
    public function index()
    {
        return View::render(
            'home/index'
        );

        /**Cette méthode charge et retourne la vue
         * "home/index" **/
    exit;
    }
}