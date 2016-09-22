<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function read($filename = null) {

    	$filepath = public_path() . '/' . $filename . '.json';
    	
    	if(strlen($filename) && file_exists($filepath))
    		$data = json_decode(file_get_contents(($filepath), true));

    	else
    		$data = false;
    	
    	return view('read', ['data' => $data, 'filename' => $filename]);
    }


    public function write($filename = null) {
    	return view('write', ['filename' => $filename]);
    }


    public function store(Request $request) {

    	$numbers = $request->except(['_token', 'filename']);
    	$filename = $request->input('filename');

		file_put_contents(public_path() . '/' . $filename . '.json', json_encode($numbers, true));

		return view('home');
    }

}
