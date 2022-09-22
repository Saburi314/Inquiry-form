<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function index()
    {
        return view('inquiry.index');
    }

    public function confirm(ValidateRequest $request)
    {
        //フォームの値を取得
        $inputs = $request->all();

        //画像ファイルが存在する場合
        if (isset($inputs['image'])) {
        //画像をストレージ(app/public/images)へ保存し、パスを取得
            $path = $request
                ->file('image')
                ->store('images', 'public');

            return view('inquiry.confirm', ['inputs' => $inputs,
                'path' => $path]);
        }
        return view('inquiry.confirm', ['inputs' => $inputs]);
    }

    public function send(Request $request)
    {
        $inputs = $request->all();
        $action = $request->input('action');

        if ($action == 'back') {
            //戻るボタンがクリックされた場合
            return redirect()
                ->route('inquiry.index')
                ->withInput($inputs);
        } else {
            //送信ボタンがクリックされた場合
            Inquiry::insert([
                'name' => $request->name,
                'email' =>$request->email,
                'tel' =>$request->tel,
                'gender' =>$request->gender,
                'image' =>$request->path,
                'context' =>$request->context,
            ]);

            return view('inquiry.send', ['inputs' => $inputs]);
        }
    }
}
