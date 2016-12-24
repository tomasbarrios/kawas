<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $this->middleware('auth');
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('admin.users.userlist')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.usercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        if ( Session::token() !== Input::get( '_token' ) ) {
            \Session::flash('flash_notification','Error.');       
            return redirect('admin/usuarios/create');
        }

        $user = new User($request->all());
        $user->password = bcrypt($request->password); 
        $user->save();
        \Session::flash('message', 'Usuario creado');
        return Redirect::to('admin/usuarios/create');
    
        //fespinoza1702@gma..
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
        
        $user = User::find($id);
        return view('admin.users.useredit')->with('user', $user);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        if ( Session::token() !== Input::get( '_token' ) ) {
            \Session::flash('flash_notification','Error.');       
            return redirect('admin/usuarios/create');
        }

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); 
        $user->save();

        \Session::flash('message', 'Usuario Editado');
        return Redirect::to('admin/usuarios/'.$user->id.'/edit');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $delete = User::findOrFail($id);
        if(Auth::user()->email != $delete->email){
            $delete->delete();
            \Session::flash('message', 'Usuario Eliminado');
            return Redirect::to('admin/usuarios');
        }
        
        \Session::flash('message', 'No es posible Eliminar');
        return Redirect::to('admin/usuarios');
    }
}
