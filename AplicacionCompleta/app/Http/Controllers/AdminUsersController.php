<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Foto;

use Illuminate\Support\Facades\DB; //añadiendo esto modelo se puede usar el objeto DB para buscar información en la base de datos.

use Illuminate\Support\Facades\Session; //Con esto se importa el objeto session

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$users = DB::table('users')->get(); //así se usa el objeto DB para buscar información en la base de datos.
        
        $users=User::all(); //Aqui use el modelo User la ventaja es como hay relación con la tabla foto me entiende en 
        //la página de blade que el id es un objeto con la información de ese id con la tabla foto.
        
        return view('admin.users.index',compact("users")); //la información recuperada se pasa en un array con el nombre users y con la información de $users.
        
        //return view('admin.users.index',['users' => $users]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrada=$request->all();
    
        if($archivo=$request->file('foto_id')){
            
            $nombre=$archivo->getClientOriginalName();
            
            $archivo->move('images', $nombre);
            
            $foto=Foto::create(['ruta_foto' => $nombre]);
            
            $entrada['foto_id']=$foto->id;
            

        }
        
        $entrada['password']=bcrypt($request->password);
        
        User::create($entrada);
        
        
        //User::create($request->all());
        
        return redirect('/admin/users');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        
        $entrada=$request->all();
        
        if($archivo=$request->file('foto_id')){
            
            $nombre=$archivo->getClientOriginalName();
            
            $archivo->move('images', $nombre);
            
            $foto=Foto::create(['ruta_foto' => $nombre]);
            
            $entrada['foto_id']=$foto->id;
         
        }
        
        
        $user->update($entrada);

        
        return redirect('/admin/users');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        
        $user->delete();
        
        Session::flash('usuario_borrado','El usuario ha sido borrado con éxito');
        
        return redirect('/admin/users');
        
    }
}
