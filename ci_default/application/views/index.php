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
	<style>
		form
		{
			margin-bottom: .98em;
		}
	</style>
</head>
<body>
	<form action="/quotes/create" method="post">
		<p>
			<label for="author">Author: </label>
			<input type="text" name="author">
		</p>
		<p>
			<label for="quote">Quote: </label>
			<textarea name="quote"></textarea>
		</p>
		<input type="submit" value="Add Quote">
	</form>
	<h1>Quotsy</h1>
	<div id='quotes'></div>
</body>
</html>