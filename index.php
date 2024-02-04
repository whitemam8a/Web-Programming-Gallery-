<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Фотогалерея</title>
  <link rel="stylesheet" href="styles.css">
</head>
<h1>Фотогалерея</h1>
<div id="gallery">
  <?php
  require_once 'modules/data.php'; //подключаем внешний файл 
  $cnt = count($arr_images);

  for ($i = 0; $i < $cnt; $i++) { ?>

    <a href="item.php?index=<?php echo $i ?>">
      <img src="images/<?php echo $arr_images[$i]['src'] ?>" title="<?php echo $arr_images[$i]['desc'] ?>"> </img>
    </a>
  <?php
  }
  ?>

</div>

<body>

</body>

</html>