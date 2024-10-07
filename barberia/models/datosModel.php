<?php
require_once "./config/conexion.php";

class datosModel extends mainModel{

    protected function consultarDatos(){
        $query = $query = "SELECT id, nombre, celular, fecha FROM datos";
        $sql = mainModel::connect()->prepare($query);
        $sql->execute();
        $datos = $sql->fetchAll(PDO::FETCH_ASSOC);

        if($datos){
            $resultado = array();
            foreach($datos as $dato){
                $item = new dato(
                    $dato["id"],
                    $dato["nombre"],
                    $dato["celular"],
                    $dato["fecha"]
                );
                array_push($resultado, $item);
            }
        return $datos;
    }

}
}

class dato{
    public $id;
    public $nombre;
    public $celular;
    public $fecha;

    public function __construct($id, $nombre, $celular, $fecha) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->celular = $celular;
        $this->fecha = $fecha;
    }
}


