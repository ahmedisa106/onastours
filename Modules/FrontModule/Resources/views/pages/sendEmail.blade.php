<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email</title>
</head>
<body>
<h1 style="text-align: center">{{$data['name']}} has booked a trip</h1>
<p>mobile : {{$data['mobile']}}</p>
<p>abbreviation : {{$data['abbreviation']}}</p>
<p> adults number : {{$data['adults_number']}}</p>
<p> kids number : {{$data['kids_number']}}</p>
<p>arrival date : {{$data['arrival_date']}}</p>
<p>departure date : {{$data['departure_date']}}</p>


@isset($data['notes'])
    <textarea> notes : {{$data['notes']}}</textarea>
@endisset


</body>
</html>
