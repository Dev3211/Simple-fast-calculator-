<html>
<title>Simple calculator</title>
<head>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
//for allowing only integers in our forms.
</script>
</head>
<body>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
<fieldset>
<tr>
<label for="Number1">Number1</label></div></td>
<td><input name="no1" type="text" class="input" size="25" onkeypress="return isNumberKey(event)" /> 
</tr>
<tr>
<label for="Number2">Number2</label></div></td>
<td><input name="no2" type="text" class="input" size="25" onkeypress="return isNumberKey(event)" /> 
</tr>
<tr>
<select name="operator" id="">
<option>Add</option>
<option>Subtract</option>
<option>Multiply</option>
<option>Divide</option>
</select>
</tr>
<tr>
<input type="submit" name="submit" value="Calculate!" />
</tr>
</fieldset>
</form>
</html> 
<?php
require_once 'class.calc.php';

$calc = new Calc();


if(isset($_POST['submit'])){
$numOne = $_POST['no1'];
$numTwo = $_POST['no2'];
$operator = $_POST['operator'];

$time_start = microtime(true);

switch ($operator) {
case 'Add':
echo $calc->add($numOne, $numTwo);
$time_end = microtime(true);
$time = $time_end - $time_start; 
echo " Results took " . $time . " seconds\n";
break;

case 'Subtract':
echo $calc->sub($numOne, $numTwo);
$time_end = microtime(true);
$time = $time_end - $time_start; 
echo " Results took " . $time . " seconds\n";
break;

case 'Multiply':
echo $calc->multiply($numOne, $numTwo);
$time_end = microtime(true);
$time = $time_end - $time_start; 
echo " Results took " . $time . " seconds\n";
break;

case 'Divide':
echo $calc->divide($numOne, $numTwo);
$time_end = microtime(true);
$time = $time_end - $time_start; 
echo " Results took " . $time . " seconds\n";
break;
}
}
?>
