<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class DosenmatakuliahRequest extends Request{
	public function authorize(){
	return true;
	}
	public function rules(){
	$validasi = [
	'dosen_id'=>'required',
	'matakuliah_id'=>'required'];

	return $validasi;
	}
}