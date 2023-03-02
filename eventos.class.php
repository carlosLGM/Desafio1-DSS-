<?php
//Creando la clase de eventos importantes
class Evento{
    private $identificador;
    private $nombre;
    private $tituloevento;
    private $fechaevento;
    private $descripcionevento;

    //Crecion del constructor del evento
    public function __construct($identificador, $nombre, $tituloevento, $fechaevento, $descripcionevento){
        $this->identificador = $identificador;
        $this->nombre = $nombre;
        $this->tituloevento = $tituloevento;
        $this->fechaevento = $fechaevento;
        $this->descripcionevento = $descripcionevento;
    }
   //Creacion del get de los elementos del evento
    public function getIdentificador(){
        return $this->identificador;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getTituloevento(){
        return $this->tituloevento;
    }
    public function getFechaevento(){
        return $this->fechaevento;
    }
    public function getdescripcionevento(){
        return $this->descripcionevento;
    }
    public function autentificacionFecha($fechaevento){
        return $this->fechaevento === $fechaevento;
    }
}

class ListaEventos {
    private $eventos = [];

    // Método para agregar un evento
    public function agregarEvento($nombre,$tituloevento, $fechaevento) {
        // Generar un ID único para el evento
        $id = uniqid();

        // Crear un nuevo objeto Evento con los valores proporcionados
        $evento = new Evento($id, $nombre,$tituloevento, $fechaevento);

        // Agregar el evento a la lista de eventos
        array_push($this->eventos, $evento);

        // Devolver el objeto Evento recién creado
        return $evento;
    }

    // Método para modificar un evento existente
    public function modificarEvento($id, $nombre, $fecha, $lugar) {
        // Buscar el evento por su ID
        $evento = $this->buscarEventoPorId($id);

        // Actualizar el evento con los valores proporcionados
        $evento->setNombre($nombre);
        $evento->setFecha($fecha);
        $evento->setLugar($lugar);

        // Devolver el objeto Evento actualizado
        return $evento;
    }

    // Método para eliminar un evento existente
    public function eliminarEvento($id) {
        // Buscar el evento por su ID
        $index = $this->buscarEventoIndexPorId($id);

        // Eliminar el evento de la lista de eventos
        array_splice($this->eventos, $index, 1);

        // Devolver verdadero
        return true;
    }

    // Método para buscar un evento por su ID
    public function buscarEventoPorId($id) {
        foreach ($this->eventos as $evento) {
            if ($evento->getId() == $id) {
                return $evento;
            }
        }

        return null;
    }

    // Método para buscar el índice de un evento por su ID
    public function buscarEventoIndexPorId($id) {
        foreach ($this->eventos as $index => $evento) {
            if ($evento->getId() == $id) {
                return $index;
            }
        }

        return null;
    }
}

  


//Creacion de instancias de los objetos evento
$evento1 = new Evento("1","Fernando","Cumpleaños de mama","22-10-2023","Dia de cumpleaños de mama Importante");
$evento2 = new Evento("1","Fernando","Ir al super","02-03-2023","Comprar los alimentos para el mes");
$evento3 = new Evento("1","Fernando","Entrega del proyecto","16-05-2023","Entrega del proyecto de la clinica josefito");
$evento4 = new Evento("2","Paola","Entrevista de trabajo","26-04-2023","Entrevista de trabajo en el banco guebara");
$evento5 = new Evento("2","Paola","Reunion familiar(Cumpleaños)","25-08-2023","Reunion familiar en la casa de tia paca por su cumpleaños");
$evento6 = new Evento("2","Paola","Ir al gym","03-03-2023","Ir al gym a hacer abdomen");
$evento7 = new Evento("3","Martin","Cumpleaños de andrea","25-09-2023","Cumpleaños de andrea en casa de sus papas");
$evento8 = new Evento("3","Martin","Entrega del proyecto de las calles","15-07-2023","Entrega de proyecto en la colonia hernandez arreglo de calles");
$evento9 = new Evento("3","Martin","Ir a la clinica","02-03-2023","Ir a traer a firulais a la clinica medica");

//Guardando los objetos en el arreglo con el identificador de la cadena de eventos

$eventos = array($evento1,$evento2,$evento3,$evento4,$evento5,$evento6,$evento7,$evento8,$evento9);
?>