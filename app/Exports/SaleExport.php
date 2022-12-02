<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class SaleExport implements WithMultipleSheets
{
    use Exportable;

    

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];

        // for ($month = 1; $month <= 12; $month++) {
            $sheets[] = new InvoicesPerMonthSheet("2022", 'users');
            $sheets[] = new SaleSheet("2022", 'sales');
        // }

        return $sheets;
    }
}