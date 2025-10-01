<?php
class Persona
{
    public string $nombre;
    public string $apellido;

    public function __construct(string $nombre, string $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
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
}


class Empleado extends Persona
{
    private float $sueldo;
    private array $telefonos;
    public static float $sueldoTope = 3333;

    public function __construct(string $nombre, string $apellido, float $sueldo = 1000)
    {
        parent::__construct($nombre, $apellido);
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

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > self::$sueldoTope;
    }

    public static function PersonatoHtml(Empleado $emp): string
    {
        $html = "<p>Nombre: " . $emp->getNombreCompleto() . "</p>";
        $html .= "<p>Sueldo: " . $emp->getSueldo() . "</p>";
        $html .= "<p>Teléfonos:</p>";
        $html .= "<ol>";
        foreach ($emp->getTelefonos() as $telefono) {
            $html .= "<li>" . $telefono . "</li>";
        }
        $html .= "</ol>";
        return $html;
    }
}

// Ejemplo de uso
$empleado1 = new Empleado("David", "López", 7000);
$empleado2 = new Empleado("Ana", "Martínez");

echo "Empleado 1: " . $empleado1->getNombreCompleto() . ", sueldo: " . $empleado1->getSueldo() . "<br>";
echo "Empleado 2: " . $empleado2->getNombreCompleto() . ", sueldo: " . $empleado2->getSueldo();