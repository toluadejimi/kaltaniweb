<?php

namespace App\Http\Controllers;

use App\Models\BsFormation;
use App\Models\CmFormation;
use App\Models\Formation;
use App\Models\GmFormation;
use App\Models\Item;
use App\Models\LmFormation;
use App\Models\OnetoncmFormations;
use App\Models\Output;
use App\Models\OutputTransaction;
use App\Models\StockAdjust;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ItemController extends Controller
{



    public function index(request $request)
    {

        return view('welcome');
    }



    public function who_we_are(request $request)
    {
        return view('who-we-are');

    }






}









