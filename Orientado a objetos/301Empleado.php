<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=David , initial-scale=1.0">
    <title>Ej 1</title>
</head>

<body>
    <?php
    class Empleado
    {
        public string $nombre;
        public string $apellido;
        public float $sueldo;

        public function setNombre(string $nom)
        {
            $this->nombre = $nom;
        }

        public function setApellido(string $ape)
        {
            $this->apellido = $ape;
        }

        public function setSueldo(float $suel)
        {
            $this->sueldo = $suel;
        }


        public function getNombre(): string
        {
            return $this->nombre;
        }

        public function getApellido(): string
        {
            return $this->apellido;
        }

        public function getSueldo(): float
        {
            return $this->sueldo;
        }

        function getNombreCompleto(): string
        {
            return $this->nombre . ' ' . $this->apellido;
        }

        function debePagarImpuestos(): bool
        {

            if ($this->sueldo > 3333) {
                return true;
            } else {
                return false;
            }
        }
    }

    $empleado = new Empleado();
    $empleado->setNombre("David");
    $empleado->setApellido("López");
    $empleado->setSueldo("7000");

    echo "Mi nombre completo es: " . $empleado->getNombreCompleto() ;echo "<br>";
    echo "Mi sueldo es: " . $empleado->getSueldo() ;echo "<br>";
    echo "¿Debo pagar impuestos? " . ($empleado->debePagarImpuestos() ? "Si" : "No" );


    ?>
</body>

</html>