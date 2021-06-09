<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model
{

    protected $table = 'donation_requests';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'age', 'hospital_name', 'hospital_address', 'bags_number', 'latitude', 'longitude', 'details', 'blood_type_id', 'client_id');

    public function city()
    {
        return $this->belongsTo('\City');
    }

    public function bloodType()
    {
        return $this->belongsTo('\BloodType');
    }

    public function client()
    {
        return $this->belongsTo('\Client');
    }

    public function notification()
    {
        return $this->hasMany('\Notification');
    }

}
