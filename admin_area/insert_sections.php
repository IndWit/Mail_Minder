<?php 
include('../includes/connect.php');

?>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="sec_title" placeholder="Insert Sections" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="border-0 p-2" style="background-color: #ac866b;" name="insert_sec" value="Insert Sections" >
        
    </div>
</form>