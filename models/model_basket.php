<?php
function get_basket($table,$where = null,$what = null){
	$query = build_select_query_basket($table,$where,$what);
	return execute_select_query($query);
}

?>