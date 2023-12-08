<?php 
	/**
	 * Clase abstracta: Pedido. 
	 * Tiene un método abstracto "createEmployees". Tiene sentido en la herencia.
	 * También cuenta con un método definido "deliveryPlan" y recibe
	 * como párametro un dato de tipo 'SaucerAbstract'.
	 */
	abstract class OrderAbstract
	{
		//Métodos.
		//Crea los empleados necesarios para atender a la Pedido.
		abstract public function createEmployees();
		
		//Crea los platillos necesarios para atender mostrarlo a la vista.
		abstract public function createSaucers();

		//Retorna una lista de acciones para completar el Pedido.
		/**
		* @param {SaucerAbstract} $saucer
		* @return {array}
		*/
		public function deliveryPlan(SaucerAbstract $saucer) : array
		{
			$employees = $this->createEmployees();
			$actions = [];
			foreach ($employees as $key => $employee) {
				$actions[] = $employee->preparateSaucer($saucer);
			}
			return $actions;
		}
	}