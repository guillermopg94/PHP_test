<html>
<head>
	<title>Test</title>
</head>
<body>

<?php 
$variable="Melocoton";
?>
<script>
	window.onload=function()
	{
		console.log(<?php $variable?>);
		function mostrar(txt)
		{	
		alert(txt);
		}
		var m="<?php echo $variable?>";
	mostrar(m);
	}
	
</script>

</body>
</html>

