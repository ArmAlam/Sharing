<?php

namespace Modules\Facebook\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class FacebookController extends Controller
{
    public function shareToFacebook()
    {
        return view('facebook::facebook.share');
    }
}
