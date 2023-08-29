<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $posts;

    protected $rules = [
        'posts.firstname' => 'required|string|max:255',
        'posts.lastname' => 'required|string|max:255',
        'posts.email' => 'required|string|email|max:255',
        'posts.postcode' => 'required|string|min:8|max:8',
        'posts.address' => 'required|string|max:255',
        'posts.building_name' => 'string|max:255',
        'posts.opinion' => 'required|string|max:120',
    ];

    protected $messages = [
        'posts.firstname.required' => '名前を入力してください',
        'posts.firstname.string' => '名前を文字列で入力してください',
        'posts.firstname.max' => '名前を255文字以下で入力してください',
        'posts.lastname.required' => '名前を入力してください',
        'posts.lastname.string' => '名前を文字列で入力してください',
        'posts.lastname.max' => '名前を255文字以下で入力してください',
        'posts.email.required' => 'メールアドレスを入力してください',
        'posts.email.string' => 'メールアドレスを文字列で入力してください',
        'posts.email.email' => '有効なメールアドレス形式で入力してください',
        'posts.email.max' => 'メールアドレスを255文字以下で入力してください',
        'posts.postcode.required' => '郵便番号を入力してください',
        'posts.postcode.string' => '郵便番号をハイフンを加えた8文字で入力してください',
        'posts.postcode.min' => '郵便番号をハイフンを加えた8文字で入力してください',
        'posts.postcode.max' => '郵便番号をハイフンを加えた8文字で入力してください',
        'posts.address.required' => '住所を入力してください',
        'posts.address.string' => '住所を文字列で入力してください',
        'posts.address.max' => '住所を255文字以下で入力してください',
        'posts.building_name.string' => '建物名を文字列で入力してください',
        'posts.building_name.max' => '建物名を255文字以下で入力してください',
        'posts.opinion.required' => 'ご意見を入力してください',
        'posts.opinion.text' => 'ご意見を文字列で入力してください',
        'posts.opinion.max' => 'ご意見を120文字以下で入力してください',
    ];

        public function mount()
    {
        //内容確認画面で修正ボタンを押して入力画面に戻ってきたときのためにセッションの入力値を取得
        $this->posts = session()->get('posts');
        if(session('posts') == null) {
            $this->posts['gender'] = 1;
        }
    }

    public function render()
    {
        return view('livewire.contact-form')->extends('index');   //extendsでレイアウトファイルを継承
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function confirm()
    {
        $this->validate();

        session()->put('posts', $this->posts);
        //複数のデータをセッションに保存する時
        // session()->put(['fullname' => $fullname , 'posts' => $this->posts]);

        return redirect()->route('confirm');
    }
}
