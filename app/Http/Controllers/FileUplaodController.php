<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use App\Models\Column;
use App\Models\File;
use Illuminate\Http\Request;

//use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;

class FileUplaodController extends Controller
{

    public function index(){
        $files = File::all();
        return view('index',compact(['files']));
    }

    public function fileUpload()
    {
        return view('fileupload');
    }

     public function  viewFile($id)
     {
        $file_data = Column::with('columnValues')->where('file_id',$id)->get();

        return view('viewFile',compact(['file_data']));
     }

    public function fileUploadData(Request $request)
    {

       $input  =  $request->all();
//       dd($input);
        if (isset($input['file'])) {
            $fileName  =$input['file']->getClientOriginalName();
            $file = new File();
            $file->name = $input['file']->getClientOriginalName();
            $file->save();
            $path = $input['file']->move(storage_path('app/public/import'), $fileName);
            Excel::import(new ExcelImport($file->id), $path);
        }

        return redirect('/');
    }
}
