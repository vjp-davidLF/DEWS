<?php
abstract class Persona
{
    public string $nombre;
    public string $apellido;
    public int $edad;

    public function __construct(string $nombre, string $apellido, int $edad )

    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    
    public function getEdad(): int
    {
        return $this->edad;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . ' ' . $this->apellido;
    }

      abstract public function toHtml(); 
    

   public function __toString() : string {
    $toString = "<p>Nombre Completo: " . $this->getNombreCompleto() . "</p>";
    $toString .= "<p>Edad: " . $this->getEdad(). "</p>";
    return $toString;
   }
}


class Empleado extends Persona
{
    private float $sueldo;
    private array $telefonos;
    public static float $sueldoTope = 3333;

    public function __construct(string $nombre, string $apellido, float $sueldo = 1000, int $edad)
    {
        parent::__construct($nombre, $apellido,$edad);
        $this->sueldo = $sueldo;
        $this->telefonos = [];
    }

    public function setSueldo(float $sueldo): void
    {
        $this->sueldo = $sueldo;
    }

    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public function listarTelefonos(): string
    {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }

    public function debePagarImpuestos(Persona $edad): bool
    {
        if($this->edad>21){
            echo "Debe pagar impuestos";
            return $this->sueldo > self::$sueldoTope;
        }
        else{
            echo "No debe pagar impuestos";
            return false;
        }
        
    }

    public static function PersonatoHtml(Persona $p): string
    {
        $html = "<p>Nombre: " . $p->getNombreCompleto() . "</p>";
        $html .= "<p>Sueldo: " . self::$sueldo . "</p>";
        $html .= "<p>Teléfonos:</p>";
        $html .= "<ol>";
        foreach (self::$telefonos as $telefono) {
            $html .= "<li>" . $telefono . "</li>";
        }
        $html .= "</ol>";
        return $html;
    }

    public function __toString() : string {
    $toString = "<p> Clase padre: " . parent::__toString() . "</p>";
    $toString .= "<p>Sueldo: " . $this->getSueldo() . "</p>";
    $toString .= "<p>Teléfonos: " . $this->getTelefonos(). "</p>";
    $toString .= "<p>Debe Pagar: " . ($this->debePagarImpuestos() ? "Sí" : "No") . "</p>";
    return $toString;
   }

}

// Ejemplo de uso
$empleado1 = new Empleado("David", "López", 7000);
$empleado2 = new Empleado("Ana", "Martínez");

echo "Empleado 1: " . $empleado1->getNombreCompleto() . ", sueldo: " . $empleado1->getSueldo() . "<br>";
echo "Empleado 2: " . $empleado2->getNombreCompleto() . ", sueldo: " . $empleado2->getSueldo();