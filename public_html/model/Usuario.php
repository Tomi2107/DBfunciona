<?php 

class Usuario {

    private $idUsuario;

    private $mail;

    private $clave;

    private $nombreYApellido;

    

    function __construct($mail, $clave, $nombreYApellido) {

        $this->mail=$mail;    

        $this->clave=$clave;    

        $this->nombreYApellido=$nombreYApellido;    

    }



    /**

     * Get the value of idUsuario

     */ 

    public function getIdUsuario()

    {

        return $this->idUsuario;

    }



    /**

     * Set the value of idUsuario

     *

     * @return  self

     */ 

    public function setIdUsuario($idUsuario)

    {

        $this->idUsuario = $idUsuario;



        return $this;

    }



    /**

     * Get the value of usuario

     */ 

    public function getMail()

    {

        return $this->mail;

    }



    /**

     * Set the value of usuario

     *

     * @return  self

     */ 

    public function setMail($mail)

    {

        $this->mail = $mail;



        return $this;

    }



    /**

     * Get the value of clave

     */ 

    public function getClave()

    {

        return $this->clave;

    }



    /**

     * Set the value of clave

     *

     * @return  self

     */ 

    public function setClave($clave)

    {

        $this->clave = $clave;



        return $this;

    }



    /**

     * Get the value of nombreYApellido

     */ 

    public function getNombreYApellido()

    {

        return $this->nombreYApellido;

    }



    /**

     * Set the value of nombreYApellido

     *

     * @return  self

     */ 

    public function setNombreYApellido($nombreYApellido)

    {

        $this->nombreYApellido = $nombreYApellido;



        return $this;

    }

}

?>