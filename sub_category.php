<?php
include_once "db.php";
include_once "project_functions.php";


if(isset($_POST["submit"])){
create_sub_category();
};

?>
<?php include 'header.php'?>
<h1 class="text-center"><b>CREARE DE SUB CATEGORIE<b></h1>
<br>
<div class="container">
<div class="col-sm-6">
<form action="creator.php" method="post">
<label for="title">Title</label> 
<input type="text" name="title" class="form-control" >
<label for="describtion">Describtion</label>
<input type="text" name="describtion" class="form-control">
<SELECT name="id" id="">
<?php
category_id_show();
?>
</select>
<br>
<input class="btn btn-primary" type="submit" name="submit" value="next">
</form>
</div>
</div>
<?php include 'footer.php'?>