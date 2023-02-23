<?php
require_once '../src/model/functions.php';
require_once '../src/model/order.php';
require_once '../src/model/address.php';
require_once '../src/model/shipping-address.php';

function orderDetails(int $id)
{
	// Requête pour récupérer toutes les infos de la commande
	$currentOrder = (new OrderQuery())->queryConnection()->orderDetails($id);

	// Si la commande est trouvée, conversion de la date en français
	if ($currentOrder) {
		$localDate = dateToFrench($currentOrder[0]->date, 'j F Y');
	}
	// Si une adresse de livraison a été renseignée 
	if ($currentOrder[0]->alt == 1) {
		// Réquête pour obtenir l'adresse de livraison 
		$shippingAddress = (new ShippingAddressQuery())->queryConnection()->getShippingAddress($_SESSION['id']);

		// Tooltip de l'adresse de livraison 
		$address = $shippingAddress->firstname . ' ' . strtoupper($shippingAddress->lastname) . ', ' . $shippingAddress->street . ' ' . $shippingAddress->zipcode . ' ' . strtoupper($shippingAddress->city);
		// Sinon requête pour obtenir l'adresse de facturation 
	} else {
		$shippingAddress = (new AddressQuery())->queryConnection()->getAddress($_SESSION['id']);

		// Tooltip de l'adresse de facturation 
		$address = $shippingAddress->firstname . ' ' . strtoupper($shippingAddress->lastname) . ', ' . $shippingAddress->street . ' ' . $shippingAddress->zipcode . ' ' . strtoupper($shippingAddress->city);
	}
	require '../templates/account.last-order.php';
}
