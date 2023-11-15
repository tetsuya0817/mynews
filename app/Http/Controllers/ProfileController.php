<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 追記
use App\Models\Profile;

class ProfileController extends Controller
{
   public function index(Request $request)
    {
        $posts = Profile::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('profile.index', ['headline' => $headline, 'posts' => $posts]);
    }
}
