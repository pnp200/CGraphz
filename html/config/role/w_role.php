<?php
if (isset($_POST['f_submit_role'])) {
	
	$f_id_config_role=intval($_POST['f_id_config_role']);
	$f_role=mysql_escape_string($_POST['f_role']);
	$f_role_description=mysql_escape_string($_POST['f_role_description']);
		
	if ($_POST['f_id_config_role']) { // UPDATE
		$lib='
			UPDATE `config_role` SET
				`role`="'.$f_role.'",
				`role_description`="'.$f_role_description.'"
			WHERE
				`id_config_role`="'.$f_id_config_role.'"';
	} else { // INSERT
		$lib='INSERT INTO `config_role` (`id_config_role`,`role`,`role_description`) VALUES ("'.$f_id_config_role.'","'.$f_role.'","'.$f_role_description.'")';
	}
	
	$connSQL=new DB();
	$connSQL->query($lib);
}
?>
