<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class JadwalmatakuliahRequest extends Request{
	public function authorize(){
	return true;
	}
	public function rules(){
	$validasi = [
	'mahasiswa_id'=>'required',
	'dosen_matakuliah_id'=>'required',
	'ruangan_id'=>'required'];
	return $validasi;
	}

}