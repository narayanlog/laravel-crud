<form method="post" action="/movie/30">
	{{csrf_field()}}
	{{method_field("DELETE")}}
	<p>
		<label>Name: </label>
		<input type="text" name="name">
	</p>
	<p>
		<input type="submit" name="submit" value="submit">
	</p>
</form>