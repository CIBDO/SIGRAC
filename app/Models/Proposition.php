<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposition extends Model
{
    protected $table = 'propositions';
    protected $primaryKey = 'ID_Proposition';
    public $timestamps = false;

    // La relation
    public function demande()
    {
        return $this->belongsTo(Demande::class, 'Demande_ID', 'ID_Demande');
    }

    // Autres méthodes ou attributs
}
