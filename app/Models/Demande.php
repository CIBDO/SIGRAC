<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $table = 'demandes';
    protected $primaryKey = 'ID_Demande';
    public $timestamps = false;

    // Les relations
    public function service()
    {
        return $this->belongsTo(Service::class, 'Service_ID', 'ID_Service');
    }

    public function proposition()
    {
        return $this->hasOne(Proposition::class, 'Demande_ID', 'ID_Demande');
    }

    // Autres méthodes ou attributs
}
