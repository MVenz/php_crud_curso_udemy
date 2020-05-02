<?php

class ConexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=crud_mvc","root","");

        return $bd;

    }

}

