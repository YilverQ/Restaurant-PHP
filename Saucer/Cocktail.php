<?php 
	//Archivos requeridos.
	require_once("SaucerAbstract.php");
	
	/**
	 * Clase: Cóctel.
	 * Hereda de la clase abstracta "Platillo".
	 * Definimos el método "getEmotion".
	 */
	class Cocktail extends SaucerAbstract
	{
		//Asignamos valores a los atributos heredados.
		public function __construct()
		{
			$this->name = "Cóctel";
			$this->nutrition = 5;
			$this->ingredients = ["Jugo de fruta", "Aceituna", "Alcohol"];
			$this->price = 2;
		}

		//Retorna una emoción cuando el usuario coma este platillo.
		/**
		* @return {string}
		*/
		public function getEmotion() : string
		{
			return "¡Me gusta el " . $this->name . " quiero otro!";
		}
	}