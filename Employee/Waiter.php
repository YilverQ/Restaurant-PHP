<?php 
	//Archivos requeridos.
	require_once("EmployeeInterface.php");

	/**
	 * Clase: Mesero.
	 * Esta clase implementa la interface de "Employee"
	 * Por ende, debe cumplir con los contractos (métodos). 
	 */
	class Waiter implements Employee
	{
		private string $name = "Mesero";

		//Métodos obligatorios de la interface.
		/**
		* @return {array}
		*/
		public function openWork() : array
		{
			return ["Limpiar las mesas", "Limpiar los platos y vasos", 
						"Ordenar las mesas"];
		}

		/**
		* @return {array}
		*/
		public function work() : array
		{
			return ["Tomar pedidos", "Servir las mesas", 
					"Limpiar los platos y vasos"];
		}

		/**
		* @return {array}
		*/
		public function closeWork() : array
		{
			return ["Limpiar los platos y vasos", "Limpiar las mesas",  
					"Recoger las mesas"]; 
		}


		//Métodos únicos de la clase.
		//Recibimos un dato de tipo SaucerAbstract (Platillo). 
		/**
		* @param {SaucerAbstract} $saucer
		* @return {string}
		*/ 
		public function preparateSaucer(SaucerAbstract $saucer) : string
		{
			return $saucer->getName() . ", un platillo sabroso";
		}

		//Métodos Getters y Setters para los atributos de la clase.
		//Estos atributos sirven para obtener y actualizar los atributos
		
		/**
		* Método getter
		* @return {string}
		*/
		public function getName() : string
		{
			return $this->name;
		}

		/**
		* Método setter
		* @param {string} $name
		* @return {null}
		*/
		public function setName(string $name)
		{
			$this->name = $setName;
		}
	}