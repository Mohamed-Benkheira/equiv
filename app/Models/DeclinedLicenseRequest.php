<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclinedLicenseRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_request_id',
        'email_sent_to',
        'message',
    ];

    /**
     * Relationship with the BacRequest model
     */
    public function LicenseRequest()
    {
        return $this->belongsTo(LicenseRequest::class);
    }
}
