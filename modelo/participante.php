<?php
class Participante
{
	private $pdo;
    
    public $id;
    public $Cedula;
    public $Nombre;
    public $Apellido;
    public $Sexo;
    public $Direccion;
    public $FechaRegistro;
    public $FechaNacimiento;
    public $Correo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$sentencia = $this->pdo->prepare("SELECT * FROM participantes");
			$sentencia->execute();

			return $sentencia->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$sentencia = $this->pdo
			          ->prepare("SELECT * FROM participantes WHERE id = ?");
			          

			$sentencia->execute(array($id));
			return $sentencia->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Buscar($cedula)
	{
		try 
		{
			$sentencia = $this->pdo
			          ->prepare("SELECT * FROM participantes WHERE Cedula = ?");
			
			$sentencia->execute(array($cedula));			
			return $sentencia->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e){

			// $sentencia = 0;
			// return $sentencia;
			
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$sentencia = $this->pdo
			            ->prepare("DELETE FROM participantes WHERE id = ?");			          

			$sentencia->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($datos)
	{
		try 
		{
			$consulta = "UPDATE participantes SET 
						Nombre          = ?, 
						Apellido        = ?,
                        Correo          = ?,
						Sexo            = ?,
						Direccion		= ?, 
						Cedula			= ?, 
						FechaNacimiento = ?
				    WHERE id = ?";

			$this->pdo->prepare($consulta)
			     ->execute(
				    array(
                        $datos->Nombre,                        
                        $datos->Apellido,
                        $datos->Correo,
                        $datos->Sexo,
                        $datos->Direccion,
                        $datos->Cedula,
                        $datos->FechaNacimiento,
                        $datos->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Participante $datos)
	{
		try 
		{
		$consulta = "INSERT INTO participantes (Nombre,Correo,Apellido,Sexo,Cedula,Direccion,FechaNacimiento,FechaRegistro) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($consulta)
		     ->execute(
				array(
                    $datos->Nombre,
                    $datos->Correo, 
                    $datos->Apellido, 
                    $datos->Sexo,
                    $datos->Cedula,
                    $datos->Direccion,
                    $datos->FechaNacimiento,
                    date('Y-m-d')
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}