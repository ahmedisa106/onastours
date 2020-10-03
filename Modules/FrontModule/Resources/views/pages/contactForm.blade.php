<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div class="text-center">
    <h1>{{$data['name']}} has sent message</h1>
    <span class="text-bold"> his phone is  : {{$data['phone']}}</span><br>
    <span class="text-bold"> his email is  : {{$data['email']}}</span><br>
    <textarea class="text-bold">his message : {{$data['message']}}</textarea>

</div>

</body>
</html>
