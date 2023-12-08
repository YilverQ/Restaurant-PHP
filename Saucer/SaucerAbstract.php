<?php 
	/**
	 * Clase abstracta: Platillo.
	 * Tiene 4 atributos: nombre, valor nutricional, ingredientes y precio. 
	 * Tiene los métodos getters y setter de cada atributo. 
	 * Tiene un método abstracto "getEmotion". Tiene sentido en la herencia.
	 */
	abstract class SaucerAbstract 
	{
		//Atributos de la clase abstracta "Platillos"
		protected string $name;
		protected int  	 $nutrition;
		protected array  $ingredients;
		protected float  $price;

		//Retorna una emoción cuando el usuario coma este platillo.
		abstract public function getEmotion();


		//Métodos Getters y Setters para los atributos de la clase.
		//Estos atributos sirven para obtener y actualizar los atributos

		/**
		* @return {string}
		*/
		public function getName() : string
		{
			return $this->name;
		}
		/**
		* @param {string} $name
		* @return {null}
		*/
		public function setName(string $name)
		{
			$this->name = $name;
		}

		/**
		* @return {int}
		*/
		public function getNutrition() : int
		{
			return $this->nutrition;
		}
		/**
		* @param {int} $nutrition
		* @return {null}
		*/
		public function setNutrition(int $nutrition)
		{		
			$this->nutrition = $nutrition;
		}

		/**
		* @return {array}
		*/
		public function getIngredients() : array
		{
			return $this->ingredients;
		}
		/**
		* @param {array} $ingredients
		* @return {null}
		*/
		public function setIngredients(array $ingredients)
		{
			$this->ingredients = $ingredients;
		}

		/**
		* @return {array}
		*/
		public function getPrice() : float
		{
			return $this->price;
		}
		/**
		* @param {float} $nutrition
		* @return {null}
		*/
		public function setPrice(float $price)
		{
			$this->price = $price;
		}
	}