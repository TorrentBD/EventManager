<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2>Welcome {{$user['name']}} !</h2>
<br/>
		Your registered email-id:  {{$user['email']}}
<br/>
<b>
		Secret key :  {{ $user['token']}}
</b>
<br/>
</body>
 
</html>