// app\Models\StatistiquesUtilisation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatistiquesUtilisation extends Model
{
    protected $table = 'Statistiques_Utilisation';

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'ID_Utilisateur');
    }
}
