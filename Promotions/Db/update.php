<?php
$obj = new Model();

/*Update Promotion*/
if(isset($_POST['update'])){
    $obj->updatePromotion($_POST);
}//if isset close