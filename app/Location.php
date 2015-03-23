<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

	protected $table = 'desa_longsor';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'longitude', 'latitude', 'keterangan_desa'];
	public $timestamps = false;
}
