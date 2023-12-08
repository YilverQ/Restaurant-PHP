<?php 
	//Importamos los establecimientos.
	require_once("Establishment/CoffeeShop.php");
	require_once("Establishment/Restaurant.php");
	require_once("Establishment/Tavern.php");

	//Importamos los platillos.
	require_once("Order/OrderCoffeeShop.php");
	require_once("Order/OrderRestaurant.php");
	require_once("Order/OrderTavern.php");

	//Importamos los empleados.
	require_once("Employee/Barista.php");
	require_once("Employee/Bartender.php");
	require_once("Employee/Cook.php");
	require_once("Employee/Waiter.php");

	//Importamos el cliente.
	require_once("Client.php");

	//Importamos la clase de Propina.
	require_once("Tip.php");

	//Instanciamos de la Clase Abstracta EstablishmentAbstract
	$coffeeShop = new CoffeeShop("Cafetería el Rincón", "Gran Avenida Francisco");
	$restaurant = new Restaurant("Restaurante Sabroso", "Esq. Páez");
	$tavern 	= new Tavern("Tasca y Taberna", "Av. Sur, Esq. 4");

	//Instanciamos de la clase abstracta Orden.
	$orderCoffee 	 = new OrderCoffeeShop();
	$orderRestaurant = new OrderRestaurant();
	$orderTavern 	 = new OrderTavern();

	//Instanciamos de la interface EmployeeInterface.
	$barista 	= new Barista();
	$bartender 	= new Bartender();
	$cook 		= new Cook();
	$waiter 	= new Waiter();

	//Instanciamos al cliente.
	$client = new Client("Yilver Quevedo", "28.333.459", 200);

	//Instanciamos de la clase Propina.
	$tip = new Tip();
 ?>

