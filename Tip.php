<?php 
	/**
	 * Clase: Propina.
	 * Tiene dos atributos: dinero y porcentaje.
	 * Además tiene un atributo que nos retorna una propina
	 */
	class Tip
	{
		//Atributos de la clase.
		private float $cash;
		private float $percentage;

		//Asignamos los valores por defecto.
		public function __construct()
		{
			$this->cash = 0;
			$this->percentage = 20;
		}

		//Obtenemos un porcentaje del precio del Platillo como propina.
		/**
		* @param {SaucerAbstract} $saucer
		* @return {float}
		*/
		public function getTip(SaucerAbstract $saucer) : float
		{
			$price = $saucer->getPrice();
			$percentage = ($price * $this->percentage) / 100;
			$this->cash += $percentage;
			return $percentage;
		}


		//Métodos Getters y Setters para los atributos de la clase.
		//Estos atributos sirven para obtener y actualizar los atributos
		//de la clase. 

		/**
		* Método getter
		* @return {float}
		*/
		public function getCash() : float
		{
			return $this->cash;
		}

		/**
		* Método setter
		* @param {float} $cash
		* @return {null}
		*/
		public function setCash(float $cash)
		{
			$this->cash = $cash;
		}

		/**
		* Método getter
		* @return {float}
		*/
		public function getPercentage() : float
		{
			return $this->percentage;
		}

		/**
		* Método setter
		* @param {float} $percentage
		* @return {null}
		*/
		public function setPercentage(float $percentage)
		{
			$this->percentage = $percentage;
		}
	}