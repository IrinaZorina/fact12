






<?php
$chanege=file_get_contents('DZ_HTML/index.php');
echo str_replace('<span>Меня зовут, Юра, мне 35лет.</span>','<span class="red"> Меня зовут, Юра, мне 35лет.</span>',$chanege);
?>
