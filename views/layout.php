<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= SCRIPTS .'css' . DIRECTORY_SEPARATOR . 'style.css' ?>" rel="stylesheet" type="text/css" />
    <title>Le site mvc </title>
</head>
<body>
    


<header class="d-flex container justify-content-space-between items-center mt  ">
  <div class="logo">
    <h1>MVC</h1>
  </div>
  <nav class="w-50 ">
    <ul class="d-flex justify-content-space-between ">
      <li><a href="#">Accueil</a></li>
      <li><a href="#">A propos</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
</header>


<div class="container p-2">
  <?= $content ?>
</div>

</body>
</html>
