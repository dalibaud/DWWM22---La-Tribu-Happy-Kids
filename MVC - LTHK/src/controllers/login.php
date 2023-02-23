<?php
require_once '../src/model/functions.php';
require_once '../src/model/user.php';

function login(array $input)
{
	// Variables des messages de succès/d'erreur 
	$login_msg = '';
	$type_login_msg = '';
	$signin_msg = '';
	$type_signin_msg = '';

	// Si le form est rempli 
	if (!empty($input['username-1']) && !empty($input['password-1'])) {
		$user =	(new UserQuery())->queryConnection()->getUser($input['username-1']);

		// Si le visiteur est trouvé dans la bdd, on déclare les variables de session 
		if (
			($user->username == $input['username-1'] || $user->email == $input['username-1'])
			&& password_verify($input['password-1'], $user->password)
		) {
			$_SESSION['pseudo'] = $user->username;
			$_SESSION['email'] = $user->email;
			$_SESSION['id'] = $user->id;

			// Si le visiteur vient d'une page produit, on le redirige vers le shop
			if (isset($_SERVER['HTTP_REFERER']) && str_contains($_SERVER['HTTP_REFERER'], 'product')) {
				header('location: index.php?action=shop');
				// Sinon vers l'espace client
			} else {
				header('location: index.php?action=account');
			}
			// Message d'erreur si un des champs ne correspond pas à un user 
		} else {
			$login_msg = 'Nom d\'utilisateur ou mot de passe incorrect.';
			$type_login_msg = 'error';
			require '../templates/connection.php';
		}
		// Message d'erreur si le form est incomplet 
	} else {
		$login_msg = 'Veuillez compléter tous les champs.';
		$type_login_msg = 'error';
		require '../templates/connection.php';
	}
}
