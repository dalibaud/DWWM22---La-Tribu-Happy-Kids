<?php
require_once '../src/model/functions.php';
require_once '../src/model/address.php';
require_once '../src/model/shipping-address.php';

function userAddress(int $id)
{
	// Requête pour l'affichage de l'adresse de facturation 
	$customer = (new AddressQuery())->queryConnection()->getAddress($id);

	// Requête pour l'affichage de l'adresse de livraison, si existante 
	$getShippingAddress = new ShippingAddressQuery();
	$customerShipping = $getShippingAddress->queryConnection()->getShippingAddress($id);

	// si le user veut supprimer l'adresse de livraison 
	if (isset($_GET['id'])) {
		// Vidage partiel de l'adresse de livraison, afin de pouvoir ré-exploiter l'adresse plus tard
		$disabled = $getShippingAddress->disableShippingAddress($_GET['id']);
		// Refresh de la page des adresses
		header('location: index.php?action=address');
	}
	require '../templates/account.address.php';
}
