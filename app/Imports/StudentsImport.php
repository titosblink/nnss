<?php
namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Students([
            'studentid' => $row['studentid'],
            'surname' => $row['surname'],
            'othername' => $row['othername'],
        ]);
    }
}
