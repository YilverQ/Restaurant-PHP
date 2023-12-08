<?php 
	//Archivos requeridos.
	require_once("EmployeeInterface.php");

	/**
	 * Clase: Bartender.
	 * Esta clase implementa la interface de "Employee"
	 * Por ende, debe cumplir con los contractos (métodos). 
	 */
	class Bartender implements Employee
	{
		private string $name = "Bartender";

		//Métodos obligatorios de la interface.
		/**
		* @return {array}
		*/
		public function openWork() : array
		{
			return ["Limpiar los vasos", "Ordernar los ingredientes"];
		}

		/**
		* @return {array}
		*/
		public function work() : array
		{
			return ["Sevir las bebidas", "Limpiar los vasos"];
		}

		/**
		* @return {array}
		*/
		public function closeWork() : array
		{
			return ["Limpiar los vasos", "Guardar los ingredientes", 
						"Limpiar el lugar de trabajo"]; 
		}


		//Métodos únicos de la clase.
		//Recibimos un dato de tipo SaucerAbstract (Platillo).
		/**
		* @param {SaucerAbstract} $saucer
		* @return {string}
		*/  
		public function preparateSaucer(SaucerAbstract $saucer) : string
		{
			return $saucer->getName() . ", es una bebida alcoholica";
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