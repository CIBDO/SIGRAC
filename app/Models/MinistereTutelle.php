<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MinistereTutelle extends Model
{
    protected $table = 'ministeretutelle';
    protected $primaryKey = 'ID_Ministere';
    public $timestamps = false;

    // Les relations
    public function services()
    {
        return $this->hasMany(Service::class, 'Ministere_ID', 'ID_Ministere');
    }

    // Autres méthodes ou attributs
}
