<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <div style="display: grid; grid-template-columns: auto auto auto;">
        @foreach($data as $item)
            <div style="padding: 30px; background-color: red;">
                <img src="data:image/png;base64, {{ $item }}" alt="">
            </div>
        @endforeach
    </div>
</body>
</html>
