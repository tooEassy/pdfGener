<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class DownloadInvoiceController extends Controller
{
    public function __invoke(Invoice $invoice)
    {
        return Pdf::view('pdfs.invoice', ['invoice' => $invoice])
            ->format('a4')
            ->name('your-invoice.pdf');
    }
}
