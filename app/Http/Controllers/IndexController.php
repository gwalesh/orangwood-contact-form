<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class IndexController extends Controller
{
    public function storeForm(Request $request)
    {
        $request->validate([
            'name'  =>  'string|required',
            'contact'  =>  'string|required',
            'business_type'  =>  'string|required',
            'phone'  =>  'required|unique:forms',
        ]);
        
        $form = Form::create($request->all());


        return redirect()->back()->with('success',"Form Stored Succesfully !");
    }
}
