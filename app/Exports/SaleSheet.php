<?php

namespace App\Exports;
use App\Sale;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
class SaleSheet implements FromCollection ,WithTitle
{
   /**
     * @return Builder
     */
    public function collection()
    {
        return Sale::all();
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'sales';
    }
}
