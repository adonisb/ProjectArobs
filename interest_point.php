<?php include 'header.php'?>
<h1 class="text-center"><b>CREARE DE INTEREST POINT</b></h1><br>
<div class="container">
<div class="col-sm-6">
<form action="creator.php" method="post">
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
<input class="btn btn-primary" type="submit" name="submit" value="next">
</form>
</div>
</div>
<?php include 'footer.php'?>

<?php
include_once 'db.php';
include_once 'project_functions.php';
create_interest_point();
?>
