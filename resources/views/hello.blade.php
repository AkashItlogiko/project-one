<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
            <h1>Mark is={{$result}}</h1>

            @if($result>60 && $result<70)
            <h1>Grade A</h1>
            @elseif($result>50 && $result<60)
            <h1>Grade B</h1>
            @elseif($result>30 && $result<50)
            <h1>Grade C</h1>
            @else
            <h1>Grade F</h1>
            @endif

            <img src="{{asset('https://wikitia.com/wiki/File:Suri_Noelle.JPG')}}">

</body>
</html>
