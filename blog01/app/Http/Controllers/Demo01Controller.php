<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class Demo01Controller extends Controller{
    public function ThemDuLieu(){
        echo __METHOD__;
        //khi thêm dữ liệu thì cần mảng dữ liệu, key của mảng là tên các cột trong bảng
        //vd:
        $dataInsert = ['name'=>'Bài viết giới thiệu', 'des'=>'Mô tả giới thiệu'];
            // insert không lấy ID
//        DB::table('bang_demo')->insert($dataInsert);
        // insert có lấy ID
        $id_moi = DB::table('bang_demo')->insertGetId($dataInsert);
        echo '<br>ID mới thêm: ' . $id_moi;

    }

    public function BangDuLieuDemo(){
        $dataView = [];
        $bang = DB::table('bang_demo') -> get();
        // lấy danh sách bài viết với điều kiện id >=2
        $query = DB::table('bang_demo')
                ->where('id','>=',2)
                ->orderBy('id','desc');
        // in câu lệnh SQL ra màn hình:
        echo '<br>'. $query->toSql();

        $bang =  $query->get();



//        echo '<pre>';
//        foreach ($bang as $objRow){
//            print_r($objRow);
//        }








        $dataView['ds'] = $bang;
        return view('demo01.bang-demo', $dataView);
    }


    public function  add(){
        echo "<br> Gọi hàm: " . __METHOD__;

        return view('demo01.add');
    }

    public function  edit($iduser){
        $dataView = [];
        echo "<br> Gọi hàm: " . __METHOD__;

        $hoTen = '<b>Nguyen Van A</b>';
        // dùng biến iduser để làm việc
        $dataView ['ten'] = $hoTen;
        $dataView ['id'] = $iduser;

        return view('demo01.edit',$dataView);

//        return view('demo01.edit',['ten'=>$hoTen]);
    }

}
