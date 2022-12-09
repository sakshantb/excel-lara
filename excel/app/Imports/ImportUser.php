<?php

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
class ImportUser implements ToModel
{
public function model(array $row)
{
	return new User([
		'name' => $row[0],
		'email' => $row[1],
		'password' => bcrypt($row[2]),
	]);
}
}