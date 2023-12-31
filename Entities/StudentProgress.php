<?php

namespace Modules\Academic\Entities;

use Illuminate\Database\Eloquent\Model;

class StudentProgress extends Model
{

    protected $fillable = [
      "team_id",
      "user_id",
      "student_id",
      "classroom_id",
      "admission_id",
      "period_id",
      "next_grade_id",
      "status"
    ];
    protected $table = "ac_student_progress";

}
