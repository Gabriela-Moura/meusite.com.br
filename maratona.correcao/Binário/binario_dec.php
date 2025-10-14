<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ndec = ($_POST['ndec']);
}
$nbin = decbin($ndec);
echo"<h2>Binário</h2>";
echo "O número $ndec em binário é: $nbin";
?>