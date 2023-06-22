<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactsSendmail;

class ContactsController extends Controller
{
    public function index()
    {
        // 入力ページを表示
        return view('inquiry');
    }

    public function confirm(Request $request)
    {
        // バリデーションルールを定義
        // 引っかかるとエラーを起こしてくれる
        $request->validate([
        'lastName' => 'required|max:20|string',
        'firstName' => 'required|max:20|string',
        'lastNameKana' => 'required|max:20|string',
        'firstNameKana' => 'required|max:20|string',
        'email' => 'required|email',
        'content' => 'required|max:600|string',
        ]);

        // フォームからの入力値を全て取得
        $inputs = $request->all();

        // 確認ページに表示
        // 入力値を引数に渡す
        return view('contact_confirm', [
        'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        // バリデーション
        $request->validate([
        'lastName' => 'required|max:20|string',
        'firstName' => 'required|max:20|string',
        'lastNameKana' => 'required|max:20|string',
        'firstNameKana' => 'required|max:20|string',
        'email' => 'required|email',
        'content' => 'required|max:600|string',
    ]);

        // actionの値を取得
        $action = $request->input('action');

        // action以外のinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){

        // 戻るボタンの場合リダイレクト処理
            return redirect()
            ->route('inquiry_post')
            ->withInput($inputs);
            
        } else {
            // 送信ボタンの場合、送信処理

            // ユーザにメールを送信
            \Mail::to($inputs['email'])->send(new ContactsSendmail($inputs));
            // 自分にメールを送信
            \Mail::to('younghiromu112010ver2@gmail.com')->send(new ContactsSendmail($inputs));

            // 二重送信対策のためトークンを再発行
            $request->session()->regenerateToken();

            // 送信完了ページのviewを表示
            return view('contact_thanks');

        }
    }

}
