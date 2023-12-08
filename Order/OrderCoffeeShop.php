<?php 
	//Archivos requeridos.
	require_once("OrderAbstract.php");
	require_once("Employee/Waiter.php");
	require_once("Employee/Barista.php");
	require_once("Saucer/Espresso.php");
	
	/**
	 * Clase: Pedido para una Cafetería.
	 * Hereda de la clase OrderAbstract.
	 */
	class OrderCoffeeShop extends OrderAbstract
	{
		//Definimos una lista de empleados
		//Para atender un pedido.
		/**
		* @return {array}
		*/
		public function createEmployees() : array
		{
			return [new Barista(), new Waiter()];
		}

		//Definimos una lista de Platillos
		/**
		* @return {array}
		*/
		public function createSaucers() : array
		{
			return [new Espresso()];
		}
	}