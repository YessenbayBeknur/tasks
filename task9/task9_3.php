<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
$cars = [["id"=>"0","maker"=>"Toyota","model"=>"Corolla","year"=>"2015","engine"=>"petroleum","price"=>"30000","additional"=>["tax","investment"]],["id"=>"1","maker"=>"BMW","model"=>"X5","year"=>"2012","engine"=>"gas","price"=>"25000","additional"=>["tax","investment","check"]],["id"=>"2","maker"=>"Toyota","model"=>"Camry","year"=>"2008","engine"=>"diesel","price"=>"35000","additional"=>["investment","check"]]];
$selected_car = NULL;
if (isset($_REQUEST["id"])){
	$selected_car = $cars[$_REQUEST["id"]];
}
?>
<html>
<head>
<style>
select{
  width:200px;
  background:white;
  padding:5px;
  border-radius:5px;
  color:#444444;
}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr td{
  padding:3px;
}
</style>
</head>
<form action="task9_3.php">
<select name="id" onchange="this.parentNode.submit()">
	<option value="-1">Select car</option>

<?php
		foreach ($cars as $car) {
			?>
			<option value=<?= $car["id"] ?>><?php echo $car["maker"];echo " ";echo $car["model"]; ?></option>
		<?php }


?>


</select>

</form>
<form action="">
	<table cellspacing = 0 border = 1>
		<tr>
			<td>Maker:</td>
			<td><select name = "maker"><?php
					if(!isset($_REQUEST["id"])){
						foreach ($makers as $value) {
					?>      <option><?php echo $value; ?></option> <?php
						}
					}
				else{
						?><option><?php echo $selected_car["maker"]; ?></option> <?php
				} ?>
			</select></td>
		</tr>
		<tr>
			<td>Year:</td>
			<td><select name = "year"><?php
				if(!isset($_REQUEST["id"])){
			 		for($i = 2018; $i > 1998; $i--) {
				?> <option><?php echo $i; ?></option> <?php
					}
				}
				else{
					?> <option><?php echo $selected_car["year"]; ?></option> <?php
				}
			?>
			</select></td>
		</tr>
		<tr>
			<td>Model:</td><?php
				if(!isset($_REQUEST["id"])){
					?> <td><input name="model" type="text"></td><?php
				}
				else {
				?> <td><input name="model" type="text" value=<?php echo $selected_car["model"]; ?>></td><?php
				}
		?>
		</tr>
		<tr>
			<td>Engine:</td>
			<td><?php
				if(!isset($_REQUEST["id"])){
					foreach ($engine as $val) { ?>
						<input type="radio" name="engine" value=<?= $val ?>>
						<label><?php echo $val ?></label>
		 		<?php }
				}
				else {
					foreach ($engine as $val) {
						if($selected_car["engine"] == $val){
							?>
							<input type="radio" name="engine" value=<?= $val ?> checked>
							<label><?php echo $val ?></label><?php
							}
						else {
							?>
							<input type="radio" name="engine" value=<?= $val ?>>
							<label><?php echo $val ?></label><?php
						}
					}
				}
				 ?>
				</td>
		</tr>
		<tr>
			<td>Price:</td><?php
				if(!isset($_REQUEST["id"])){
					?>
					<td><input name="price" type="number"></td><?php
				}
				else {
				?> <td><input name="price" type="number" value=<?php echo $selected_car["price"]; ?>></td><?php
				}
		?>
		</tr>
		<tr>
			<td>Additional:</td>
			<td><?php
				if(!isset($_REQUEST["id"])){
					?>
				<input type="checkbox" name="add[]" value="tax">
				<label>tax payed</label><br>

				<input type="checkbox" name="add[]" value="check">
				<label>technical check passed</label><br>

				<input type="checkbox" name="add[]" value="investment">
				<label >doesn't recure investment</label><?php
				}
				else {
					$add = ["tax","check","investment"];
					$in = array_intersect($add,$selected_car["additional"]);
					$diff = array_diff($add,$selected_car["additional"]);
					if(isset($diff)){
						foreach($diff as $value){?>
							<input type="checkbox" name="add[]" value=<?= $value; ?>>
							<label><?= $value ?></label><br><?php
						}
					}
					if (isset($in)) {
						foreach ($in as $value) {?>
							<input type="checkbox" name="add[]" value=<?= $value; ?> checked>
							<label><?= $value ?></label><br><?php
						}
					}
				}
				?>
			</td>
		</tr>
	</table>
    <input type="submit"/>
</form>
