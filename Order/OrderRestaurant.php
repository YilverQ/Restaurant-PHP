<?php 
	//Archivos requeridos.
	require_once("OrderAbstract.php");
	require_once("Employee/Cook.php");
	require_once("Employee/Waiter.php");
	require_once("Saucer/ChickenRice.php");
	require_once("Saucer/Sandwich.php");
	require_once("Saucer/Soup.php");

	/**
	 * Clase: Pedido para un Restaurante.
	 * Hereda de la clase OrderAbstract.
	 */
	class OrderRestaurant extends OrderAbstract
	{
		//Definimos una lista de empleados
		//Para atender un pedido.
		/**
		* @return {array}
		*/
		public function createEmployees() : array
		{
			return [new Cook(), new Waiter()];
		}

		//Definimos una lista de Platillos
		/**
		* @return {array}
		*/
		public function createSaucers() : array
		{
			return [new ChickenRice(), new Sandwich(), new Soup()];
		}
	}