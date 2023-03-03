<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionController extends Controller
{
    //
    public function chooseCategory(Request $request){
        if ($request->option==='crop'){
        return redirect('option/crop.index');
        }elseif(redirect($request->option==='animal')){
                return redirect('option/animal.index');
            
        }
    }
}
