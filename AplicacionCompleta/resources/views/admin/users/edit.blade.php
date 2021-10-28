<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
        <h1> Página de para editar usuarios de amin. </h1>
        
        {!! Form::model($user, ['method' => 'PATCH',"action" => ["AdminUsersController@update", $user->id] , 'files'=>"True"]) !!} 
        <!-- El formulario de partida es el de create.blade.php en users pero se cambia el tipo de formulario porque es de update a model
        ademas usa como parametro adicional la variable $user con la información del usuario a editar y en lugar de POST se usa
        PATCH, hay que revisar la diferencia entre los 2. Adicional en la nueva instrucción de acción hay que mandar como un solo array
        tambien el id del usuario-->
        
        <table>
            <tr>
                <td>
                {!! Form::label('name', 'Nombre: ') !!}                    
                </td>
                <td>
                {!! Form::text('name') !!}  
                </td>
            </tr>
            <tr>
                <td>
                {!! Form::label('email', 'E-Mail: ') !!}                    
                </td>
                <td>
                {!! Form::text('email') !!}  
                </td>
            </tr>
            <tr>
                <td>
                {!! Form::label('role_id', 'Role: ') !!}                    
                </td>
                <td>
                {!! Form::text('role_id') !!}  
                </td>
            </tr> 
            <tr>
                <td>
                <!-- <img src="/images/{{$user->foto ? $user->foto->ruta_foto : 'paisaje_nieve.jpg'}}" width="150"> 
                esta es la versión con operdador terciario para escribir menos -->
                
                @if($user->foto)
                    <img src="/images/{{$user->foto->ruta_foto}}" width="150"/>
                    <!--<td>{{App\Foto::where('id', $user->foto_id )->select('ruta_foto')->get()}}</td> De esta forma tambien busco la información por medio de una consulta el problema es que devuelve un array -->
                @else
                    <img src="/images/paisaje_nieve.jpg" width="150"/>
                @endif 
                <!--{!! Form::label('foto_id', 'Foto: ') !!}-->                    
                </td>
                <td>
                {!! Form::file('foto_id') !!}  
                </td>
            </tr> 
            <tr>
                <td>
                {!! Form::submit('Modificar usuario') !!}                    
                </td>
                <td>
                {!! Form::reset('Borrar') !!}  
                </td>
            </tr>                        
        </table>
        
        {!! Form::close() !!} 
        
        {!! Form::model($user, ['method' => 'DELETE',"action" => ["AdminUsersController@destroy", $user->id]]) !!}
        
            {!! Form::submit('Eliminar usuario') !!}
        
        {!! Form::close() !!}
        
    </body>
</html>
