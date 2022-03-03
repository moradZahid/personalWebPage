<div id='change_lang'>
	<form method="post" 
		  action="<?= $url.'/controller/frontalController.php?from=change lang'?>"> 
			<label for="change lang">Change language</label>
		    <select name='lang' id='lang'>
		    	<option value='french'>French</option>
		    	<option value='english' selected>English</option>
		    	<input type="submit" value="go" >
		   </select>
	</form>
</div>