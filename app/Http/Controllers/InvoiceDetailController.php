<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceAttachment;
use App\Models\InvoiceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvoiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InvoiceDetail $invoiceDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $invoices = Invoice::where('id',$id)->first();
        $details = InvoiceDetail::where('id_Invoice',$id)->get();
        $attachments = InvoiceAttachment::where('invoice_id',$id)->get();
       return view('invoices.invoices_details',compact('invoices','details','attachments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InvoiceDetail $invoiceDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $invoices = InvoiceAttachment::findOrFail($request->id_file);
        $invoices->delete();
        Storage::disk('public_uploads')->delete($request->invoice_number . '/' . $request->file_name);
        session()->flash('delete','تم حذف المرفق بنجاح');
        return back();
    }
    public function get_file($invoice_number,$file_name)
    {
        $contents = Storage::disk('public_uploads')->get($invoice_number . '/' . $file_name);
        return response()->streamDownload(function () use ($contents) {
            echo $contents;
        }, $file_name);
    }
    public function open_file($invoice_number,$file_name)

    {
        $filePath = Storage::disk('public_uploads')->path($invoice_number . '/' . $file_name);
        return response()->file($filePath);
    }
    
}
