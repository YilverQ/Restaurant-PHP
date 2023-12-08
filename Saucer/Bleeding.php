<?php 
	//Archivos requeridos.
	require_once("SaucerAbstract.php");
	
	/**
	 * Clase: Sangría.
	 * Hereda de la clase abstracta "Platillo".
	 * Definimos el método "getEmotion".
	 */
	class Bleeding extends SaucerAbstract
	{
		//Asignamos valores a los atributos heredados.
		public function __construct()
		{
			$this->name = "Sangría";
			$this->nutrition = 10;
			$this->ingredients = ["Vino tino", "Brandy", "Naranja"];
			$this->price = 2;
		}

		//Retorna una emoción cuando el usuario coma este platillo.
		/**
		* @return {string}
		*/
		public function getEmotion() : string
		{
			return "¡Esta " . $this->name . " está sabrosa, quiero otra!";
		}
	}