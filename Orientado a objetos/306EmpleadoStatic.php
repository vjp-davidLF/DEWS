<?php
class Empleado
{
    public string $nombre;
    public string $apellido;
    public float $sueldo;
    public array $telefonos;
    public static $sueldoTope = 3333;

    // Constructor con nombre, apellido y sueldo opcional (por defecto 1000)
    public function __construct(string $nombre, string $apellido, float $sueldo = 1000)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
        $this->telefonos = [];
    }

    // Eliminados los setters de nombre y apellido

    public function setSueldo(float $suel)
    {
        $this->sueldo = $suel;
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
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
        return $this->sueldo > self::$sueldoTope;
    }

    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string
    {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }

    public static function toHtml(Empleado $emp): string
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