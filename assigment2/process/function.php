<?php

$pizza = $_POST['pizza'];
$sauce = $_POST['sauces'];
$topping = $_POST['topping'];
$total = 0;
$pizzasize = '';
$csauces = '';


//pizza
switch ($pizza) 
{
	case 'small':
	$pizzasize = 'Small 6 inch';
	$total = $total + 10;
	break;
	
	case 'medium':
		$pizzasize = 'Small 9 inch';
		$total = $total + 20.50;
		break;	

	case 'large':
		$pizzasize = 'Large 12 inch';
		$total = $total + 30.00;
		break;
		
}

//topping more than  1
for($i = 0; $i < count ($topping); $i++)
{
	switch ($topping[$i]) 
	{
		case 'prawn':
			$total = $total + 5.00;
			break;

		case 'chicken':
			$total = $total + 5.00;
			break;

		case 'beef':
			$total = $total + 8.00;
			break;
	}
}

// sauces
switch ($sauce) 
{
	case 'royalcheese':
	$csauces = 'Royal Cheese';
	break;
	
	case 'spicyasian':
	$csauces = 'Spicy Asian';
	break;

	case 'bbq':
	$csauces = 'BBQ';
	break;
}

//print all
echo 'Pizza Size = '.$pizzasize;
echo '<br>';
echo 'Sauces = '.$csauces;
echo '<br>';
echo 'Topping = '.implode(" + ",$topping);
echo '<br>';
echo 'Total = '.  $total;

?>