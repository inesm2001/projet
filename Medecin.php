// app\Models\Medecin.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $table = 'Medecin';

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'ID_Utilisateur');
    }

    public function questionnaires()
    {
        // Définissez la relation selon votre schéma
    }
}
