<?php 
	/**
	 * Clase: Cliente.
	 * Cuenta con los siguientes atributos: 
	 * nombre completo, número de cédula, dinero y nutrición.
	 */
	class Client
	{
		//Atributos de la clase.
		private string $fullname;
		private string $identificationCard;
		private float $cash;
		private int $nutrition;

		//Al momento de instanciar un objeto asignamos varios valores por defecto.
		function __construct(string $fullname, string $identificationCard, float $cash)
		{
			$this->fullname = $fullname;
			$this->identificationCard = $identificationCard;
			$this->cash = $cash;
			$this->nutrition = 0;
		}


		//Métodos Especiales.
		//Aumenta la nutrición del cliente.
		//Retorna una emoción cuando el usuario coma este platillo.
		/**
		* @return {string}
		*/
		public function eat(SaucerAbstract $saucer) : string
		{
			$this->nutrition += $saucer->getNutrition();
			$this->cash -= $saucer->getPrice();
			return $saucer->getEmotion();
		}


		//Métodos Getters y Setters para los atributos de la clase.
		//Estos atributos sirven para obtener y actualizar los atributos
		//de la clase. 

		/**
		* Método getter
		* @return {string}
		*/
		public function getFullname() : string
		{
			return $this->fullname;
		}

		/**
		* Método setter
		* @param {string} $fullname
		* @return {null}
		*/
		public function setFullname(string $fullname)
		{
			$this->fullname = $fullname;
		}

		/**
		* Método getter
		* @return {string}
		*/
		public function getIdentificationCard() : string
		{
			return $this->identificationCard;
		}

		/**
		* Método setter
		* @param {string} $identificationCard
		* @return {null}
		*/
		public function setIdentificationCard(string $identificationCard)
		{
			$this->identificationCard = $identificationCard;
		}

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
		* @return {int}
		*/
		public function getNutrition() : int
		{
			return $this->nutrition;
		}

		/**
		* Método setter
		* @param {int} $nutrition
		* @return {null}
		*/
		public function setNutrition(int $nutrition)
		{
			$this->nutrition = $nutrition;
		}
	}