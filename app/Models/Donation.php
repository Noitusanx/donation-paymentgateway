<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function setStatusPending(){
        $this->attributes['status'] = 'pending';
        $this->save();
    }

    public function setStatusSuccess(){
        $this->attributes['status'] = 'success';
        $this->save();
    }

    public function setStatusFailed(){
        $this->attributes['status'] = 'failed';
        $this->save();
    }

    public function setStatusExpired(){
        $this->attributes['status'] = 'expired';
        $this->save();
    }
}
