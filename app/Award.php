<?php
namespace App;
use Eloquent;

class Award extends Eloquent {

	protected $fillable = [
							'award_type_id',
							'gift',
							'cash',
							'month',
							'year',
							'description',
							'date_of_award'
						];
	protected $primaryKey = 'id';
	protected $table = 'awards';

	public function user()
    {
        return $this->belongsToMany('App\User','award_user','award_id','user_id');
    }

    public function userAdded(){
    	return $this->belongsTo('App\User','user_id');
    }

	public function awardType()
    {
        return $this->belongsTo('App\AwardType');
    }
}
