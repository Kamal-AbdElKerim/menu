<?php

namespace App\Models;

use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PDFController extends Model
{
    use HasFactory;

    public function generatePdf()
    {
        // Create PDF options
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('defaultFont', 'Arial');

        // Initialize Dompdf
        $dompdf = new Dompdf($options);

        // Load HTML content from Blade view
        $data = [
            'menus' => $menus, // Make sure $menus contains the required data
        ];
    
        // Load HTML content from Blade view
        $html = View::make('front.admin.QR_Code.QR_Code', $data)->render();


        // Load HTML into Dompdf
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Output PDF
        return $dompdf->stream('QR_Code.pdf');
    }
}
