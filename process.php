<!--

Name: Luke Cheng
Date: 4/4/24
URl: https://kcheng.greenriverdev.com/328/cupcakes/
Description: This is the form to order cupcakes

-->

<?php

    $name = $_POST['name'];

    echo "Thank you, ".$name.", for your order";

    $value = 0;
    $flavors = $_POST['flavor'];
    foreach ($flavors as $flavor)
    {
        echo "<li> $flavor </li>";
        $value = $value + 3.50;
    }

    echo "Order Total: $" .$value;
