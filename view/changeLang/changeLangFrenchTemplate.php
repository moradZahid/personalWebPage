<div id='change_lang'>
	<form method="post" 
		  action="<?= $url.'/controller/frontalController.php?from=change lang'?>"> 
		
			<label for="change lang">Changer la langue</label>
		    <select name='lang' id='lang'>
		    	<option value='french'>français</option>
		    	<option value='english'>anglais</option>
		   </select>
		   <input type="submit" value="go" >
		
	</form>
</div>