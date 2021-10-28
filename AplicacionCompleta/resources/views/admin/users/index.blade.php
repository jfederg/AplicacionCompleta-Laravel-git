<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    </head>
    <body>
        
        @if(Session::has('usuario_borrado'))
        
            <p class="bg-danger">{{session('usuario_borrado')}}</p>
        
        @endif
        
        <h1 style="text-align:center ; margin: 50px 0 "> PÁGINA DE INDEX ADMINISTRADOR. </h1>
        
        <table width="600" class="table">
            <tr>
                <th>Id</th>
                <th>Foto</th>
                <th>Role Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Creado</th>
                <th>Actualizado</th>
            </tr>
            @if($users) <!--este if es cuando la tabla users esta vacia y la variable esta nula --> 
            @foreach($users as $user)   <!--este forwach es para buscar en la información de la variable-->         
                <tr>
                    <td>{{$user->id}}</td>
                    @if($user->foto)
                    <td><img src="/images/{{$user->foto->ruta_foto}}" width="150"/></td>
                    <!--<td>{{App\Foto::where('id', $user->foto_id )->select('ruta_foto')->get()}}</td> De esta forma tambien busco la información por medio de una consulta el problema es que devuelve un array -->
                    @else
                    <td><img src="/images/paisaje_nieve.jpg" width="150"/></td>
                    @endif
                    <td>{{$user->role_id}}</td>
                    <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
            @endforeach
            @endif
        </table>
    </body>
</html>
