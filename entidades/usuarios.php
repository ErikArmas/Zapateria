<?php
class usuario
{
	private $idUsuario;
	private $usuario;
	private $password;
	private $nombre;
	private $tipo;
	
	public function getIdUsuario()
	{
		return $this->idUsuario;
	}
	
	public function setIdUsuario($idUsuario)
	{
		$this->idUsuario = $idUsuario;
	}

	public function getUsuario()
	{
		return $this->usuario;
	}
	
	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;
	}

	public function getPassword()
	{
		return $this->password;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	
	public function getTipo()
	{
		return $this->tipo;
	}
	
	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}
}