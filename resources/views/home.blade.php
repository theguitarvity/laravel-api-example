<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ola mundo</title>
</head>
<body>
    <h1>CRUD de Carros</h1>
    

    <form action="{{route('carro.add')}}" method="post">
    {{ csrf_field() }}
        Nome:<input type="text" name="name"><br />
        Model:<input type="text" name="model"><br />
        Ano:<input type="number" name="year"><br />
        <button type="submit">Enviar</button>
    </form>
    <ul>
        @foreach ($carros as $carro)
    <li>{{$carro->name}} - {{$carro->model}} - {{$carro->year}}   <a href="{{route('carro.delete', $carro->id)}}">X</a></li>
        @endforeach
    </ul>

</body>
</html>