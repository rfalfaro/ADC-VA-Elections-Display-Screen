<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<title>AlexDems</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat');
	body {
		font-family: 'Montserrat', sans-serif;
	}
	.full_screen {
		background: url(blue.jpg) no-repeat center center fixed; 
  		-webkit-background-size: cover;
  		-moz-background-size: cover;
  		-o-background-size: cover;
  		background-size: cover;
		height: 95vh;
		width: 95vw;
		color: #FFFFFF;
		text-shadow: 2px 2px 3px #000000;
		display: table-cell;
		vertical-align: middle;
	}
	.result_row {
		padding-top: 10px;
		padding-bottom: 10px;
	}
	</style>
</head>
<body class="full_screen">
	<div id="displayResults"></div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="results.js"></script>
<script>
	var element = document.documentElement;

	if(element.scrollHeight > element.clientHeight)
	{
		element.style.overflow = 'scrollbar';
	} else {
		element.style.overflow = 'hidden';
	}
</script>
</html>