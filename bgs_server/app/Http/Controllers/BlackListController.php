<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlackList;

class BlackListController extends Controller
{
    public function getAllBlackLists()
    {
        return BlackList::all();
    }
}
