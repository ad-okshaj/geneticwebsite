<?php

namespace App\Exports;

use App\Models\Members;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MembersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return members::all();
    }

    public function headings(): array
    {
        return [
            'Sl No',
            'Name',
            'Dob',
            'Gender',
            'Street',
            'City',
            'State',
            'Country',
            'Email',
            'Contact',
            'Company Address',
            'Designation',
            'Additional Info'
        ];
    }
}
