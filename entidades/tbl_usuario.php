<?php
class tbl_usuario
{
    private $id_usuario;
    private $nombres;
    private $apellidos;
    private $email;
    private $estado;

    public function __GET($k) {return $this->$k;}
    public function __SET($k, $v) {return $this->$k = $v;}
}