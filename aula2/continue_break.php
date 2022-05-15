<?php
for ($i = 0; $i <10; $i++) {
    if ($i == 4 || $i == 6) {
        echo 'primeira comparação usando continue';
        continue;
    }
    if ($i == 8) {
        echo 'segunda comparação usando break';
        break;
    }
    echo '</br>';
    echo $i . ' ';
    
}
echo '</br>';
echo 'Final';
?>