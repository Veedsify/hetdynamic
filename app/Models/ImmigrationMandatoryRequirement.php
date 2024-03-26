<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImmigrationMandatoryRequirement extends Model
{
    use HasFactory;

    protected $fillable = ['requirements','requirement_context', 'requirement_id'];

    public function immigrationService()
    {
        return $this->belongsTo(ImmigrationService::class);
    }
}
