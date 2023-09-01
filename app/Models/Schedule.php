<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'identifier';
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($schedule) {
            $schedule->identifier = Str::slug(strtolower($schedule->name . '-' . mt_rand(11111, 99999)));
        });
        static::updating(function ($schedule) {
            $schedule->identifier = Str::slug(strtolower($schedule->name . '-' . mt_rand(11111, 99999)));
        });
    }

    public function getFullDate()
    {
        \Carbon\Carbon::setlocale('id');

        return Carbon::parse($this->date_start)->translatedFormat('l') . ' - ' .
            Carbon::parse($this->date_end)->translatedFormat('l') . ' / ' .
            Carbon::parse($this->date_start)->translatedFormat('d') . ' - ' .
            Carbon::parse($this->date_end)->translatedFormat('d F Y');
    }
}
