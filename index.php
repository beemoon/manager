<?php
$target = './';
$excludeFolder = array();

$directories = preg_grep('/^([^.])/',array_diff(scandir($target), $excludeFolder));
natcasesort($directories);

/*
foreach($directories as $value)
{
   if(is_dir($target.$value))
   {
      echo $value.'<br />';
   }
}
*/

// Variable qui ajoutera l'attribut selected de la liste d�roulante
  $selected = '';
 
  // Parcours du tableau
  echo '
  <select name="couleurs" size="7">',"\n";
  foreach($directories as $value)
  {
   if(is_dir($target.$value))
   {
    // Affichage de la ligne
    echo "\t",'<option value="', $value ,'"', $selected ,'>', $value ,'</option>',"\n";
    // Remise � z�ro de $selected
    $selected='';
   }
  }
  echo '</select>',"\n";
  
?>