@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management.css') }}">
@endsection

@section('title')
<h1 class="header__title">管理システム</h1>
@endsection

@section('content')
<div class="management__content">
    <div class="search">
        <form action="/contacts/search" class="search-form" method="get">
            <div class="form__item">
                <div class="form__item-name">
                    <label for="id_name" class="form__label--left">お名前</label>
                    <input id="id_name" type="text" class="form__input--text" name="name_word" value="{{ old('name_word') }}">{{ old('name_word') }}
                </div>
                <div class="form__item-gender">
                    <label for="id_gender" class="form__label--gender">性別</label>
                    <div class="form__item-choice">
                        <div class="form__item-choice-gender">
                            <input id="id_all" class="gender-input" type="radio" name="gender" value="" checked>
                            <label for="id_all" class="gender-label">全て</label>
                        </div>
                        <div class="form__item-choice-gender">
                            <input id="id_male" class="gender-input" type="radio" name="gender" value="1" >
                            <label for="id_male" class="gender-label">男性</label>
                        </div>
                        <div class="form__item-choice-gender">
                            <input id="id_female" class="gender-input" type="radio" name="gender" value="2" >
                            <label for="id_female" class="gender-label">女性</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__item">
                <label for="id_date" class="form__label--left">登録日</label>
                <input type="date" class="form__input--date" name="from">
                <span>~</span>
                <input type="date" class="form__input--date" name="until">
            </div>
            <div class="form__item">
                <label for="id_email" class="form__label--left">メールアドレス</label>
                <input id="id_email" type="email" class="form__input--text" name="email_word">
            </div>
            <button type="submit" class="form__search-button transition-button">検索</button>
            <button type="submit" class="form__reset-button reset-button" name="reset" value="reset">リセット</button>
        </form>
    </div>
    {{ $contacts->appends(request()->query())->links() }}
    <div class="management-table">
        <table class="management-table__inner">
            <tr class="table__row">
                <th class="table__header">
                    <span class="table__header-span">ID</span>
                    <span class="table__header-span">お名前</span>
                    <span class="table__header-span">性別</span>
                    <span class="table__header-span">メールアドレス</span>
                    <span class="table__header-span">ご意見</span>
                </th>
            </tr>
            @foreach($contacts as $contact)
            <tr class="table__row">
                <td class="table__item">
                    <form action="/contacts/delete" class="delete-form" method="post">
                        @method('DELETE')
                        @csrf
                        <div class="delete-form__item">
                            <input type="hidden" class="delete-form__hidden" name="id" value="{{ $contact['id'] }}">
                            <p class="delete-form__item-input">{{ $contact['id'] }}</p>
                        </div>
                        <div class="delete-form__item">
                            <p class="delete-form__item-input">{{ $contact['fullname'] }}</p>
                        </div>
                        <div class="delete-form__item">
                            @if($contact['gender'] === 1)
                                <p class="delete-form__item-input">男性</p>
                            @else
                                <p class="delete-form__item-input">女性</p>
                            @endif
                        </div>
                        <div class="delete-form__item">
                            <p class="delete-form__item-input">{{ $contact['email'] }}</p>
                        </div>
                        <div class="delete-form__item">
                            <p class="delete-form__item-textarea">{{ $contact['opinion'] }}</p>
                        </div>
                        <div class="delete-form__item">
                            <button type="submit" class="delete-form__button">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection