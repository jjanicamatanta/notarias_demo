<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocumentModel;
use App\Document;
class DocumentController extends Controller
{
    public function index(){
        $documentModel = DocumentModel::findOrFail(1);
        return view('welcome',compact('documentModel'));
    }

    public function store(Request $request){
        if($request->get('person_id')=='-1'){
            Document::create()->persons()->create([
                'names' => $request->get('person_name')
            ]);
        }
        return "El documento se guado correctamente";
        // Codigo de vinculacionen caso de que el cliente ya exista
    }
}
