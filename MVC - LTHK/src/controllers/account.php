<?php
require_once '../src/model/functions.php';
require_once '../src/model/order.php';

function account()
{
	$lastOrder = (new OrderQuery())->queryConnection()->lastOrder($_SESSION['id']);

	$_SESSION['last-order'] = '';
	if ($lastOrder != null) {
		$localDate = dateToFrench($lastOrder->date, 'j F Y');
		$_SESSION['last-order'] = $lastOrder;
	}

	require '../templates/account.php';
}
