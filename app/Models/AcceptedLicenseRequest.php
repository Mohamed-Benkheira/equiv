<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedLicenseRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_request_id',
        'email_sent_to',
        'message',
        'attachment',

    ];
    public function licenseRequest()
    {
        return $this->belongsTo(LicenseRequest::class);
    }
}
