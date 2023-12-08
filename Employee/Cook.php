<?php 
	//Archivos requeridos.
	require_once("EmployeeInterface.php");
	
	/**
	 * Clase: Cocinero.
	 * Esta clase implementa la interface de "Employee"
	 * Por ende, debe cumplir con los contractos (métodos). 
	 */
	class Cook implements Employee
	{
		private string $name = "Cocinero";

		//Métodos obligatorios de la interface.
		/**
		* @return {array}
		*/
		public function openWork() : array
		{
			return ["Limpiar la cocina", "Preparar los ingredientes", 
						"Encender la cocina y el horno"];
		}

		/**
		* @return {array}
		*/
		public function work() : array
		{
			return ["Cocinar"];
		}

		/**
		* @return {array}
		*/
		public function closeWork() : array
		{
			return ["Limpiar la cocina", "Guardar los ingredientes", 
						"Apagar la cocina y el horno"]; 
		}


		//Métodos únicos de la clase.
		//Recibimos un dato de tipo SaucerAbstract (Platillo). 
		/**
		* @param {SaucerAbstract} $saucer
		* @return {string}
		*/ 
		public function preparateSaucer(SaucerAbstract $saucer) : string
		{
			return $saucer->getName() . ", un platillo muy delicioso";
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