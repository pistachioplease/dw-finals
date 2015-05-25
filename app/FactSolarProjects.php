<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FactSolarProjects extends Model {

	protected $table = 'factSolarProjects';

	protected $fillable = [];

	protected $hidden = [];

	/*public function locations(){
        return $this->hasMany('App\DimLocation', 'id_location', 'id');
    }*/

}
