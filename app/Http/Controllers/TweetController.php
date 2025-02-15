// app/Http/Controllers/TweetController.php

<?php
    namespace App\Http\Controllers;

    use App\Models\Tweet;
    use Illuminate\Http\Request;

        class TweetController extends Controller
{
    public function index()
    {
        // ⭐️追加↓
        $tweets = Tweet::with('user')->latest()->get();

    // ⭐️追加↓
    // $tweetsを'tweets.index'に渡す
    // このtweets.indexとは、resources/views配下のtweetsの中のindex.blade.phpを指すよ。
        return view('tweets.index', compact('tweets'));
  }

  public function create()
  {
    // ⭐️追加
    return view('tweets.create');
  }

  // 省略

}
