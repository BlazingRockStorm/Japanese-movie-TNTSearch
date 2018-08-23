<!DOCTYPE html>
<html>
<head>
	<title>Actresses</title>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Image</th>
		</tr>
		@foreach($actresses as $actress)
			<tr>
				<td>{{$actress->name}}</td>
				<td><img src="{{asset('img/actresses/'.$actress->picture)}}" width="100px"></td>
			</tr>
		@endforeach
	</table>
</body>
</html>