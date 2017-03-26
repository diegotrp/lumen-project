<?php

namespace App\Http\Controllers;
use App\Test;

class TestController extends Controller
{
    public function show($id) {
	return Test::findOrFail($id);
    }

    public function index() {
	return Test::all()->toJson();
    }
}
