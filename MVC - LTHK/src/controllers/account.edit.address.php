<?php
require_once '../src/model/functions.php';
require_once '../src/model/address.php';
require_once '../src/model/shipping-address.php';

function editAddress()
{
	$addressQuery = new AddressQuery();
	$customer = $addressQuery->queryConnection()->getAddress($_SESSION['id']);

	// Si une adresse de facturation existe 
	if (isset($customer)) {
		// Sinon, l'adresse de livraison sera la même que la facturation 
		$shippingAddressQuery = new ShippingAddressQuery();
		$customerShipping = $shippingAddressQuery->queryConnection()->getShippingAddress($_SESSION['id']);
	} else {
		$customerShipping = $customer;
	}

	// --------------- UPDATE Billing address ---------------
	// Si le user poursuit la navigation vers le récapitulatif
	if (isset($_POST['billing-update'])) {
		// Inscription de l'adresse de facturation en bdd 
		$customer = $addressQuery->updateAddress($customer->id, $_POST);

		// Redirection vers la page des adresses 
		header('location: index.php?action=address');
	}


	// ------------- UPDATE Shipping address -------------
	// Si le user veut mettre à jour l'adresse de livraison 
	if (isset($_POST['shipping-update'])) {
		$addressName = $_POST['cust-name-2'];
		// Requête de mise à jour de l'adresse de livraison 
		$customer = $shippingAddressQuery->updateShippingAddress($customerShipping->id, $addressName, $_POST);

		// Redirection vers la page des adresses 
		header('location: index.php?action=address');
	}

	require '../templates/account.edit.address.php';
}
