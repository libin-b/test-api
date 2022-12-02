<?php

namespace App\Exports;
use App\Sale;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;

class InvoicesPerMonthSheet implements FromCollection, WithTitle
{
    private $name;
    private $year;

    public function __construct( string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Builder
     */
    public function collection()
    {
        return User::all();
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'users';
    }
}