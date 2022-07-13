<?php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Controllers\BaseController;

class Excel extends BaseController
{
    public function index()
    {
        //

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hola excel !');

        $writer = new Xlsx($spreadsheet);
 
        $filename = 'hello world.xlsx';
        $writer->save($filename);

        // Set the content-type:
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Length: ' . filesize($filename));
        readfile($filename); // send file
        unlink($filename); // delete file
        exit;
    }
}
