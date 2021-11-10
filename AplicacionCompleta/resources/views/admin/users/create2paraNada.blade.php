<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
        <h1> Página de para crear usuarios de amin. </h1>
        
        {!! Form::open(['method' => 'POST',"action" => "AdminUsersController@store", 'files'=>"True"]) !!}
        
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
                {!! Form::label('password', 'Password: ') !!}                    
                </td>
                <td>
                {!! Form::text('password') !!}  
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
                {!! Form::label('email_verified_at', 'Verificar E-Mail Address: ') !!}                    
                </td>
                <td>
                {!! Form::text('email_verified_at') !!}  
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
                {!! Form::label('foto_id', 'Foto: ') !!}                    
                </td>
                <td>
                {!! Form::file('foto_id') !!}  
                </td>
            </tr> 
            <tr>
                <td>
                {!! Form::submit('Crear usuario') !!}                    
                </td>
                <td>
                {!! Form::reset('Borrar') !!}  
                </td>
            </tr>                        
        </table>
        
        {!! Form::close() !!}           
            
    </body>
</html>
