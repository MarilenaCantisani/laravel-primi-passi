<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>To do list:</h1>
    <ul>
        @foreach($to_do_list as $item_list)
        <li>{{$item_list}}</li>
        @endforeach
    </ul>

</body>

</html>