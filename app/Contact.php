<?php
namespace App;
use Eloquent;

class Contact extends Eloquent {

	protected $fillable = [
							'is_primary',
							'is_dependent',
							'relation',
							'name',
							'work_email',
							'personal_email',
							'work_phone',
							'work_phone_extension',
							'mobile',
							'home',
							'address_1',
							'address_2',
							'city',
							'state',
							'zipcode',
							'country_id',
							'user_id'
						];
	protected $primaryKey = 'id';
	protected $table = 'contacts';

	public function user() {
    	return $this->belongsTo('App\User');
	}

}
