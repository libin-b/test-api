<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// namespace Spatie\DbDumper\Test;
use Carbon\Carbon;
use App\Sale;
use Artisan;

use PHPUnit\Framework\TestCase;
use Spatie\DbDumper\Compressors\Bzip2Compressor;
use Spatie\DbDumper\Compressors\GzipCompressor;
use Spatie\DbDumper\Databases\MySql;
use Spatie\DbDumper\Exceptions\CannotSetParameter;
use Spatie\DbDumper\Exceptions\CannotStartDump;


use App\Exports\SaleExport;
use Maatwebsite\Excel\Facades\Excel;use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $exitCode = Artisan::call('backup:run');
        return view('home');
    }
    
    public function create(){

        // $spreadsheet = new Spreadsheet();
        // $sheet = $spreadsheet->getActiveSheet();
        // $sheet->setCellValue('A1', 'Hello World !');

        // $writer = new Xlsx($spreadsheet);
        // $writer->save('hello world.xlsx');
        // $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
        // $spreadsheet = $reader->load("hello world.xlsx");
        // $sales = Sale::where('date','2022-10-20')->first();

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        //  $reader->setLoadSheetsOnly(["Sheet2", "b2b"]);
       
        $spreadsheet = $reader->load("SREERAM.xlsx");

        // $clonedWorksheet = clone $spreadsheet->getSheetByName('b2b');
        // $clonedWorksheet->setTitle('Copy of Worksheet 1');
        // $spreadsheet->addSheet($clonedWorksheet);



        // $sheet = $spreadsheet->getSheet();
        //for($i=5;$i< count($sales)  + 5 ; $i++){
        //     $i = 5 ;
        //    //zz foreach($sales as $sale){
        //     $sheet->setCellValue('C'.$i, $sales->bill_no);
        //     $i =$i+1;
            // }
        //}
        //
       // $spreadsheet->save();
         $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
         $writer->save("hello world.xlsx");
       // return $spreadsheet;

        // Excel::import(new UsersImport, 'users.xlsx');
        // return Excel::download(new SaleExport, 'sales.xlsx');
    }
}
