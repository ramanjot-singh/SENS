<style>

input[type="submit"] {
background-color: #008dde;	/*color=blue*/
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;				/*color=white*/
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 100%;
-webkit-appearance:none;
padding: 5px;
}

textarea{
	width: 100%;
	height: 250px;
}

#input{
	width: 100%;
	height: 35px;	
}

tr{
	text-align: center;
	font-size: 25px;
}

</style>

<form name = 'eventform' method ='POST' action="<?php $_SERVER['PHP_SELF']; ?>?month=<?php echo $month;?>&day=<?php echo $day;?>&year=<?php echo $year;?>&v=true&add=true">
	<hr>
	<table width ='100%'>
		<tr>
			<td colspan='2' width = '150px'><strong>Title</strong></td>
		</tr>

		<tr>
			<td colspan='2' width = '500px'><input id='input' type='text' name ='txttitle'> </td>
		</tr>	
		
		<tr><td colspan='2' width='150px'><strong>Detail</strong></td></tr>
		<tr>
			<td colspan='2' width ='250px'><textarea name='txtdetail'></textarea></td>
		</tr>	
		<tr>
			<td colspan ='2' align ='center'><input type='submit' name ='btnadd' value ='Add Event'></td>
			
		</tr>
		

	</table>
	
</form>