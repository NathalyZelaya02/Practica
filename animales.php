<?php
// Definimos la clase Animal, que será la clase padre
class Animal {
    public $imagen;

    public function sonido() {
        // el sonido por defecto del animal
    }
}

// Definimos la clase Gato, que hereda de la clase Animal
class Gato extends Animal {
    public function __construct() {
        $this->imagen = "gato.jpg";
    }

    public function sonido() {
        return "Miau";
    }
}

// Definimos la clase Perro, que hereda de la clase Animal
class Perro extends Animal {
    public function __construct() {
        $this->imagen = "perro.jpg";
    }

    public function sonido() {
        return "Guau";
    }
}

// Definimos la clase Vaca, que hereda de la clase Animal
class Vaca extends Animal {
    public function __construct() {
        $this->imagen = "vaca.jpg";
    }

    public function sonido() {
        return "Muu";
    }
}
?>