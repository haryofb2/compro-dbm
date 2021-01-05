<?php

namespace App\Http\Controllers;

use App\Info;
// use App\Divition;
// use App\Position;
use App\Cabang;

use Illuminate\Http\Request;

class BackendInfoController extends Controller
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
        return datatables ( Info::all())->toJson();
    }


     public function index(Request $request)
    {
        // $divition = Divition::all();
        // $position = Position::all();
        $cabang = Cabang::all();
        if(!empty($request->from_date))
        {
            //Jika tanggal awal(from_date) hingga tanggal akhir(to_date) adalah sama maka
            if($request->from_date === $request->to_date){
                //kita filter tanggalnya sesuai dengan request from_date
                $info = Info::whereDate('created_at','=', $request->from_date)->get();
            }
            else{
                //kita filter dari tanggal awal ke akhir
                $info = Info::whereBetween('created_at', array($request->from_date, $request->to_date))->get();
            }
        }
        //load data default
        else
        {
            $info = Info::with(['cabang'])->get();
            // var_dump($category);
        }

        if($request->ajax()){
            return datatables()->of($info)
            ->addcolumn('action',function($data){
                $button = '<a href="javascript:void(0)" data-toggle="tootip"  data-id="'.$data->id.'" data-original-title="Edit"
                          class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i> Delete</button>';
                return $button;
            })
            ->addColumn('image', function ($image) {
                $url=asset("frontend/img/upload/info/$image->image");
                return '<img src='.$url.' border="0" width="40" class="img-rounded" align="center" />';
            })
            // ->addcolumn('image','image')
            ->rawColumns(['action','image'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('backend.info.home',compact('info','cabang'));

        // return view('backend.Info.home',compact('Info','divition','position','cabang'));
        // return json_encode($Info, JSON_PRETTY_PRINT);
        // return $Info;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

        $id = $request->id;

        $details = ['name' => $request->name, 'cabang_id' => $request->cabang_id, 'description' => $request->description];

        if ($files = $request->file('image')) {

            $profileImage =  date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move(public_path('frontend/img/upload/info/'), $profileImage);
             //insert new file
          //    $destinationPath = '../frontend/image/upload/event'; // upload path
          //    $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
          //    $files->move($destinationPath, $profileImage);
             $details['image'] = $profileImage;
          }

        $post   =   Info::updateOrCreate(['id' => $id], $details);

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
        $post  = Info::with(['cabang'])->where($where)->first();
        // console.log($post);
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
        $post = Info::where('id',$id)->delete();

        return response()->json($post);
    }
}
