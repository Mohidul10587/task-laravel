<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 id="heading">this is price page</h1>

    @for ($i = 0; $i < 10; $i++) <h1>{{$i}}</h1>
        @endfor

        <script>
            document.getElementById('heading').innerHTML = 'This is changed'
        </script>
</body>

</html>