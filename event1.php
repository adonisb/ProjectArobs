<?php
include_once 'db.php';
include_once 'project_functions.php';
create_event1();
?>
<?php include 'header.php'?>
<h1 class="text-center"><b>CREARE DE EVENIMENT</b></h1><br>
<div class="container">
<div class="col-sm-6">
<form action="creator.php" method="post">
<label for="price">Pret</label> 
<input type="text" name="price" class="form-control" >
<label for="event1_time">Data</label> 
<input type="data" name="event1_time" class="form-control" >
<SELECT name="id" id="">
<?php
interest_point_id_show();
?>
</select>
<input class="btn btn-primary" type="submit" name="submit" value="next">
</form>
</div>
</div>
<?php include 'footer.php'?>