<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    private $clientes;

    public function __construct(Clientes $clientes)
    {
        $this->clientes = $clientes;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clientes = $this->clientes->all();

        // return view('clientes.index', compact('clientes'));
        $clientes = Clientes::all();
        return response()->json($clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $clientes = new Clientes();
        // $clientes->nomeTutor = $request->get('nomeTutor');
        // $clientes->celular = $request->get('celular');
        // $clientes->email = $request->get('email');
        // $clientes->endereco = $request->get('endereco');
        // $clientes->cep = $request->get('cep');
        // $clientes->nomePet = $request->get('nomePet');
        // $clientes->raca = $request->get('raca');
        // $clientes->idade = $request->get('idade');
        // $clientes->sexo = $request->get('sexo');
        // $clientes->castrado = $request->get('castrado');
        // $clientes->dataEntrada = $request->get('dataEntrada');
        // $clientes->dataSaida = $request->get('dataSaida');
        // $clientes->save();
        $this->clientes->create($request->all());
        session()->flash('success', 'O registro foi gravado com sucesso');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $clientes)
    {
        //
    }
}
