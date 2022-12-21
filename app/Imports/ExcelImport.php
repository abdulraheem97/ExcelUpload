<?php

namespace App\Imports;

use App\Models\Column;
use App\Models\columnValues;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelImport implements ToCollection
{

    public $file_id;
    public $colums;

    public function __construct($file_id)
    {
        $this->file_id = $file_id;
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $main_object = [];
        foreach ($collection as $key=>$data){
            if ($key == 0){
                foreach ($data as $key=>$dt){
                    $column = new Column();
                    $column->name =  $dt;
                    $column->file_id =  $this->file_id;
                    $column->save();
                    array_push($main_object,$column->id);
                }
            }else{
                foreach ($data as $key=>$dt1){
                    $column_values = new columnValues();
                    $column_values->column_id = $main_object[$key];
                    $column_values->name = $dt1;
                    $column_values->save();
                }
            }
        }
    }
}
