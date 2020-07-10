<?php require_once 'bootstrap.php';?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container">
<form method='GET' action='index.php'>
<select class='m-3' name='table'>
<option value='sellers'>sellers</option>
<option value='customers'>customers</option>
<input  class="btn btn-secondary" type='submit' name='submit' value='submit'></input>
</select>
</form>
</div>