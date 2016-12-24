<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categorias;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;

use Laracasts\Flash\Flash;

use App\Http\Requests\CategoriesRequest;
class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorias::orderBy('id','ASC')->paginate(5);
        return view('admin.categorias.categoriaslist')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'admin.categorias.categoriascreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRequest $request)
    {
        if ( Session::token() !== Input::get( '_token' ) ) {
            \Session::flash('flash_notification','Error.');       
            return redirect('admin/categories/');
        }
        $categorias = new Categorias($request->all());
        $categorias->save();
        \Session::flash('message', 'Categoría creada');
        return Redirect::to('admin/categories/');

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
        $categoria = Categorias::find($id);
        return view('admin.categorias.categoriasedit')->with('categoria', $categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRequest $request, $id)
    {
        if ( Session::token() !== Input::get( '_token' ) ) {
            \Session::flash('flash_notification','Error.');       
            return redirect('/categories/');
        }
        $categoria = Categorias::find($id);
        $categoria->categoria = $request->categoria;
        $categoria->save();
        \Session::flash('message', 'Categoría Editada');
        return Redirect::to('admin/categories/'.$categoria->id.'/edit');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Categorias::findOrFail($id);
        $delete->delete();
        \Session::flash('error', 'Categoría eliminada');
        return Redirect::to('admin/categories');
    }
}
