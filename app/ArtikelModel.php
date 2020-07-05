<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;


class ArtikelModel extends Model
{
    public static function artikel(){
        $artikel = DB::table('tbl_artikel')->get();
        return $artikel;
    }

    public static function save_artikel($data){
        unset($data['_token']);
        $date = Carbon::now();
        $input_judul = $data['judul'];
        $slug = Str::slug($input_judul, '-');
        $users_id = 101;

        $data['slug'] = $slug;
        $data['users_id'] = $users_id;
        $data['created_at'] = $date;
        $data['updated_at'] = $date;
        
        $new_artikel = DB::table('tbl_artikel')->insert($data);
        return $new_artikel;
    }

    public static function detail_artikel($id){
        $artikel = DB::table('tbl_artikel')->where('id', $id)->first();
        return $artikel;
    }

    public static function edit_artikel($id){
        $artikel = DB::table('tbl_artikel')->where('id', $id)->first();
        return $artikel;
    }

    public static function update_artikel($id, $request){
        $date = Carbon::now();
        $input_judul = $request['judul'];
        $slug = Str::slug($input_judul, '-');
        $users_id = 101;

        $artikel = DB::table('tbl_artikel')->where('id', $id)->update(['judul'=>$request['judul'], 'isi'=>$request['isi'], 'slug'=>$slug, 'tag'=>$request['tag'], 'users_id'=>$users_id, 'updated_at'=>$date]);
        return $artikel;
    }

    public static function destroy_artikel($id){
        $artikel = DB::table('tbl_artikel')->where('id', $id)->delete();
        return $artikel;
    }
}
