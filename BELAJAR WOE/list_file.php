<?php
    $mydir = 'uploads';

    $myfiles = array_diff(scandir($mydir), array('.','..'));

    foreach ($myfiles as $file)
    {
        echo "<a href = '/uploads/$file'>".$file."</a><br>";
    }


?>
