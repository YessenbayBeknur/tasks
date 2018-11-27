<!DOCTYPE html>
<html>
  <head>
	<style>
    .main{
      display: inline-flex;

    }
    a {
      padding-right: 10px;
    }

	  .cars {
      display: inline-flex;
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

    <header>
    <a href="task2.php">ALL</a>
    <a href="toyota.php">Toyota</a>
    <a href="bmw.php">BMW</a>
  </header>
    <div class="cars">
    <?php


    $db = mysqli_connect("localhost", "root", "","webka");

    $results = mysqli_query($db,"SELECT * FROM cars WHERE maker='BMW'");
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
