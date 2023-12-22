<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    protected $table = 'nominations';
    protected $primaryKey = 'ID_Nomination';
    public $timestamps = false;

    // Les relations
    public function proposition()
    {
        return $this->belongsTo(Proposition::class, 'Proposition_ID', 'ID_Proposition');
    }

    public function ministere()
    {
        return $this->belongsTo(MinistereTutelle::class, 'Ministere_ID', 'ID_Ministere');
    }

    // Autres méthodes ou attributs
}
