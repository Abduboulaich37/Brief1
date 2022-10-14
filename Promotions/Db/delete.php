<?php
$obj = new Model();

/*Delete Promotion*/
if(isset($_GET['deleteid'])){
    $delid = $_GET['deleteid'];
    $obj->deletePromotion($delid);
}//if isset close