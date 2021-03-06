<?php

namespace App\Http\Controllers;

use App\Partner;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use Redirect,Response;
use File;
use PDF;

// use App\Divition;
// use App\Position;
// use App\Cabang;
// use File;
// use Redirect,Response,DB;


class BackendPartnerController extends Controller
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
        return datatables ( Partner::all())->toJson();
    }


     public function index(Request $request)
    {
        // $divition = Divition::all();
        // $position = Position::all();
        // $cabang = Cabang::all();
        if(!empty($request->from_date))
        {
            //Jika tanggal awal(from_date) hingga tanggal akhir(to_date) adalah sama maka
            if($request->from_date === $request->to_date){
                //kita filter tanggalnya sesuai dengan request from_date
                $partner = Partner::whereDate('date','=', $request->from_date)->get();
            }
            else{
                //kita filter dari tanggal awal ke akhir
                $partner = Partner::whereBetween('date', array($request->from_date, $request->to_date))->get();
            }
        }
        //load data default
        else
        {
        $partner = Partner::all();
        // var_dump($category);
        }
        if($request->ajax()){
            return datatables()->of($partner)
            ->addcolumn('action',function($data){
                $button = '<a href="javascript:void(0)" data-toggle="tootip"  data-id="'.$data->id.'" data-original-title="Edit"
                          class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i> Delete</button>';
                return $button;
            })
            ->addColumn('image', function ($image) {
                $url=asset("frontend/img/upload/partner/$image->image");
                return '<img src='.$url.' border="0" width="40" class="img-rounded" align="center" />';
            })
            // ->addcolumn('image','image')
            ->rawColumns(['action','image'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('backend.partner.home',compact('partner'));

        // return view('backend.Partner.home',compact('Partner','divition','position','cabang'));
        // return json_encode($Partner, JSON_PRETTY_PRINT);
        // return $Partner;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // $error_array = array();
        // $success_output = '';

        // if ($request->button_action == "insert") {

        //     try {
                // $validation = Validator::make($request->all(), [
                //     'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                // ]);
        //         if ($validation->passes()) {
        //             $image = $request->file('file');
        //             $new_name = rand() . '.' . $image->getClientOriginalExtension();
        //             $image->move(public_path('frontend/img/upload/'), $new_name);
        //             $student = new Partner([
        //                 'name' => $request->name,
        //                 'description' => $request->description,
        //                 'date' => $request->date,
        //                 'image' => $new_name,

        //             ]);
        //             $student->save();
        //             $status = 'success';
        //             $success_output = 'Product List successfully added!';

        //         } else {
        //             $status = 'failed';
        //             $success_output = $validation->errors()->all();

        //         }

        //     } catch (\Exception $e) {
        //         $status = 'error';
        //         $success_output = $e->getMessage();
        //     }

        // } else if ($request->button_action == 'edit') {
        //     try {
        //         $validation = Validator::make($request->all(), [
        //             'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //         ]);
        //         if ($validation->passes()) {

        //             // if ($validation->passes()) {
        //             $image = $request->file('file');
        //             $new_name = rand() . '.' . $image->getClientOriginalExtension();
        //             $image->move(public_path('frontend/img/upload/'), $new_name);
        //             $student = Partner::where('id', $request->id)->first();
        //             $student->name = $request->name;
        //             $student->date = $request->date;
        //             $student->description = $request->description;
        //             $student->image = $new_name;

        //             $student->save();
        //             $status = 'success';
        //             $success_output = 'Product successfully Update!';
        //             // } else {
        //             //     $status = 'failed';
        //             //     $success_output = $validation->errors()->all();

        //             // }
        //         } else {
        //             $student = Partner::where('id', $request->id)->first();
        //             $student->name = $request->name;
        //             $student->date = $request->date;
        //             $student->description = $request->description;

        //             $student->save();
        //             $status = 'success';
        //             $success_output = 'Product successfully Update!';
        //         }

        //     } catch (\Exception $e) {
        //         $status = 'error';
        //         $success_output = $e->getMessage();
        //     }

        // }
        // $output = array(
        //     'status' => $status,
        //     'msg' => $success_output,
        // );
        // echo json_encode($output);

        // $request->validate([
        //     'image' => 'mimes:png,jpg,jpeg,svg,gif'
        // ]);

        // $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        // $request->image->move(public_path('../frontend/image/upload/Partner'), $imgName);


        // $id = $request->id;
        //     // dd()

        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

        $id = $request->id;

        $details = ['name' => $request->name];

        if ($files = $request->file('image')) {

           //delete old file
          // \File::delete('../frontend/image/upload/Partner'.$request->hidden_image);
         // $image = $request->file('file');
          $profileImage =  date('YmdHis') . "." . $files->getClientOriginalExtension();
          $files->move(public_path('frontend/img/upload/partner/'), $profileImage);
           //insert new file
        //    $destinationPath = '../frontend/image/upload/Partner'; // upload path
        //    $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //    $files->move($destinationPath, $profileImage);
           $details['image'] = $profileImage;
        }
        $post   =   Partner::updateOrCreate(['id' => $id], $details
                    // [
                    //     'name' => $request->name,
                    //     'description' => $request->description,
                    //     'date' => $request->date,
                    //     'image' => $imgName,
                    // ]
                );

        return response()->json($post);
    }

    // $validator = Validator::make($request->all(), [
    //     'name' => 'required',
    //     'description' => 'required',
    //     'date' => 'required',
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //   ]);

    //   if ($validator->passes())
    //   {
    //     $data = $request->all();
    //     $data['image'] = time().'.'.$request->image->getClientOriginalExtension();
    //     $request->image->move(public_path('images'), $data['image']);
    //     Partner::create($data);
    //     return response()->json(['success'=>'Data is successfully added']);
    //   }
    //   return response()->json(['error'=>$validator->errors()->all()]);
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Partner::where($where)->first();

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
        $post = Partner::where('id',$id)->delete();

        return response()->json($post);
    }
}