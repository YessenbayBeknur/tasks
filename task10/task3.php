<!DOCTYPE html>
<html>
  <head>
	<style>
    form {
      padding-bottom: 10px;
    }
	  .cars {
      display: inline-flex;
      flex-wrap: wrap;
     }
		.car{
		  display:flex;
		  border:1px solid red;
		  border-radius:5px;
		  width:250px;
		  padding:10px;
		}
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		.car img{
		  margin-right:10px;
		}
	</style>
  </head>
  <body>
    <form action="task3.php" method="post">
      Maker:<input type="text" name="maker"></br>
      Model:<input type="text" name="model"></br>
      Year:<input type="number" name="year"></br>
      Price:<input type="number" name="price"></br>
      URL:<input type="text" name="url"></br>

      <input type="submit"></br>
    </form>

    <div class="cars">
    <?php

    $db = mysqli_connect("localhost", "root", "","webka");


    if (isset($_POST['maker'])) {
      mysqli_query($db,"INSERT INTO cars (id,maker,model,year,price,url) VALUES (1,'{$_POST["maker"]}','{$_POST["model"]}','{$_POST["price"]}','{$_POST["year"]}','{$_POST["url"]}')");
    }


    $results = mysqli_query($db,"SELECT * FROM cars");

    while ($row = mysqli_fetch_array($results)) {
      ?>
      <div class="car">
        <img width="100px" height="60px" src=<?php echo $row["url"]; ?>/>
	      <div class="right">
		<div class="title"><?php echo $row['maker'];echo " ";echo $row['model'];?></div>
		<div class="attributes">
		  <div class="row"><div class="name">Year:</div><div><?php echo $row['year'];?></div></div>
		  <div class="row"><div class="name">Price:</div><div><?php echo $row['price'];?>$</div></div>
		  </div>
		</div>
	      </div>
      <?php
    }
     ?>
    </div>

  </body>
</html>
