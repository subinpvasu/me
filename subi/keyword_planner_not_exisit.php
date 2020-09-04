<?php

/* 
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  Author : SUBIN P VASU, Freelance Google AdWords API Developer - PHP
 *  Created On : 22 Feb, 2020 
 */



require_once './Adwords.php';
use adwords\Advertising;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Keyword Planner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
<body>
<?php
if(isset($_POST['download']))
{
$params['keyword'] = $_POST['keyword'];
$params['location'] = $_POST['location'];
$planning = new \adwords\Adwords();
$plan_data = $planning->getKeywordPlanner($planning->getAdwordsServices(), $planning->createSession(Credentials::$MASTER_ID), $params);

if(count($plan_data)>0)
{
    $i = 1;
    ?>
        <table id="myTable">
  <tr>
    <th  onclick="sortTable(0)">ID</th>
    <th  onclick="sortTable(1)">Keyword</th>
    <th  onclick="sortTable(2)">Volume</th>
    <th  onclick="sortTable(3)">Bid</th>
    <th  onclick="sortTable(4)">Competition</th>
  </tr>
        <?php 
        foreach($plan_data as $k=>$v)
        {
            ?>
  <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $v['text'] ?></td>
    <td><?php echo $v['volume'] ?></td>
    <td><?php echo $v['cpc'] ?></td>
    <td><?php echo $v['competition'] ?></td>
  </tr>
  <?php
  
        }
        ?>
        </table>
  <?php
}

}
else
{

?>


<div class="container">
  <h2>Keyword Planner</h2>
  <form action="" method="post">
    
    <div class="form-group">
      <label for="email">Keyword</label>
      <input type="text" name="keyword" />
    </div>
    <div class="form-group">
      <label for="email">Location</label>
      
      <input list="brow" name="location">
<datalist id="brow">
  <?php
  $i=0;
  $file = fopen("geotargets.csv","r");
while(! feof($file))
  {
    if($i==0)
    {
        $i++;
        continue;
    }  
      echo '<option value="'.fgetcsv($file)[0].'">'.fgetcsv($file)[1];
  }
fclose($file);
  ?>
</datalist>  
    </div>
      <input type="submit" class="btn btn-default" name="download" value="Download"/>
  </form>
</div>
    <?php } ?>
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</body>
</html>

