<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 7</title>
</head>
<body>
  <h1>Créer deux variable et une fonction qui renvoi la concaténation des deux chaines</h1>
  <?php
  $name = 'Malleret';
  echo 'mon nom est Malleret';
  $surname = 'Jennifer';
  echo 'mon prenom est Jennifer';
  function concatenation($string, $string2){
    $result = $string. ' '. $string2;
    return $result;
  }
  echo concatenation($name, ' ' .$surname);
  ?>
</body>
</html>
