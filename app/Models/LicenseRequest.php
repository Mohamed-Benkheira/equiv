<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenseRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'school_name',
        'certificate_date',
        'id_card_path',
        'bac_certificate_file_path',
        'certificate_for_equivalence_file_path',
        'statement_of_marks_or_certificate_appendix',
        'status',
        'info_accuracy',
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
    public function acceptedRequest()
    {
        return $this->hasOne(AcceptedBacRequest::class);
    }
}
