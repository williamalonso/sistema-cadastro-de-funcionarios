<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Funcionario;
use Session;

class HomeController extends Controller
{
    public function Index(){
        $registros = Funcionario::lista();
        return view('home', compact('registros'));
    }
}
