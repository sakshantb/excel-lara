<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
	public function importView(Request $request){
		return view('welcome');

	}
	public function exportUsers(Request $request){
		$id=[1,2,3,4,5,6,7,];
	// if you are using eloquent query method to fetch details use following method(this method does not fetch password details) 
			// $user = new ExportUser([
			// 	User::select('*')
			// 	->whereIn('id',$id)
			// 	->get()	
			// ]);
	// if you are using query builder method to fetch details use following method 
			$user = new ExportUser(
				DB::table('users')->select('id','name','email')
				->whereIn('id',$id)
				->get()
				->toArray()		
			);		
			
		return Excel::download($user, 'invoices.xlsx');
		
	}
	
}

?>
