<?php
  
  include "bd.php";

  $result_main = mysqli_query($mysqli, 'SELECT * FROM main');

  $rows_main = mysqli_fetch_all($result_main, MYSQLI_ASSOC);
  
  //print_r($rows);
  
  $mysqli->close();
  
?>
<div class="sidebar">
  <h2>Рейтинг фильмов</h2>
    <ul>
    <?php foreach($rows_main as $row_main):?>
      <li><a class="link_sidebar" href="/page.php?id=<?php echo $row_main['post_id'];?>"><?php echo $row_main['name'];?></a><span class="rating_sidebar"><?php echo $row_main['rating'];?></span></li>
    <?php endforeach;?>
    </ul>
  </div>
</div>