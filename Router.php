<?php

namespace App;

use App\KeychainController;
class Router
{
    /*all the valid routes are saved in this array*/
    private $validRoutes = ['/index'];
    public function get($path){

        //if the route is valid, the controller with the right method is called
        if(in_array($path, $this->validRoutes)){
            switch ($path){
                case '/index':
                    KeychainController::class->index();
                    break;
                default:
                    echo "error in routing";
            }
        }else{
            echo "not found";
        }
    }
}