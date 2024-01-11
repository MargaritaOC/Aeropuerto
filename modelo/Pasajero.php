<?php

class Pasajero{
    private int $idPasajero;
    private string $nombre;
    private string $apellidos;
    private int $edad;
    private int $idVuelo;

    


    /**
     * Get the value of idPasajero
     */
    public function getIdPasajero(): int
    {
        return $this->idPasajero;
    }

    /**
     * Set the value of idPasajero
     */
    public function setIdPasajero(int $idPasajero)
    {
        $this->idPasajero = $idPasajero;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos(string $apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * Get the value of edad
     */
    public function getEdad(): int
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     */
    public function setEdad(int $edad)
    {
        $this->edad = $edad;
    }

    /**
     * Get the value of idVuelo
     */
    public function getIdVuelo(): int
    {
        return $this->idVuelo;
    }

    /**
     * Set the value of idVuelo
     */
    public function setIdVuelo(int $idVuelo)
    {
        $this->idVuelo = $idVuelo;
    }
}

?>