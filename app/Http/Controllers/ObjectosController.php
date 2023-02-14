<?php

namespace App\Http\Controllers;

use App\Models\objectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\returnSelf;

class ObjectosController extends Controller
{
    public function api_store()
    {
        $response=Http::get(env('URL_API'));
        $data=$response->json();
        for ($x=0; $x < sizeof($data); $x++) {
            objectos::create([
                'user_id'=>$data[$x]['userId'],
                'title'=>$data[$x]['title'],
                'complet'=>$data[$x]['completed'],
            ]);
        }
        return view('index');
    }
}
