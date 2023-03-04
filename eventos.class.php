<?php
class Evento
{
    public $usuario;
    public $titulo;
    public $fecha;

    public $lugar;
    public $descripcion;

    public function __construct($usuario, $titulo, $fecha, $lugar, $descripcion)
    {
        $this->usuario = $usuario;
        $this->titulo = $titulo;
        $this->fecha = $fecha;

        $this->lugar = $lugar;
        $this->descripcion = $descripcion;
    }

    //Creacion del get de los elementos del evento
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function getLugar()
    {
        return $this->lugar;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
define('SESION_EVENTOS', 'eventos');
define('ARREGLO_EVENTOS', 'eventos');

session_start();

if (!isset($_SESSION[SESION_EVENTOS])) {
    $_SESSION[SESION_EVENTOS] = array();
}

if (!isset($_SESSION[SESION_EVENTOS][ARREGLO_EVENTOS])) {
    $_SESSION[SESION_EVENTOS][ARREGLO_EVENTOS] = array();
}


//Creacion de instancias de los objetos evento
$evento1 = new Evento("1", "Fernando", "Cumpleaños de mamá", "22-10-2023", "Día de cumpleaños de mamá Importante");
$evento2 = new Evento("1", "Fernando", "Ir al super", "02-03-2023", "Comprar los alimentos para el mes");
$evento3 = new Evento("1", "Fernando", "Entrega del proyecto", "16-05-2023", "Entrega del proyecto de la clinica josefito");
$evento4 = new Evento("2", "Paola", "Entrevista de trabajo", "26-04-2023", "Entrevista de trabajo en el banco guebara");
$evento5 = new Evento("2", "Paola", "Reunion familiar(Cumpleaños)", "25-08-2023", "Reunion familiar en la casa de tia paca por su cumpleaños");
$evento6 = new Evento("2", "Paola", "Ir al gym", "03-03-2023", "Ir al gym a hacer abdomen");
$evento7 = new Evento("3", "Martin", "Cumpleaños de andrea", "25-09-2023", "Cumpleaños de andrea en casa de sus papas");
$evento8 = new Evento("3", "Martin", "Entrega del proyecto de las calles", "15-07-2023", "Entrega de proyecto en la colonia hernandez arreglo de calles");
$evento9 = new Evento("3", "Martin", "Ir a la clinica", "02-03-2023", "Ir a traer a firulais a la clinica medica");

//Guardando los objetos en el arreglo con el identificador de la cadena de eventos

$eventos = array($evento1, $evento2, $evento3, $evento4, $evento5, $evento6, $evento7, $evento8, $evento9);
?>