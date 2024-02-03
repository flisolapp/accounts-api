<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentInfoI18n extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_infos_i18n';

    public $timestamps = false;

    public function parent(): BelongsTo
    {
        return $this->belongsTo(StudentInfo::class);
    }
}
