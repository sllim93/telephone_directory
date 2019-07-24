<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Category;
use App\Entity;
use App\EntityCategory;


class DirectoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $value = $request->value;
        $where = $request->where;
        // search box 1
        $type = $request->type;

        $searches = [
            "entity.name" => 'Entity Name',
        ];
        $types = Category::where('status', 1)->pluck('title', 'id');

        $query = EntityCategory::select('entity.*', 'category.name')
                                ->join('entity', 'entity.id', '=', 'entity_category.id')
                                ->join('category', 'category.id', '=', 'entity_category.id');
                            
        if ($type){
            $query->where('category.id', $type);
        }                     
        if($value){
            switch($where){
            	default:
		        	$query->where($where, 'LIKE', '%'.$value.'%');
                break;
            }
        }

        $directories = $query->orderBy('category.title', 'ASC')->orderBy('entity.name', 'ASC')->paginate(20)->appends(['where' => $where, 'value' => $value, 'type' => $type]);

        return view('directory.index', compact('searches', 'types', 'where', 'value', 'directories'));
    }
}
