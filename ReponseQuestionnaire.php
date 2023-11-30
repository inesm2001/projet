// app\Models\ReponseQuestionnaire.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReponseQuestionnaire extends Model
{
    protected $table = 'Reponse_Questionnaire';

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class, 'ID_Questionnaire');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'ID_Question');
    }
}
