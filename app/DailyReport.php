<?php
namespace App;
use Eloquent;

class DailyReport extends Eloquent {

	protected $fillable = [
							'user_id',
							'date',
							'description'
						];
	protected $primaryKey = 'id';
	protected $table = 'daily_reports';

    public function user()
    {
        return $this->belongsTo('App\User'); 
    }
}
