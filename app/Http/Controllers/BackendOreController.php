<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ore;

class BackendOreController extends Controller
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
        return datatables ( Ore::all())->toJson();
    }


     public function index(Request $request)
    {
        if(!empty($request->from_date))
        {
            //Jika tanggal awal(from_date) hingga tanggal akhir(to_date) adalah sama maka
            if($request->from_date === $request->to_date){
                //kita filter tanggalnya sesuai dengan request from_date
                $event = Ore::whereDate('date','=', $request->from_date)->get();
            }
            else{
                //kita filter dari tanggal awal ke akhir
                $event = Ore::whereBetween('date', array($request->from_date, $request->to_date))->get();
            }
        }
        //load data default
        else

        $divition = Ore::all();
        // var_dump($category);
        if($request->ajax()){
            return datatables()->of($divition)
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

        return view('backend.ore.home',compact('divition'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->date;

        $post   =   Ore::updateOrCreate(['date' => $date],
                    [
                        'date' => $request->date,
                    ]);

        return response()->json($post);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($date)
    {
        $where = array('date' => $date);
        $post  = Ore::where($where)->first();

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($date)
    {
        $post = Ore::where('date',$date)->delete();

        return response()->json($post);
    }
}
