<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quotes</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
		$(document).ready(function()
		{
			$.get('/quotes/index_html', function(res)
			{
				$('#quotes').html(res);
			});
		});
	</script>
</head>
<body>
	<h1>Quotsy</h1>
	<div id='quotes'></div>
</body>
</html>