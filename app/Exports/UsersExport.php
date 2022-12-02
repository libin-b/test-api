<?php

namespace App\Exports;

use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;

class UsersExport implements WithEvents

{
    use Exportable, RegistersEventListeners;

    public static function beforeExport(BeforeExport $event)
    {
        // get your template file
        $event->writer->reopen(new \Maatwebsite\Excel\Files\LocalTemporaryFile(public_path('SREERAM JUNE 2022.xlsx')),Excel::XLSX);
        $event->writer->getSheetByIndex(0);
        
        // fill with information
        // $event->getWriter()->getSheetByIndex(0)->setCellValue('A1','Some Information');
        // $event->getWriter()->getSheetByIndex(0)->setCellValue('G4', 'Some Information');

        return $event->getWriter()->getSheetByIndex(0);
    }   

}
