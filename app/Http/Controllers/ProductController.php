<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

{

    protected $request;

    public function __construct(Request $request)
    {
        $this -> request = $request;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products=Product::paginate(50);


        return view('admin.pages.products.index',[

            'products' => $products,

        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {

       $data = $request -> only ('name', 'description', 'price');

        Product::create($data);

        return redirect()-> route('produtos.index');


    //     // VALIDAÇÃO DE FORMULARIOS - AULA 6

    //     /*

    //     $request -> validate([
    //         'name' => 'required|min:3|max:255',
    //         'description' => 'nullable|min:3|max:255',
    //         'photo' => 'required|image',
    //     ]);

    //     dd('ok!');
    //     */
    //     dd('ok!');
    // //*****************************************************************************************************



    //     // // dd($request->only(['name', 'description'])); voce escolhe os parametros que serão
    //     // pegos no formulario
    //     // // dd($request->all()); pega todos os arrays
    //     //dd($request->has('name'));
    //     //dd($request->except('name'));

    //     // fazendo upload de arquivos

    //     if ($request->file('photo')->isValid()){
    //         //dd($request->photo->extension()); - informa a extensao do arquivo
    //         //dd($request->photo->getClientOriginalName()); - informa o nome original + a extensao do arquivo
    //         //dd($request->file('photo')->store('produtos')); - armazena em diretorio criado - vide aula 33 em 10:46

    //         // fazendo upload de arquivos dentro do laravel customizando o seu nome.... vide cod abaixo

    //         $nameFile = $request -> name . '.' . $request -> photo -> extension();
    //         dd($request->file('photo')->storeAs('produtos',$nameFile));
    //     }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // return "exibindo o produto de id: {$id}";

        if(!$product = Product::find($id))
            return redirect()->back();


               return view('admin.pages.products.show',[
            'products' => $product
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
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
        dd("editando o produto: {{$id}}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("deletando o produto $id");

        if(!$product = Product::find($id))
            return redirect()->back();
    }
}
