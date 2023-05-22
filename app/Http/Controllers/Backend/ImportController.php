<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CsvData;
use App\Models\Product;
class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Import()
    {
        return view('Admin.product.import');
    }

    public function parseImport(Request $request)
    {
        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
    
       
    
        $csv_data = array_slice($data, 0, 2);
        return view('Admin.product.import_fields', compact('csv_data', 'csv_data_file'));
    }

    public function processImport(Request $request)
{
    // return $request->csv_data_file_id;
    // return $request;
    $data = Product::find($request->csv_data_file_id);
    $csv_data = json_decode($data->csv_data, true);
    foreach ($csv_data as $row) {
        $contact = new Product();
        foreach (config('app.db_fields') as $index => $field) {
            $contact->$field = $row[$request->fields[$index]];
        }
        $contact->save();
    }

    return view('import_success');
}

   
   
}
