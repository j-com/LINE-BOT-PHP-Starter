<?php
    	$con = mysql_connect('localhost', 'root', '1234');
	if (!$con) {
		die('err:' . mysql_error);
	}
	mysql_select_db('test', $con);
	$result = mysql_query('select * from files');
	while($row = mysql_fetch_array($result)){
		echo $row['FilesID'];
	}
	mysql_close($con);
?>
