<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
</head>
<body>
	<form>
		<input type="text" name="search" placeholder="Tìm phim">
		<input type="submit">
	</form>
	<table>
		<tr>
			<th>Name</th>
			<th>Poster</th>
			<th>Actress</th>
		</tr>
		@foreach($movies as $movie)
			<tr>
				<td>{{$movie->name}}</td>
				<td><img src="{{asset('img/movies/'.$movie->poster)}}" width="100px"></td>
				<td><a href="/actresses/{{$movie->actress->id}}">{{$movie->actress->name}}</a></td>
			</tr>
		@endforeach
	</table>
</body>
</html>