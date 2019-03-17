<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$cari = $request->cari;

        //$Categories = Category::where('name','like',"%".$cari."%")->paginate();

        //return view('category.index',['Categories' => $Categories]);

        $Categories = Category::all();
        //$Categories = variabel buat menyimpan data

        //return view('<nama view>', compact <nama variable>)
        return view('category.index', compact('Categories'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $Categories = Category::where('name','like',"%".$cari."%")->paginate();

        return view('category.index',['Categories' => $Categories]);
    }

        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('category.create');
    }

    public function create(Request $request)
    {
        DB::table('categories')->insert([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => $request->slug
        ]);
        return redirect('kategori');
    }

    public function hapus($id)
    {
        $Categories = Category::where('category_id',$id)->delete();

        return redirect('kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $Categories=Category::where('category_id',$id)->get();

        return view('category.update',['Categories' => $Categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('categories')->where('category_id',$request->category_id)->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => $request->slug
        ]);
        return redirect('kategori');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
