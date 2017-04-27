<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class pengguna extends Model implements AuthenticatableContract
{
	use Authenticatable;
	protected $table ='pengguna';
	protected $fillable =['username','password'];

	public function mahasiswa(){
		return $this->hasOne(mahasiswa::class);
	}

	public function dosen(){
		return $this->hasOne(dosen::class);
	}
	/*
	public function peran(){
		return $this ->belongsToMany(peran::class);
	}
	*/
}
