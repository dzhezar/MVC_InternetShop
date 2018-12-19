<?php
function get_data($table,$where = null,$what = null){
	$query = build_select_query($table,$where,$what);
	return execute_select_query($query);
}

?>