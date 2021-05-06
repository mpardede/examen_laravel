<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delete;

class delete extends Controller
{
    $delete = Delete::find(1);
    $delete ->delete();
}
