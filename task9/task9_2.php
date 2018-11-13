<html>
  <head>
    <style>
      select{
        width:100%;
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
<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
?>
<form action="task9_2_submit.php">

  </select>
    <table cellspacing = 0 border = 1>
      <tr>
        <td>Maker:</td>
        <td><select name = "maker"><?php foreach ($makers as $value) {
          ?>      <option><?php echo $value; ?></option> <?php
        }
        ?>
        </select></td>
      </tr>
      <tr>
        <td>Year:</td>
        <td><select name = "year"><?php for($i = 2018; $i > 1998; $i--) {
          ?>      <option><?php echo $i; ?></option> <?php
        }
        ?>
        </select></td>
      </tr>
      <tr>
        <td>Model:</td>
        <td><input name="model" type="text"></td>
      </tr>
      <tr>
        <td>Engine:</td>
        <td><?php foreach ($engine as $val) { ?>
          <input type="radio" name="engine" value=<?= $val ?>>
          <label><?php echo $val ?></label>
       <?php } ?>
          </td>
      </tr>
      <tr>
        <td>Price:</td>
        <td><input name="price" type="number"></td>
      </tr>
      <tr>
        <td>Additional:</td>
        <td>
          <input type="checkbox" name="add[]" value="Tax payed">
          <label>tax payed</label><br>

          <input type="checkbox" name="add[]" value="Technical check passed">
          <label>technical check passed</label><br>

          <input type="checkbox" name="add[]" value="Doesn't recure investment">
          <label >doesn't recure investment</label>
        </td>
      </tr>
    </table>

    <input type="submit"/>
</form>
