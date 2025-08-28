<?php
    function parouimpar($num){
        if ($num % 2 == 0){
            return "<strong style='color: red;'>par</strong>";
        } else {
            return "<strong style='color: red;'>ímpar</strong>";
        }
    }
    $num = $_POST['num'];
    echo "<h2 style='color: red'> Par ou Ímpar</h2>";
    echo "O número $num é ".parouimpar($num);
?>   