<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';
    protected $primaryKey = 'ID_Document';
    public $timestamps = false;

    // La relation
    public function nomination()
    {
        return $this->belongsTo(Nomination::class, 'Nomination_ID', 'ID_Nomination');
    }

    // Autres méthodes ou attributs
}