<!DOCTYPE html>
<html>
<head>
	<!--Metas-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--Titulo-->
	<title>Restaurante</title>

	<!--Estilos-->
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<!--Cafetería-->
	<section class="section section--coffee">
		<!--Título de la sección-->
		<h2 class="section__title"><?php echo $coffeeShop->getName() ?></h2>

		<!--Primer artículo de la sección-->
		<article class="article">
			<div class="card">
				<h3>Lista de empleados:</h3>
				<ul>
					<!--Nos traemos una lista de empleados-->
					<?php foreach ($coffeeShop->getEmployees() as $key => $value): ?>
						<li><?php echo $value->getName() ?></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="card">
				<h3>Lista de tareas para empezar el día: </h3>
				<ul>
					<!--Nos traemos una lista de tareas cuando el establecimiento abre-->
					<?php foreach ($coffeeShop->openEstablishment() as $key => $value): ?>
						<?php foreach ($value as $subKey => $subValue): ?>
							<li><?php echo $subValue ?></li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="card">
				<h3>Lista de tareas durante el día: </h3>
				<ul>
					<!--Nos traemos una lista de tareas cuando el establecimiento está abierto-->
					<?php foreach ($coffeeShop->doWork() as $key => $value): ?>
						<?php foreach ($value as $subKey => $subValue): ?>
							<li><?php echo $subValue ?></li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="card">
				<h3>Lista de tareas para cerrar: </h3>
				<ul>
					<!--Nos traemos una lista de tareas cuando el establecimiento está apunto de cerrar-->
					<?php foreach ($coffeeShop->closeEstablishment() as $key => $value): ?>
						<?php foreach ($value as $subKey => $subValue): ?>
							<li><?php echo $subValue ?></li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>
		</article>

		<!--Segunda artículo de la sección-->
		<article class="article article--end">
			<div class="card">
				<h3>Lista de Platillos:</h3>
				<ul>
					<?php foreach ($orderCoffee->createSaucers() as $key => $value): ?>
						<li><?php echo $value->getName() ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="card card--big">
				<h3>Opiniones sobre los platillos:</h3>
				<ul>
					<?php foreach ($orderCoffee->createEmployees() as $key => $value): ?>
						<?php foreach ($orderCoffee->createSaucers() as $subKey => $subValue): ?>
							<li>
								<span><?php echo $value->getName(); ?>:</span>
								<?php echo $value->preparateSaucer($subValue) ?>
							</li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>
		</article>
	</section>
	
	<!--Restaurante-->
	<section class="section section--restaurant">
		<!--Título de la sección-->
		<h2 class="section__title"><?php echo $restaurant->getName() ?></h2>

		<!--Primer artículo de la sección-->
		<article class="article">
			<div class="card">
				<h3>Lista de empleados:</h3>
				<ul>
					<!--Nos traemos una lista de empleados-->
					<?php foreach ($restaurant->getEmployees() as $key => $value): ?>
						<li><?php echo $value->getName() ?></li>
					<?php endforeach; ?>
				</ul>
				
			</div>

			<div class="card">
				<h3>Lista de tareas para empezar el día: </h3>
				<ul>
					<!--Nos traemos una lista de tareas cuando el establecimiento abre-->
					<?php foreach ($restaurant->openEstablishment() as $key => $value): ?>
						<?php foreach ($value as $subKey => $subValue): ?>
							<li><?php echo $subValue ?></li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="card">
				<h3>Lista de tareas durante el día: </h3>
				<ul>
					<!--Nos traemos una lista de tareas cuando el establecimiento está abierto-->
					<?php foreach ($restaurant->doWork() as $key => $value): ?>
						<?php foreach ($value as $subKey => $subValue): ?>
							<li><?php echo $subValue ?></li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="card">
				<h3>Lista de tareas para cerrar: </h3>
				<ul>
					<!--Nos traemos una lista de tareas cuando el establecimiento está apunto de cerrar-->
					<?php foreach ($restaurant->closeEstablishment() as $key => $value): ?>
						<?php foreach ($value as $subKey => $subValue): ?>
							<li><?php echo $subValue ?></li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>
		</article>

		<article class="article article--end">
			<div class="card">
				<h3>Lista de Platillos:</h3>
				<ul>
					<?php foreach ($orderRestaurant->createSaucers() as $key => $value): ?>
						<li><?php echo $value->getName() ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="card card--big">
				<h3>Opiniones sobre los platillos:</h3>
				<ul>
					<?php foreach ($orderRestaurant->createEmployees() as $key => $value): ?>
						<?php foreach ($orderRestaurant->createSaucers() as $subKey => $subValue): ?>
							<li>
								<span><?php echo $value->getName(); ?>:</span>
								<?php echo $value->preparateSaucer($subValue) ?>
							</li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>
		</article>
	</section>

	<!--Taberna-->
	<section class="section section--tavern">
		<h2 class="section__title"><?php echo $tavern->getName() ?></h2>
		<article class="article">
			<div class="card">
				<h3>Lista de empleados:</h3>
				<ul>
					<?php foreach ($tavern->getEmployees() as $key => $value): ?>
						<li><?php echo $value->getName() ?></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="card">
				<h3>Lista de tareas para empezar el día: </h3>
				<ul>
					<?php foreach ($tavern->openEstablishment() as $key => $value): ?>
						<?php foreach ($value as $subKey => $subValue): ?>
							<li><?php echo $subValue ?></li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="card">
				<h3>Lista de tareas durante el día: </h3>
				<ul>
					<?php foreach ($tavern->doWork() as $key => $value): ?>
						<?php foreach ($value as $subKey => $subValue): ?>
							<li><?php echo $subValue ?></li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="card">
				<h3>Lista de tareas para cerrar: </h3>
				<ul>
					<?php foreach ($tavern->closeEstablishment() as $key => $value): ?>
						<?php foreach ($value as $subKey => $subValue): ?>
							<li><?php echo $subValue ?></li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>
		</article>

		<article class="article article--end">
			<div class="card">
				<h3>Lista de Platillos:</h3>
				<ul>
					<?php foreach ($orderTavern->createSaucers() as $key => $value): ?>
						<li><?php echo $value->getName() ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="card card--big">
				<h3>Opiniones sobre los platillos:</h3>
				<ul>
					<?php foreach ($orderTavern->createEmployees() as $key => $value): ?>
						<?php foreach ($orderTavern->createSaucers() as $subKey => $subValue): ?>
							<li>
								<span><?php echo $value->getName(); ?>:</span>
								<?php echo $value->preparateSaucer($subValue) ?>
							</li>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</ul>
			</div>
		</article>
	</section>
	

	<!--Cliente-->
	<section class="section section--restaurant">
		<!--Título de la sección-->
		<h2 class="section__title">Cliente: <?php echo $client->getfullname() ?></h2>

		<!--Primer artículo de la sección-->
		<article class="article">
			<div class="card card--big">
				<h3>Datos del cliente:</h3>
				<ul>
					<li><span>Nombre: </span><?php echo $client->getfullname(); ?></li>
					<li><span>Número de cédula: </span><?php echo $client->getIdentificationCard(); ?></li>
					<li><span>Dinero: </span><?php echo $client->getCash(); ?>$</li>
					<li><span>Valor nutricional: </span><?php echo $client->getNutrition(); ?></li>
					<li><span>Propina: </span>0</li>
				</ul>
				
			</div>
		</article>

		<article class="article article--end">
			<div class="card card--big">
				<h3>Opiniones sobre los platillos de la Cafetería:</h3>
				<ul>
					<?php foreach ($orderCoffee->createSaucers() as $key => $value): ?>
						<li>
							<?php echo $client->eat($value); ?>
							<?php $tip->getTip($value); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="card card--big">
				<h3>Opiniones sobre los platillos del Restaurante:</h3>
				<ul>
					<?php foreach ($orderRestaurant->createSaucers() as $key => $value): ?>
						<li>
							<?php echo $client->eat($value); ?>
							<?php $tip->getTip($value); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="card card--big">
				<h3>Opiniones sobre los platillos de la Taberna:</h3>
				<ul>
					<?php foreach ($orderTavern->createSaucers() as $key => $value): ?>
						<li>
							<?php echo $client->eat($value); ?>
							<?php $tip->getTip($value); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</article>

		<article class="article">
			<div class="card card--big">
				<h3>Datos nuevos del cliente:</h3>
				<ul>
					<li><span>Nombre: </span><?php echo $client->getfullname(); ?></li>
					<li><span>Número de cédula: </span><?php echo $client->getIdentificationCard(); ?></li>
					<li><span>Dinero: </span><?php echo $client->getCash(); ?>$</li>
					<li><span>Valor nutricional: </span><?php echo $client->getNutrition(); ?></li>
					<li><span>Propina: </span><?php echo $tip->getCash(); ?></li>
				</ul>
				
			</div>
		</article>

	</section>
</body>
</html>