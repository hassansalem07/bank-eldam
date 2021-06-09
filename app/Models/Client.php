<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Client extends Authenticatable
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'password', 'mail', 'birth_date', 'last_donation_date', 'pin_code', 'blood_type_id', 'city_id');

    public function bloodType()
    {
        return $this->belongsTo('\BloodType');
    }

    public function city()
    {
        return $this->belongsTo('\City');
    }

    public function donationRequests()
    {
        return $this->hasMany('\DonationRequest');
    }

    public function posts()
    {
        return $this->belongsToMany('\Post');
    }

    public function notifications()
    {
        return $this->belongsToMany('\Notification');
    }

    public function bloodTypes()
    {
        return $this->belongsToMany('\BloodType');
    }

    public function governorates()
    {
        return $this->belongsToMany('\Governorate');
    }

    public function contacts()
    {
        return $this->hasMany('\Contact');
    }


    protected $hidden = [
        'password', 'api_token'
    ];



}
