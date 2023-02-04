<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App;

class WordController extends Controller
{
    /**
     * return view
     */
    public function index()
    {
        return view('home');
    }

    /**
     * return word
     */
    public function word()
    {
        // レコード抽選
        $id = mt_rand(1, 100);
        $rand_word = App\Word::find($id);

        // レコード抽選に当選した名言を取ってくる
        $word = $rand_word->word;

        // レコード抽選に当選した名言の偉人の名前を取ってくる
        $person_name = $rand_word->person->name;

        //その人の画像を取ってくる
        $person_pic = base64_encode(file_get_contents($rand_word->person->picture));

        return view('word', compact('word', 'person_name', 'person_pic'));
    }
}
