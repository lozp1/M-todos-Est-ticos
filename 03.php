<?php

declare(strict_types=1);
include 'includes/header.php';

// Metodos Estaticos
class Producto {
    public $imagen;
    public static $imagenPlaceHolder = "Imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen ){

        if($imagen){
            self::$imagenPlaceHolder = $imagen;
        }
    }

    public static function obtenerProductoImagen() {
        return self::$imagenPlaceHolder;
    }

    public static function obtenerProducto() {
        echo "Obteniendo datos del Producto...";
    }

    public function mostrarProducto(): void {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    // acceder | obtener
    public function getNombre(): string {
        return $this->nombre;
    }

    // modificar | establecer
    public function setNombre(string $nombre) {
        return $this->nombre = $nombre;
    }
}

// crear instancia
$producto = new Producto("Tablet", 200, true, "");
echo "<pre>";
echo $producto-> obtenerProductoImagen();
echo "</pre>";

$producto2 = new Producto("Monitor", 300, true, "monitorCurvo.jpg");
echo "<pre>";
echo $producto2-> obtenerProductoImagen();
echo "</pre>";

include 'includes/footer.php';