<?php
function routing($page){
	switch($page){
		case 'tovar':
			$controller = 'controller_tovar_list.php';
			$left_controller = 'controller_filter_tovar_list.php';
			break;	
		case 'add_tovar':
			$controller = 'controller_add_tovar.php';
			break;	
		case 'action_add_tovar':
			$controller = 'controller_action_add_tovar.php';
			break;	
		case 'delete_tovar':
			$controller = 'controller_delete_tovar.php';
			break;	
		case 'prop_tovar':
			$controller = 'controller_prop_tovar.php';
			break;
		case 'edit_tovar':
			$controller = 'controller_edit_tovar.php';
			break;
		case 'action_edit_tovar':
			$controller = 'controller_action_edit_tovar.php';
			break;				
		case 'action_add_basket':
			$controller = 'controller_action_add_basket.php';
			break;
		case 'basket':
			$controller = 'controller_basket.php';
			break;	
		case 'registration':
			$controller = 'controller_registration.php';
			break;
		case 'action_registration':
			$controller = 'controller_action_registration.php';
			break;
		case 'autorization':
			$controller = 'controller_autorization.php';
			break;
		case 'action_autorization':
			$controller = 'controller_action_autorization.php';
			break;
		case 'logout':
			$controller = 'controller_logout.php';
			break;	
			
		default:
			//$controller='controller_tovar_list.php';
	}
	if(!strpos($page,'action'))
		require_once('views/template_view.php');
	else
		require_once('controllers/'.$controller);
	
}
?>