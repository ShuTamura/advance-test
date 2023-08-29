<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Confirm extends Component
{
    public $posts;

    public function render()
    {
        return view('livewire.confirm')->extends('confirm');
    }

    public function mount()
    {
        //保存しておいた入力値を取得を取得
        $this->posts = session()->get('posts');
        //郵便番号を半角に自動変換
        $this->posts['postcode'] = mb_convert_kana($this->posts['postcode'] , "a");
    }
}
