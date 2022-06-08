<?php

namespace NerdPanda\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class NerdPanda extends Controller
{
    public function __invoke():View {
        return \view('nerdPanda::nerdPanda');
    }
}
