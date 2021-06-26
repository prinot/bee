<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Barryvdh\DomPDF\Facade as PDF;

use Maatwebsite\Excel\Facades\Excel;

use App\Exports\EnvioExport;


use App\Envio;

class EnviosController extends Controller
{


     /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $name =$request->get('name');
        $phone =$request->get('phone');
        $email =$request->get('email');
       
        

        $envios = Envio::orderBy('id','DESC')
                ->name($name)
                ->phone($phone)
                ->email($email)
                
                
                ->paginate(10);
       //$datos['envios']=Envio::paginate(5);
       //return view('envio',$datos);
      return view('envio', compact('envios'));
    }
   
    public function ExportPdf()
    {

         $envios = Envio::get();
         $pdf = PDF::loadView('pdf.envios', compact('envios'));

         return $pdf->download('envio-list.pdf');
    }


    public function exportExcel()
    {
        return Excel::download(new EnvioExport, 'envio.xlsx');
  
       
     
    }
    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $EnvioMasivo=request()->all();
        $EnvioMasivo=request()->package;
        

        $EnvioMasivo=request()->except('_token');
       
        Envio::insert($EnvioMasivo);
        return redirect('https://api.whatsapp.com/send?phone=51950753677&text=Quiero%20Informaci%C3%B3n%20Sobre%20Servicio%20de%20Dise%C3%B1o%20Web');
      // return response()->json($EnvioMasivo);

     // $url= '';
      //return Redirect::to($url);



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
        //
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
        //
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
