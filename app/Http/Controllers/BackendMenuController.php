<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Catmenu;

class BackendMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function datatables()
    {
        return datatables ( Menu::all())->toJson();
    }


     public function index(Request $request)
    {
        $catmenu = Catmenu::all();
        $menu = Menu::with(['catmenu'])->get();
        // console.log($menu);
        if($request->ajax()){
            return datatables()->of($menu)
            ->addcolumn('action',function($data){
                $button = '<a href="javascript:void(0)" data-toggle="tootip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';
                return $button;
            })

            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('backend.menu.home',compact('menu','catmenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;

        $post   =   Menu::updateOrCreate(['id' => $id],
                    [
                        'name' => $request->name,
                        'category_menu' => $request->category_menu,
                        'link' => $request->link,
                    ]);

        return response()->json($post);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Menu::with(['catmenu'])->where($where)->first();

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Menu::where('id',$id)->delete();

        return response()->json($post);
    }
}
