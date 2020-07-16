<?php

namespace Modules\Messenger\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class MessengerController extends Controller
{

    public function shareViaMessenger()
    {
        return view('messenger::messenger.share');
    }
}
