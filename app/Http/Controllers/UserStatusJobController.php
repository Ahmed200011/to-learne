<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\UserStatusChange;

class UserStatusJobController extends Controller
{
    public function index()
    {
        UserStatusChange::dispatch();
        return 'User status has been changing';
    }

}
