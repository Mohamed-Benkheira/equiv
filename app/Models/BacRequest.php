<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'school_name',
        'certificate_date',
        'id_card_path',
        'certificate_file_path',
        'degrees_paper_path',
        'info_accuracy',
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
