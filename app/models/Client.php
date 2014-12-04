<?php

class Client extends \Eloquent {
	protected $fillable = ['nombre', 'direccion', 'telefono', 'email'];

	public function Sale()
	{
		return $this->belongsTo('Sale');
	}
}

