<?php

class Sale extends \Eloquent {
	protected $fillable = ['cantidad_kg', 'precio_producto', 'id_user', 'id_client'];

public function Client()
	{
		return $this->hasMany('Sale');
	}

	public function User()
	{
		return $this->hasMany('User');
	}

	public function Production()
	{
		return $this->hasMany('Production');
	}
}

