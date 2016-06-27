<?php
include_once 'db.php';
include_once 'project_functions.php';

update_event1();
?>
<?php include 'header.php'?>
<h1 class="text-center"><b>UPDATE DE EVENIMENT</b></h1><br>
<div class="container">
<div class="col-sm-6">
<form action="update.php" method="post">
<label for="price">Pret</label> 
<input type="text" name="price" class="form-control" >
<label for="event1_time">Data</label> 
<input type="data" name="event1_time" class="form-control" >
<SELECT name="id" id="">
<?php
interest_point_id_show();
?>
</select>
<br>
<SELECT name="id_p" id="">
<?php
event1_id_show();
?>
</select>
<br>
<input class="btn btn-primary" type="submit" name="submit" value="next">
</form>
</div>
</div>
<?php include 'footer.php'?>