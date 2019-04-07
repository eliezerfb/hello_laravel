<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function getNome(){
        return 'Eliézer Bourchart';
    }

    public function getNameByID($id){
        $names = ['Jiraiya', 'Ultraman', 'Jaspion', 'Jiban', 'Changeman', 'Kamen Rider Black'];
        if (array_key_exists($id, $names))
            return $names[$id];
        return "Não encontrado!";
    }
}
