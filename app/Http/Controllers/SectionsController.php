<?php

namespace App\Http\Controllers;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function index(Request $request){ //QueryString(enviar peticion en ? de la url)

        if(!empty($request->records_per_page)){
            $request->records_per_page = $request->records_per_page <= env('PAGINATION_MAX_SIZE') ? $request->records_per_page : env('PAGINATION_MAX_SIZE');
        } else {
            $request->records_per_page = env('PAGINATION_DEFAULT_SIZE');
        }

        $sections = Section::where('name', 'LIKE', "%$request->filter%") -> paginate( $request->records_per_page);

        return view('sections/index', ['sections' => $sections, 'data' => $request]);
    } 
}
