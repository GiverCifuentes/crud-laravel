<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <h1 align="center">Listado de empresa</h1>
    <a class="btn btn-success mb-3" href="{{route('empresa.create')}}">CREAR</a>
    @if(empty($empresa))
    <div class="alert alert-warning">
        La lista de empresa esta vacìa
    </div>
    @else
        <div class="class-responsive">
         <table class="table table-striped">
            <thead class="thead-light">
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Nombre Representante</th>
            <th>NIT</th>
            <th>Celular</th>
            <th>Accion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($empresa as $empre)
                    <tr>
                    <td>{{$empre->id}}</td>
                    <td>{{$empre->Nombre}}</td>
                    <td>{{$empre->Direccion}}</td>
                    <td>{{$empre->NombreRepresentante}}</td>
                    <td>{{$empre->NIT}}</td>
                    <td>{{$empre->Celular}}</td>
                    <td><a class ="btn btn-link" href="{{route('empresa.edit', ['empre' => $empre->id])}}">Editar</a>
                    <form action="{{route('empresa.delete', ['empre' => $empre->id])}}" class="d-inline" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link">Eliminar</button>
                    </form>
                    </td>
                    </tr>
             @endforeach
            </tbody>
         </table>
        </div>
    @endif
</body>
</html>
