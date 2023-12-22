<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = 'employes';
    protected $primaryKey = 'ID_Employe';
    public $timestamps = false;

    // La relation
    public function service()
    {
        return $this->belongsTo(Service::class, 'Service_ID', 'ID_Service');
    }

    // Autres méthodes ou attributs
}
