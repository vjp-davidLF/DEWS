<?php
class Empleado
{
    public string $nombre;
    public string $apellido;
    public float $sueldo;
    public array $telefonos;

    public function __construct(string $nombre, string $apellido, float $sueldo, array $telefonos)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
         $this->telefonos = $telefonos;
    }

      public function setTelefono(string $tel)
    {
        $this->telefonos[] = $tel;
    }

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

     public function getTelefonos(): string
    {
        return implode(', ', $this->telefonos);
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
        return $this->sueldo > 3333;
    }

    public function anyadirTelefono(int $telefono) : void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', '. $this->telefonos);

    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }
}

// Ejemplo de uso
$empleado = new Empleado("David", "López", 7000);
echo "Mi nombre completo es: " . $empleado->getNombreCompleto() . "<br>";
echo "Mi sueldo es: " . $empleado->getSueldo() . "<br>";
echo "¿Debo pagar impuestos? " . ($empleado->debePagarImpuestos() ? "Si" : "No");