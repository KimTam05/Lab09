<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KNTSinhvien;

class KNTSinhvienController extends Controller
{
    public function index(){
        $KNTSinhvien = KNTSinhvien::all();
        return view("KNTSinhvien.KNTindex",["KNTSinhvien" => $KNTSinhvien]);
    }
    public function create(){
        $KNTMaKH = DB::table('kntkhoa')->get();
        return view("KNTSinhvien.KNTCreate", ["KNTMaKH"=> $KNTMaKH]);
    }
    public function createSubmit(Request $request){
        $KNTSinhvien = new KNTSinhvien();
        $KNTSinhvien->KNTMaSV = $request->KNTMaSV;
        $KNTSinhvien->KNTHoSV = $request->KNTHoSV;
        $KNTSinhvien->KNTTenSV = $request->KNTTenSV;
        $KNTSinhvien->KNTNgaysinh = $request->KNTNgaysinh;
        $KNTSinhvien->KNTNoisinh = $request->KNTNoisinh;
        $KNTSinhvien->KNTMaKH = $request->KNTMaKH;
        $KNTSinhvien->KNTHocbong = $request->KNTHocbong;
        $KNTSinhvien->KNTDiemTB = $request->KNTDiemTB;
        $KNTSinhvien->KNTPhai = $request->KNTPhai == '1' ? 1:0;

        $KNTSinhvien->save();
        return redirect("/sinhvien")->with("KNTSinhvien_success","Đã thêm mới sinh viên!");
    }
    public function detail($id){
        $KNTSinhvien = KNTSinhvien::where("KNTMaSV", $id)->first();
        return view("KNTSinhvien.KNTDetail", ['KNTSinhvien'=>$KNTSinhvien]);
    }
    public function edit($id){
        $KNTSinhvien = KNTSinhvien::selectRaw("KNTMaSV, KNTHoSV, KNTTenSV, KNTPhai, DATE_FORMAT(KNTNgaysinh, '%Y-%m-%d') as KNTNgaysinh, KNTNoisinh, KNTMaKH, KNTHocbong, KNTDiemTB")->where('KNTMaSV', $id)->first();
        $KNTMaKH = DB::table('kntkhoa')->get();
        return view('KNTSinhvien.KNTEdit', ['KNTKhoa'=>$KNTMaKH,'KNTSinhvien'=>$KNTSinhvien]);
    }

    public function editSubmit($id, Request $request){
        $KNTSinhvien = KNTSinhvien::selectRaw("KNTMaSV, KNTHoSV, KNTTenSV, KNTPhai, DATE_FORMAT(KNTNgaysinh, '%Y-%m-%d') as KNTNgaysinh, 'KNTNoisinh, KNTMaKH, KNTHocbong, KNTDiemTB")->where('KNTMaSV', $id)->first();

        $KNTSinhvien->KNTMaSV = $request->KNTMaSV;
        $KNTSinhvien->KNTHoSV = $request->KNTHoSV;
        $KNTSinhvien->KNTTenSV = $request->KNTTenSV;
        $KNTSinhvien->KNTNgaysinh = $request->KNTNgaysinh;
        $KNTSinhvien->KNTNoisinh = $request->KNTNoisinh;
        $KNTSinhvien->KNTMaKH = $request->KNTMaKH;
        $KNTSinhvien->KNTHocbong = $request->KNTHocbong;
        $KNTSinhvien->KNTDiemTB = $request->KNTDiemTB;
        $KNTSinhvien->KNTPhai = $request->KNTPhai == '1' ? 1:0;

        $KNTSinhvien->save();
        return redirect("/sinhvien")->with("KNTSinhvien_success","Đã sửa thông tin sinh viên!");
    }
    public function delete($id){
        KNTSinhvien::where('KNTMaSV', $id)->delete();
        return redirect('/sinhvien')->with('KNTSinhvien_deleted_log','Đã xóa sinh viên!');
    }
}
