<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InquiryController extends Controller
{
    public function index()
    {
        return view('inquiry.index');
    }

    public function confirm(Request $request)
    {
//        // TODO バリデーション機能は後で実装する
//        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
//        $validate_rule = [
//            'name' => 'required',
//            'email' => 'required|email',
//            'tel' => 'nullable|numeric',
//            'gender'  => 'required',
//            'image'  => 'nullable',
//            'context'  => 'required',
//        ];
//        $this->validate($request, $validate_rule);

        $inputs = $request->all();

        return view('inquiry.confirm', ['inputs' => $inputs]);
    }

    public function send(Request $request)
    {
        // TODO バリデーション機能は後で実装する
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $validate_rule = [
            'name' => 'required',
            'email' => 'required|email',
            'tel' => 'nullable|numeric',
            'gender'  => 'required',
            'image'  => 'nullable',
            'context'  => 'required',
        ];
        $this->validate($request, $validate_rule);


//        TODO 確認済みのデータをDBに挿入する処理を記載する

        $inputs = $request->all();

        $action = $request->input('action');

        if ($action == 'back') {
//            戻るボタンがクリックされた場合
            return redirect()
                ->route('inquiry.index')
                ->withInput($inputs);
        } else {
//            送信ボタンがクリックされた場合
            return view('inquiry.send', ['inputs' => $inputs]);
        }


    }
}
