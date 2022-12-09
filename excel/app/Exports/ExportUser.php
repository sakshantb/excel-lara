<?php
    // namespace App\Exports;
    // use App\Models\User;
    // use Maatwebsite\Excel\Concerns\FromCollection;
    // use Maatwebsite\Excel\Concerns\FromArray;
 
    // class ExportUser implements FromArray {
    //     protected $invoices;
    //     public function __construct(array $invoices)
    //     {
           
    //         $this->data = $invoices;
    //     }
    // }
namespace App\Exports;

use App\Invoice;
use App\Exports;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUser implements FromArray,WithHeadings
{
    protected $user;

    public function __construct(array $user)
    {
        $this->invoices = $user;
    }

    public function array(): array
    {
        return $this->invoices;
        error_log('dd');
        
    }
  
    public function headings(): array
    {
        return ["your", "headings", "here"];
        // return array_keys($this->invoices[0][0]->toArray());
        // return $this->invoices;
    }
   
}
?>