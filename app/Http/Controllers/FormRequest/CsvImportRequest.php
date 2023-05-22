<?php

namespace App\Http\Backend;

use App\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\Organization;

class CsvImportRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'csv_file' => 'required|file'
        ];
    }
}