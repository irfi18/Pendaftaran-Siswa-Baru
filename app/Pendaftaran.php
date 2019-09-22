<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    // timestamps
    public $timestamps = true;

    // alias nama primary key
    public $primaryKey = 'id';
    
    // alias nama tabel
    public $table = 'pendaftarans';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
