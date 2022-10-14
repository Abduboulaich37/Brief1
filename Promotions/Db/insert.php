<?php
$obj = new Model();

/*Insert Promotion*/
if(isset($_POST['submit'])){
    $obj->insertPromotion($_POST);
}//if isset close