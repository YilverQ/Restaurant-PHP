<?php 
	//Archivos requeridos.
	require_once("SaucerAbstract.php");
	
	/**
	 * Clase: Arroz con Pollo.
	 * Hereda de la clase abstracta "Platillo".
	 * Definimos el método "getEmotion".
	 */
	class ChickenRice extends SaucerAbstract
	{
		//Asignamos valores a los atributos heredados.
		public function __construct()
		{
			$this->name = "Arroz con Pollo";
			$this->nutrition = 60;
			$this->ingredients = ["Arroz", "Pollo", "Salsa", "Jugo de Náranja"];
			$this->price = 10;
		}

		//Retorna una emoción cuando el usuario coma este platillo.
		/**
		* @return {string}
		*/
		public function getEmotion() : string
		{
			return "¡Este " . $this->name . " es el mejor plato que he probado!";
		}
	}