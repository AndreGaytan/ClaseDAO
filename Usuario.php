<?php

class Usuario
{
    private $userID,
            $username,
            $pwd,
            $nombre,
            $apellido;

    public function __construct($userID, $username, $pwd, $nombre, $apellido)
    {
        $this->userID = $userID;
        $this->username = $username;
        $this->pwd = $pwd;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    // Setters
    public function setUsername($username) {$this->username = $username;}

    public function setPassword($pwd) {$this->pwd = $pwd;}

    public function setNombre($nombre) {$this->nombre = $nombre;}

    public function setApellildo($apellido) {$this->apellido = $apellido;}

    // Getters
    public function getUserID() {return $this->userID;}

    public function getUsername() {return $this->username;}

    public function getPwd(){return $this->pwd;}

    public function getNombre() {return $this->nombre;}

    public function getApellido() {return $this->apellido;}

}
