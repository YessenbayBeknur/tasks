<a href="task2.php?category=sport">Sport news</a> | <a href="task2.php?category=politics">Politic news</a><br/><br/>
<a href="task2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="task2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],
          "politics"=>["Trump has cancelled his visit to North Corea, because of sanction",
                          "N. Nazarbayev has approved new version of alphabet"]];
$category = ["sport"];


  foreach ($news as $key => $value) {
    if($_GET["category"] == $key){
      if(isset($_GET["format"])){
        if($_GET["format"] == "json"){
          echo json_encode($value);
        }
      }
      else {
        foreach ($value as $val) {
          ?>
          <div style="border-bottom: 1px solid gray;
                      padding: 5px;">
                  <?php echo $val ?>
                </div>
                  <?php
      }
    }
  }
}

?>
