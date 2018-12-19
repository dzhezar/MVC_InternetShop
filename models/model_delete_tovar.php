<?php

$query = build_delete_query('product', ['id' => $id]);
	return execute_query($query);

?>