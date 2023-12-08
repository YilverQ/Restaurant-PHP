<?php 
	//Archivos requeridos.
	require_once("SaucerAbstract.php");

	/**
	 * Clase: Espresso.
	 * Hereda de la clase abstracta "Platillo".
	 * Definimos el método "getEmotion".
	 */
	class Espresso extends SaucerAbstract
	{
		//Asignamos valores a los atributos heredados.
		public function __construct()
		{
			$this->name = "Espresso";
			$this->nutrition = 10;
			$this->ingredients = ["Café"];
			$this->price = 2;
		}

		//Retorna una emoción cuando el usuario coma este platillo.
		/**
		* @return {string}
		*/
		public function getEmotion() : string
		{
			return "¡Este " . $this->name . " está caliente y sabroso!";
		}
	}