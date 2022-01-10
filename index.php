<?php

$txt = 'Le texte de mon choix';

echo $txt . "<br>";

$arr = [
    'premier texte',
    'deuxieme texte',
    'troisieme texte',
    'quatrieme texte',
];

echo $arr[1] . "<br><br>";

for($i = 0 ; $i < count($arr) ; $i++){
    echo $arr[$i] . "<br>";
}

echo "<br>";

?>

<ul>
    <?php
        foreach ($arr as $item){
            echo "<li>" . $item . "</li>";
        }
    ?>
</ul>
