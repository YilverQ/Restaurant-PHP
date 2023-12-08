<?php 
	//Archivos requeridos.
	require_once("EstablishmentAbstract.php");
	require_once("Employee/Waiter.php");
	require_once("Employee/Barista.php");
	
	/**
	 * Clase: Cafetería.
	 * Hereda de la clase abstracta: Establecimiento.
	 * Debe asignar los valores heredados. 
	 * Define una lista de empleados que están dentro de este establecimiento.
	 */
	class CoffeeShop extends EstablishmentAbstract
	{
		//Asignamos valores a los atributos heredados.
		public function __construct(string $name, string $ubication)
		{
			//SUPER CONSTRUCTOR.
			//parent::___construct sirve para asignar los valores heredados. 
			parent::__construct($name, $ubication);
		}

		//Definimos una lista de empleados.
		/**
		* @return {array}
		*/
		public function getEmployees() : array
		{
			return [new Barista(), new Waiter()];
		}
	}