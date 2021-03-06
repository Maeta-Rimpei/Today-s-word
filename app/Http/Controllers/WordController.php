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
        $base = App\Word::find($id);

        // レコード抽選に当選した名言を取ってくる
        $word = $base->word;

        // レコード抽選に当選した名言の偉人の名前を取ってくる
        $person_name = $base->person->name;

        //その人の画像を取ってくる
        $person_pic = $base->person->picture;

        return view('word', compact('word', 'person_name', 'person_pic'));
    }
}
