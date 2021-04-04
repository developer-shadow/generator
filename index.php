<?php
if(isset($_POST['submit'])){
    $source_ = ["a","z","e","r","t","y","u","i","o","p","q","s","d","f","g","h","j","k","l","m","w","x","c","v","b","n"];
    $fix_source = rand(1,26);
    $results = $source_[$fix_source];
    $res = $source_[rand(1,26)];
    $vars = $source_[rand(1,26)];
    $vars2 = $source_[rand(1,26)];
    $vars3 = $source_[rand(1,26)];
    $a = rand(10,10000);
    $z = rand(10,10000);
    $e = rand(10,10000);
    $r = rand(10,10000);
    $result = "$a$results$res$z$vars$vars2$e$vars3$r";
    echo $result;
    //echo var_dump($result);
}
?>
<html>
<form  method="post">
<input type="submit" name="submit">
</form>
</html>