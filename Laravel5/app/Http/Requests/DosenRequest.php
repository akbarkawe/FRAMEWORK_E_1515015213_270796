<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class DosenRequest extends Request{
	public function authorize(){
	return true;
	}
	public function rules(){
	$validasi = [
	'nama'=>'required',
	'nipp'=>'required|integer',
	'alamat'=>'required',
	'username'=>'required',
	'password'=>'required'];
	if($this->is('dosen/tambah')){
	$validasi['password']='required';
	}
	return $validasi;
	}

}