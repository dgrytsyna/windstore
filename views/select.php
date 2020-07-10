<?php if($_GET['table']=='sellers'):?>
<div class="m-3">
<form method='GET' action='index.php'>
<input type="hidden"  name="table" value="sellers">
<select name='city'>
<option value='all'>all</option>
<option value='Ternopil'>Ternopil</option>
<option value='Dnipro'>Dnipro</option>
<option value='Lviv'>Lviv</option>
<option value='Kharkiv'>Kharkiv</option>
</select>
<select name='commission'>
<option value='all'>all</option>
<option value='10'>10%</option>
<option value='11'>11%</option>
<option value='12'>12%</option>
<option value='13'>13%</option>
<option value='15'>15%</option>
</select>
<input   class="btn btn-secondary" type='submit' name='seller_submit' value='submit'></input>
</form>
</div>

<?php elseif($_GET['table']=='customers'):?>
<div class="m-3">
<form method='GET' action='index.php'>
<input type="hidden"  name="table" value="customers">
<select name='city'>
<option value='all'>all</option>
<option value='Ternopil'>Ternopil</option>
<option value='Dnipro'>Dnipro</option>
<option value='Kropyvnitskyi'>Kropyvnitskyi</option>
<option value='Rivne'>Rivne</option>
<option value='Mykolaiv'>Mykolaiv</option>
</select>
<select name='rating'>
<option value='all'>all</option>
<option value='100'>100</option>
<option value='200'>200</option>
<option value='300'>300</option>
</select>
<input  class="btn btn-secondary" type='submit' name='customer_submit' value='submit'></input>
</form>
</div>
<?php endif?>