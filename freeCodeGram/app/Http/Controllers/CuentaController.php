<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{

    protected $cuentas;
    public function __construct(Cuenta $cuentas){
        $this -> cuentas = $cuentas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = $this -> cuentas -> obtenerCuentas();
        return view('cuentas.lista',  ['cuentas' => $cuentas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuentas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuenta = new Cuenta($request->all());
        $cuenta->save();
        return redirect()->action([CuentaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuenta = $this->cuentas->obtenerCuentasPorCodigo($id);
        return view('cuentas.ver', ['cuenta' => $cuenta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuenta = $this->cuentas->obtenerCuentaPorCodigo($id);
        return view('cuenta.editar', ['cuenta' => $cuenta]);
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
        $cuenta = Cuenta::find($id);
        $cuenta->fill($request->all());
        $cuenta->save();
        return redirect()->action([CuentaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuenta = Alumno::find($id);
        $cuenta->delete();
        return *redirect()->action([AlumnoController::class, 'index']);
    }
}
