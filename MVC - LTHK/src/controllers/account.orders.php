<?php
require_once '../src/model/functions.php';
require_once '../src/model/order.php';

function userOrders(int $id)
{
	// Requête pour trouver les commandes du user 
	$userOrders =	(new OrderQuery())->queryConnection()->getUserOrders($id);

	require '../templates/account.orders.php';
}
