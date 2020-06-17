<!DOCTYPE html>
<html lang=en-US>
<head>
  <meta charset="<?php echo $site['charset']; ?>">
  <meta lang="<?php echo $site['lang']?>">
  <meta name="keywords" content="<?php echo $site['keywords']; ?>" >
  <link rel="shortcut icon" href="./app/img/favicon.png" type="image/x-icon">
  <meta name="description" content="<?php echo $site['description']; ?>" >
  <title><?php echo $site['name']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="app/css/swiper.min.css"/>
  <link rel="stylesheet" href="app/css/bootstrap-grid.min.css"/>
  <link rel="stylesheet" href="app/fonts/stylesheet.css"/>
  <link rel="stylesheet" href="app/css/style.css"/>
  <script src="app/js/swiper.min.js"></script>
</head>
<body>
  <?php include $path['tpl'].'header.php'; ?>
  <?php include $path['tpl'].'main.php'; ?>
  <?php include $path['tpl'].'footer.php'; ?>

  <script src="app/js/app.js"></script>
</body>
</html>
