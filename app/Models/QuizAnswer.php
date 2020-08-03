<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model {

    protected $table = 'quiz_answers';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
