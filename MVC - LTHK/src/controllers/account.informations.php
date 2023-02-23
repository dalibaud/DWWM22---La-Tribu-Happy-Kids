<?php
require_once '../src/model/functions.php';
require_once '../src/model/address.php';
require_once '../src/model/shipping-address.php';
require_once '../src/model/user.php';

function informations(int $id, array $input)
{
	// Requête pour trouver les infos du user 
	$getAddress = new AddressQuery();
	$customer = $getAddress->queryConnection()->getAddress($id);

	// Si le user veut mettre à jour ses infos 
	if (isset($_POST['info-update'])) {
		// Si le user veut modifier son mot de passe, et que les champs sont identiques
		if (isset($_POST['cust-password']) && $_POST['cust-password'] === $_POST['cust-password-bis']) {
			// Update du mot de passe en bdd
			$userInfos = new UserQuery();
			$newPwd = $userInfos->queryConnection()->changePassword($id, $_POST['cust-password']);
		}
		// Requête de mise à jour des infos 
		$userUpdated = $userInfos->userUpdate($id, $input);

		// Redéclaration des variables de session avec les nouvelles infos renseignées 
		$_SESSION['pseudo'] = $_POST['cust-username'];
		$_SESSION['email'] = $_POST['cust-email'];

		// Si des infos ont été trouvées 
		if ($customer) {
			// Update des infos
			$customer = $getAddress->updateAddress($id, $_POST);
		}

		// Refresh de la page 
		header('location: index.php?action=informations');
	}

	// Si le user veut supprimer son compte 
	if (isset($_POST['delete-account'])) {
		// Requête de suppression de compte 
		$deleted = $userInfos->deleteAccount($id);

		// Redirection vers la page de déconnexion pour déconnecter le user 
		header('location: ../database/disconnect.php');
	}

	require '../templates/account.informations.php';
}
