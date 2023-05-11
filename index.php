<?php   


class Producto{
//DEFINICION DE PRODUCTOS
    public $precio = 2.56;
    public string $nombre = "Nombre";
    public bool $disponible = true;

//DEFINICION DE METODOS

public function mostrarNombreProcto {} {
    echo $this->nombre;
}

}
//CREACION DE UN OBJETO
//CREAR INSTANCIA

$mesa = new Producto ();

$mesa->nombre = "Mesa";
$mesa->precio = 500;
$mesa->disponible = true;

echo "<pre>";
var_dump($producto1);
echo "</pre>";

$mesa->mostrarNombreProducto ();
$silla->mostrarNombreProducto ();
 ?>