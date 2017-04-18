<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class RuanganRequest extends Request{
	public function authorize(){
	return true;
	}
	public function rules(){
	$validasi = [
	'id'=>'required',
	'title'=>'required'];

	return $validasi;
	}

}