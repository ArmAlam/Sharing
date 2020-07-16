<?php

namespace Modules\Twitter\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class TwitterController extends Controller
{
    public function tweet()
    {
        return view('twitter::twitter.share');
    }
}
