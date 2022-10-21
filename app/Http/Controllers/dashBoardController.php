<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Jobform;
use App\jobforms;
use Illuminate\Http\Request;
use App\Http\Controllers\jobformController;
use Psy\Readline\Hoa\Console;

use function PHPUnit\Framework\returnSelf;

class dashBoardController extends Controller
{
    public function getDashBoard()
    {
        return view('dashBoard');
    }
    public function userdata(Request $req)
    {
        $data = DB::table('jobforms')->get();
       
        return view('dashBoard',['data'=>$data]);

    }
}
