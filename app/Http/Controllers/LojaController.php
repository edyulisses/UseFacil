<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Store;


class LojaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$stores = $store->where('user_id', auth()->store()->id)->get();
        //$stores = $store->all();

        return view('admin.loja.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */    
    public function storeNameExist(Request $request, Store $store)
    {

        // RECEBE A REQUEST DO FRONTEND
        $nomeloja = $request->input('nomeloja');
        // PEGA A ID DO USUÁRIO
        $user_id  = auth()->user()->id;
        // CHECKA SE O NOME DA LOJA EXISTE
        $stores   = $store->where('store_name', $nomeloja)->count();

        if($stores>0){
            // EXISTE NOME
            if($request->ajax()){
                return response()->json([
                    'status'   => '1',
                    'user_id'  => $user_id,
                    'nomeloja' => $nomeloja
                ]);
            }
        }else{
            // NÃO EXISTE CADASTRAR STORE E USER_STORE
            if($request->ajax()){

                return response()->json([
                    'status'   => '0',
                    'user_id'  => $user_id,
                    'nomeloja' => $nomeloja
                ]);
            }
        }
    }
    
}
