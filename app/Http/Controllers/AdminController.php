<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Ayarlar;

class AdminController extends Controller {

    public function get_index() {
        return view('backend.index');
    }

    public function get_ayarlar() {
        return view('backend.ayarlar');
    }

    public function post_ayarlar(Request $request) {

        try {
            unset($request['_token']);
            $count = Ayarlar::count();
            if ($count > 0) {
                Ayarlar::where('id', 1)->update($request->all());
            } else {
                Ayarlar::create($request->all());
            }
            return response(['durum' => 'success', 'baslik' => 'Başarılı', 'icerik' => 'Başarılı bir şekilde kaydedildi.']);
        } catch (Exception $exc) {
            return response(['durum' => 'error', 'baslik' => 'Hatalı', 'icerik' => 'Kayıt yapılamadı.']);
        }
    }
}
