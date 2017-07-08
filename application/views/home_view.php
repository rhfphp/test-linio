<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Linio Test</title>
	
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css');?>">
</head>
<body>

<div id="container">
	<h1>Welcome to Linio Test!</h1>

	<div id="body">
		<form method="post">
			Initial: <input type="number" name="initial" value="<?=$this->input->post('initial')?>" /> 
			End: <input  type="number" name="end" value="<?=$this->input->post('end')?>" />
			<input type="submit" />
		</form>
		
		<ul>	
			<?php foreach($numbers AS $d){ ?>
			<li><?=$d?></li>
			<?php } ?>
		</ul>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
</div>

</body>
</html>
