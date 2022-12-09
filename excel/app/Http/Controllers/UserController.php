<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Maatwebsite\Excel\Concerns\FromArray;

class UserController extends Controller
{
	public function importView(Request $request){
		return view('welcome');

	}

	

	public function exportUsers(Request $request){
		error_log('fff');
		$id=[1,2,3,4,5,6,7,];
		error_log('fff');
		// if ($id ==2){
			// $user = new ExportUser([
			// 	User::select('*')
			// 	->whereIn('id',$id)
			// 	->get()
				
				
				
				
			// ]);
	
			// $user = new ExportUser(
			// 	DB::table('users')->select('name')
			// 	->whereIn('id',$id)
			// 	->get()
			// 	->toArray()
			// );
			$user = new ExportUser([
				DB::select(DB::raw("SELECT * FROM `users` WHERE `id` = :$id") )
			]);
			// var_dump($user);
		
		return Excel::download($user, 'invoices.xlsx');
		
	}
	
}

?>
