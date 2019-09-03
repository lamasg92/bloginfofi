<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;

class InvoicesController extends Controller
{
    
    public function index(Request $request)
    {
       $invoices=Invoice::all();
       return view('invoices.index')->with('invoices',$invoices);
    }  

    public function create()
    {   
        return view('invoices.create');//->with('categories',$categories)
    }

    
    public function store(Request $request)
    {
        $invoice= new Invoice($request->all());
        if ($request->file('image')) {
              $image = $request->file('image');
              $filename = $image->getClientOriginalName();
              $location = public_path().'/images/invoices/';
              $image->move($location,$filename);
              $invoice->extension= $filename;
        }

       /* $invoice->code=$request->code;
        $invoice->description=$request->description;
        $invoice->type=$request->type;
        $invoice->total->$request->total*/
        $invoice->save();

        return redirect()->route('invoices.index');

    }

        
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    { 
        $invoice = Invoice::find($id);
        return view('invoices.edit')->with('invoice',$invoice);
    }

   
    public function update(Request $request, $id)
    {
        $invoice= Invoice::find($id);
        $invoice->fill($request->all());

         if($request->file('image')){
              $image = $request->file('image');
              $filename = $image->getClientOriginalName();
                 if ($filename!=$invoice->extension){
                    $location = public_path().'/images/invoices/';
                    $image->move($location,$filename);
                    $invoice->extension= $filename;
                    }
          }

        $invoice->save();        

       return redirect()->route('invoices.index');
    }

  

    public function desable($id)
    {
       //
    }

    public function enable($id)
    {
        //
    }
      
   
}

