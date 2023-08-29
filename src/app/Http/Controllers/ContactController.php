<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(Request $request) {
        if($request->input('back') == 'back') {
            return redirect('/')->withInput();
        }

        //名前データの結合：implode関数で配列データを文字列にして結合
        $firstname = implode($request->only(['firstname']));
        $lastname = implode($request->only(['lastname']));
        $fullname = $firstname . '　' . $lastname;

        $contact = $request->all();
        // 連想配列にキー名を指定してデータ追加
        $contact['fullname'] = $fullname;

        Contact::create($contact);
        $request->session()->forget('posts');

        return view('thanks');
    }

    public function management() {
        $contacts = Contact::Paginate(10);
        return view('management', compact('contacts'));
    }

    public function destroy(Request $request) {
        Contact::find($request->id)->delete();
        return redirect('/contacts/management');
    }

    public function search(Request $request) {
        if($request->input('reset') == 'reset') {
            return redirect('/contacts/management');
        }
        $from = $request->from;
        $until = $request->until;

        $contacts = Contact::NameSearch($request->name_word)->EmailSearch($request->email_word)->GenderSearch($request->gender)->DateSearch($from, $until)->paginate(10);

        return view('management', compact('contacts'));
    }

}
