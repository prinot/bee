<?php

namespace App\Exports;

use App\Envio;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EnvioExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'Nombres',
            'Teléfono',
            'Correo electronico',
        ];
    }
    public function collection()
    {
         $envios = DB::table('Envios')->select('id','name','phone', 'email')->get();
         return $envios;
        
    }
}