<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'ID_Service';
    public $timestamps = false;

    // La relation
    public function ministere()
    {
        return $this->belongsTo(MinistereTutelle::class, 'Ministere_ID', 'ID_Ministere');
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class, 'Service_ID', 'ID_Service');
    }

    // Autres méthodes ou attributs
}
