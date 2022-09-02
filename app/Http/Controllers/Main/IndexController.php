<?php

namespace App\Http\Controllers\Main;

class IndexController
{
    public function __invoke() {
        return view('main.index');
    }


}
