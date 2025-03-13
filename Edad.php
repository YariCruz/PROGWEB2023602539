<body>
    <h1>Lista de Personas</h1>
        </body>
<?php
class Persona {
    private $nombre;
    private $fecNac;
    private $tel;

    public function __construct($nombre, $fecNac, $tel){
        $this->nombre = $nombre;
        $this->fecNac = $fecNac;
        $this->tel = $tel;
    }

    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre($value){
        $this->nombre = $value;
    }

    public function getFecNac(){
        return $this->fecNac;
    }
    
    public function setFecNac($value){
        $this->fecNac = $value;
    }

    public function getTel(){
        return $this->tel;
    }
    
    public function setTel($value){
        $this->tel = $value;
    }

    public function getEdad(){
        $fechaNac = new DateTime($this->fecNac);
        $hoy = new DateTime();
        $edad = $hoy->diff($fechaNac)->y;
        return $edad;
    }
}

// Ejemplo de uso:
$personas = [
    new Persona("Yari", "2004-09-02", "5524023344"),
    new Persona("Yue", "2019-09-24", "5598497766"),
    new Persona("Sel", "1977-11-29", "5544538522"),
    new Persona("Kimi", "1977-10-20", "5544556699"),
    new Persona("Brau", "2003-12-06", "5566950944"),
    new Persona("Gus", "2005-11-12", "5522959688"),
    new Persona("Peto", "2014-01-02", "5530217744"),
    new Persona("Mariana", "2001-06-06", "5670119922"),
    new Persona("Arturo", "2004-04-12", "5601123655"),
    new Persona("Cristian", "2004-04-12", "5655493322"),
];

echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Fecha Nacimiento</th><th>Edad</th><th>Teléfono</th></tr>";
foreach ($personas as $persona) {
    echo "<tr>";
    echo "<td>" . $persona->getNombre() . "</td>";
    echo "<td>" . $persona->getFecNac() . "</td>";
    echo "<td>" . $persona->getEdad() . " años</td>";
    echo "<td>" . $persona->getTel() . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de personas </title>
        <style>
            td{
                background-color:cyan;
            }
            </style>
            
    </head>
        </html>