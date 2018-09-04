<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Input;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $page = Page::select()
            ->orderBy('id')
            ->get()
            ;
        
        // $page_columns = Schema::getColumnListing('page');
        $page_model = new Page();
        $fillable_columns = $page_model->getFillable();
        foreach ($fillable_columns as $key => $value) {
            $page_columns[$value] = $value;
        }
        
        return view('newspaper.page')
            ->with('page', $page)
            ->with('page_columns', $page_columns)
        ;
    }
    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        $column_name = Input::get('name');
        $column_value = Input::get('value');
        if( Input::has('name') && Input::has('value')) {
            $page = Page::select()
                ->where('id', '=', $id)
                ->update([$column_name => $column_value]);
            return response()->json([ 'code'=>200], 200);
        }
        
        return response()->json([ 'error'=> 400, 'message'=> 'Not enought params' ], 400);
    }
}
