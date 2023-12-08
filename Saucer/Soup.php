<?php 
	//Archivos requeridos.
	require_once("SaucerAbstract.php");

	/**
	 * Clase: Sopa.
	 * Hereda de la clase abstracta "Platillo".
	 * Definimos el método "getEmotion".
	 */
	class Soup extends SaucerAbstract
	{		
		//Asignamos valores a los atributos heredados.
		public function __construct()
		{
			$this->name = "Sopa";
			$this->nutrition = 50;
			$this->ingredients = ["Agua", "Verduras", "Carne", "Sal", "Arroz Blanco"];
			$this->price = 8;
		}

		//Retorna una emoción cuando el usuario coma este platillo.
		/**
		* @return {string}
		*/
		public function getEmotion() : string
		{
			return "¡Esta " . $this->name . " está sabrosa y caliente!";
		}
	}