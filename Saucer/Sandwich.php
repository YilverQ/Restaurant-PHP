<?php 
	//Archivos requeridos.
	require_once("SaucerAbstract.php");

	/**
	 * Clase: Sandwich.
	 * Hereda de la clase abstracta "Platillo".
	 * Definimos el método "getEmotion".
	 */
	class Sandwich extends SaucerAbstract
	{
		//Asignamos valores a los atributos heredados.
		public function __construct()
		{
			$this->name = "Sandwich";
			$this->nutrition = 20;
			$this->ingredients = ["Pan", "Tomate", "Lechuga", "Salsa", "Pollo", "Jugo de Fresa"];
			$this->price = 5;
		}

		//Retorna una emoción cuando el usuario coma este platillo.
		/**
		* @return {string}
		*/
		public function getEmotion() : string
		{
			return "¡Esta " . $this->name . " está sabrosa y la salsa que usa es la mejor!";
		}
	}