<?php 
	/**
	 * Interface: Empleado.
	 * La interface cuenta con 4 contractos que deben cumplir 
	 * las clases que la implementen. 
	 */
	interface Employee
	{
		//Función que hace un empleado cuendo abre un establecimiento.
		public function openWork();
		//Función que hace un empleado cuando está trabajando.
		public function work();
		//Función que hace un empleado cuando cierra un establecimiento.
		public function closeWork();
		//Función que hace un empleado cuando prepara un platillo.
		public function preparateSaucer(SaucerAbstract $saucer);
	}