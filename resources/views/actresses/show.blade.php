<!DOCTYPE html>
<html>
<head>
	<title>{{$actress->name}}</title>
</head>
<body>
	<img src="{{asset('img/actresses/'.$actress->picture)}}" width="500px">
	<p>{{$actress->name}}</p>
</body>
</html>