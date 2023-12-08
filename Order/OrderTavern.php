<?php 
	//Archivos requeridos.
	require_once("OrderAbstract.php");
	require_once("Employee/Bartender.php");
	require_once("Employee/Waiter.php");
	require_once("Saucer/Bleeding.php");
	require_once("Saucer/Cocktail.php");

	/**
	 * Clase: Pedido para una Taberna.
	 * Hereda de la clase OrderAbstract.
	 */
	class OrderTavern extends OrderAbstract
	{
		//Definimos una lista de empleados
		//Para atender un pedido.
		/**
		* @return {array}
		*/
		public function createEmployees() : array
		{
			return [new Bartender(), new Waiter()];
		}

		//Definimos una lista de Platillos
		/**
		* @return {array}
		*/
		public function createSaucers() : array
		{
			return [new Bleeding(), new Cocktail()];
		}
	}