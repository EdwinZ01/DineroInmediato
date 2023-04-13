<?php

namespace App\Http\Controllers\backoffices;

use App\Http\Controllers\Controller;
use App\Models\Amortizacion;
use App\Models\Credito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TablaAmortizacion extends Controller
{
    public function tablaAmortizacion($user){
        $credito  = Credito::where('user_id','=',$user)->value('num_credito');
        $tabla = Amortizacion::where('num_credito','=',$credito)->paginate(5);
        return view('backoffices.clientes.tablaAmortizacion', ['tabla'=>$tabla,'num_credito'=>$credito,'paginacion'=>1]);
    }

    public function busqueda(Request $request){
        $validate = $request->validate([
            'num_credito' => 'required',
            'termino' => 'required'
        ]);

        $termino = $request->termino;
        $num_credito = $request->num_credito;
        $consulta1 = collect('');
        $consulta2 = collect('');
        $consulta3 = collect('');
        $consulta4 = collect('');
        $consulta5 = collect('');
        $consulta6 = collect('');
        $consulta7 = collect('');

        $consulta1 = Amortizacion::where('num_credito','=', $num_credito)
        ->where('numero_pagos','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta2 = Amortizacion::where('num_credito','=', $num_credito)
        ->where('interes_anual','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta3 = Amortizacion::where('num_credito','=', $num_credito)->
        where('pag_capital','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta4 = Amortizacion::where('num_credito','=', $num_credito)->
        where('interes_ordinarios','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta5 = Amortizacion::where('num_credito','=', $num_credito)->
        where('iva_io','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta6 = Amortizacion::where('num_credito','=', $num_credito)->
        where('comisiones','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta7 = Amortizacion::where('num_credito','=', $num_credito)->
        where('pago_total_men','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $tabla = $consulta1->concat($consulta2)->concat($consulta3)->concat($consulta4)->concat($consulta5)->
        concat($consulta6)->concat($consulta7);
        $tabla1 = $tabla->unique('id_amortizacion');
        return view('backoffices.clientes.tablaAmortizacion',['tabla'=>$tabla1,'num_credito'=>$num_credito,'paginacion'=>0]);
    }

    public function view($t){
        $tabla = Amortizacion::where('id_amortizacion','=',$t)->first();
        return view('backoffices.clientes.edit-amortizacion', compact('tabla'));
    }

    public function update(Request $request,$id){
        
        $validate = $request->validate([
            'num_credito' => 'required|min:6|numeric',
            'numero_pagos' =>'required|regex:[^[:punct:$]+[0-9]+([,][0-9]+)?$]',
            'prox_pago' => 'required|date',
            'interes_anual' => 'required|regex:[^[:punct:$]+[0-9]+([,][0-9]+)?$]',
            'pag_capital' => 'required|regex:[^[:punct:$]+[0-9]+([,][0-9]+)?$]',
            'interes_ordinarios' => 'required|regex:[^[:punct:$]+[0-9]+([,][0-9]+)?$]',
            'iva_io' => 'required|regex:[^[:punct:$]+[0-9]+([,][0-9]+)?$]',
            'comisiones' => 'required|regex:[^[:punct:$]+[0-9]+([,][0-9]+)?$]',
            'pago_total_men' => 'required|regex:[^[:punct:$]+[0-9]+([,][0-9]+)?$]'
        ]);

        if(Amortizacion::where('id_amortizacion','=',$id)->exists()){
            $num_cred = Amortizacion::where('id_amortizacion','=',$id)->value('num_credito');
            if($request->num_credito==$num_cred){
                Amortizacion::where('id_amortizacion','=',$id)->update([
                    'num_credito' => $request->num_credito,
                    'numero_pagos' => $request->numero_pagos,
                    'prox_pago' => $request->prox_pago,
                    'interes_anual' => $request->interes_anual,
                    'pag_capital' => $request->pag_capital,
                    'interes_ordinarios' => $request->interes_ordinarios,
                    'iva_io' => $request->iva_io,
                    'comisiones' => $request->comisiones,
                    'pago_total_men' => $request->pago_total_men
                ]);
                session()->flash('success');
                $i = Credito::where('num_credito','=',$request->num_credito)->value('user_id');
                return redirect()->route('tablaAmortizacion',$i);
            }else{
                session()->flash('error');
                return back();
            }
        }else{
            session()->flash('error');
            return back();
        }
    }
}
