<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class GeneratePDF extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-p-d-f';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        Pdf::view('pdfEx1')->save('/Users/err0/Documents/code/pdf/storage/pdf1.pdf');
    }
}
