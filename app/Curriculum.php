<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'grade_id', 'lessons_data'
    ];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeGetAllCurricula ($query) {
        return $query->where('id', '>', '0');
    }

    /**
     * Gets curriculum by id.
     *
     * @param $query
     * @param $curriculumID
     * @return mixed
     */
    public function scopeGetCurriculum ($query, $curriculumID) {
        return $query->where('id', $curriculumID);
    }

    /**
     * Gets all teacher lessons by teacher id.
     *
     * @param $query
     * @param $teacherID
     * @return mixed
     */
    public function scopeGetTeacherCurriculum ($query, $teacherID) {
        $day = date('D');
        return $query->whereJsonContains('lesson_teacher_ids', $teacherID)->select('grade_id', 'lesson_timeRanges', 'lesson_subject_ids', 'lesson_teacher_ids');
    }
}
