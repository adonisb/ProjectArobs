<?php
include_once 'db.php';
include_once 'project_functions.php';
update_interest_point();
?>

<?php include 'header.php'?>

<h1 class="text-center"><b>UPDATE DE INTEREST POINT</b></h1><br>
<div class="container">
<div class="col-sm-6">
<form action="update.php" method="post">
<label for="title">Nume</label> 
<input type="text" name="title" class="form-control" >
<label for="location_latitude">Latitudine</label> 
<input type="text" name="location_latitude" class="form-control" >
<label for="location_longitude">Longitudine</label> 
<input type="text" name="location_longitude" class="form-control" >
<label for="phone_number">Numar de telefon: </label> 
<input type="text" name="phone_number" class="form-control" >
<label for="describtion">Descriere</label>
<input type="text" name="describtion" class="form-control">
<select name="id" id="">
<?php
interest_point_id_up_show();
?>
</select>

<input class="btn btn-primary" type="submit" name="submit" value="next">
</form>
</div>
</div>
<?php include 'footer.php'?>