<?php
/* TODO: Inicio de Sesion en la WebApp */
session_start();

class Conectar
{
    protected $dbh;

    protected function Conexion()
    {
        try {
            //TODO: Cadena de Conexion Local
            //$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=fernando_helpdesk","root","");
            //TODO: Cadenad e Conexion Produccion
            $conectar = $this->dbh = new PDO("mysql:host=ls-eb63f4de77556b4015d673d3269fd3adbf2783d5.c4do5q4y1jfp.us-east-2.rds.amazonaws.com;dbname=fernando_helpdesk", "dbmasteruser", "Fernando123");
            return $conectar;
        } catch (Exception $e) {
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    /* TODO: Set Name para utf 8 español - evitar tener problemas con las tildes */
    public function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    /* TODO: Ruta o Link del proyecto */
    public static function ruta()
    {
        //TODO: Ruta Proyecto Local
        //return "http://localhost:90/PERSONAL_HelpDesk/";
        //TODO: Ruta Proyecto Produccion
        return "http://137.184.246.214:80/PERSONAL_HELPDESK";
    }
}
