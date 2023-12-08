<?php 
	/**
	 * Clase Abstracta: Establecimiento. 
	 * La clase cuenta con dos atributos: nombre y ubicación.
	 * También cuenta con un método abstracto. 
	 * Y con los métodos definidos: openEstablishment, doWork y closeEstablishment
	 */
	abstract class EstablishmentAbstract
	{
		//Atributos de la clase.
		protected string $name;
		protected string $ubication;

		//Al momento de instanciar un objeto asignamos varios valores por defecto.
		function __construct(string $name, string $ubication)
		{
			$this->name = $name;
			$this->ubication = $ubication;
		}

		//Métodos.
		//getEmployees cobra sentido en la herencia.
		abstract public function getEmployees();

		//Retorna una lista de empleados con una lista de tareas. 
		/**
		* @return {array}
		*/
		public function openEstablishment() : array
		{
			$messages = [];
			$employees = $this->getEmployees();
			foreach ($employees as $key => $employee) {
				$messages[] = $employee->openWork();
			}
			return $messages;
		}

		//Retorna una lista de empleados con una lista de tareas. 
		/**
		* @return {array}
		*/
		public function doWork() : array
		{
			$messages = [];
			$employees = $this->getEmployees();
			foreach ($employees as $key => $employee) {
				$messages[] = $employee->work();
			}
			return $messages;
		}

		//Retorna una lista de empleados con una lista de tareas. 
		/**
		* @return {array}
		*/
		public function closeEstablishment() : array
		{
			$messages = [];
			$employees = $this->getEmployees();
			foreach ($employees as $key => $employee) {
				$messages[] = $employee->closeWork();
			}
			return $messages;
		}


		//Métodos Getters y Setters para los atributos de la clase.
		//Estos atributos sirven para obtener y actualizar los atributos
		
		/**
		* Método getter
		* @return {string}
		*/
		public function getName() : string
		{
			return $this->name;
		}

		/**
		* Método setter
		* @param {string} $name
		* @return {null}
		*/
		public function setName(string $name)
		{
			$this->name = $name;
		}

		/**
		* Método getter
		* @return {string}
		*/
		public function getUbication() : string
		{
			return $this->ubication;
		}

		/**
		* Método setter
		* @param {string} $ubication
		* @return {null}
		*/
		public function setUbication(string $ubication)
		{
			$this->ubication = $ubication;
		}

	}