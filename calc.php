 <meta charset="UTF-8">
<form  method="GET">
<input type ="text" name="arg1" value="">
<input type ="text" name="arg2" value="">
<input type ="submit" value="сумма">
</form>

<?php 
	if (isset($_GET['arg1']) && isset ($_GET['arg2'])) {
	echo intval ($_GET['arg1'])+intval ($_GET['arg2']);
}
?>
