<?php
function createSelect($current_option, $array, $select_name)
{
	$select_str = "<select name=\"$select_name\">";	
	
	for ($i=0;$i<count($array);$i++)
	{
		$id  =$array[$i]["id"];
		$name=$array[$i]["name"];
	
		if ($current_option==$array[$i]["id"])
			$select_str.="<option value=\"$id\" selected \">".$name."</option>";
		else
			$select_str.="<option value=\"$id\" \>".$name."</option>";
	}
	
	$select_str.="</select>";	
	
	return $select_str;
}

?>