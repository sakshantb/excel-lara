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
   
    public function __construct(array $user)
    {
        $this->invoices = $user;  
    }
    public function array(): array
    {
        return $this->invoices;  
    }
    public function headings(): array
    {
    // for non-dynamic heading use following method(for both eloqunt and query builder method)
        // return [" your  ", "headings", "here"];

    // if you are using eloquent query method to fetch details use following method for  dynamic heading
        // return array_keys( $this->invoices[0][0]->toArray());

    // if you are using query builder method to fetch details use following method for dynamic heading
        foreach($this->invoices[0] as $key => $value) {
            $heading[] = $key ;
        }
        return $heading;   
    }
   
}
?>