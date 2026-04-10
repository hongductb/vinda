<?php

namespace App\\Models;

use Illuminate\\Database\\Eloquent\\Model;

class Shift extends Model
{
    protected $table = 'shifts';
    protected $fillable = ['name', 'start_time', 'end_time', 'date'];

    public static function getAll() {
        return self::all();
    }

    public static function getById($id) {
        return self::find($id);
    }

    public static function createShift($data) {
        return self::create($data);
    }

    public static function updateShift($id, $data) {
        $shift = self::find($id);
        if ($shift) {
            $shift->update($data);
            return $shift;
        }
        return null;
    }

    public static function deleteShift($id) {
        $shift = self::find($id);
        if ($shift) {
            return $shift->delete();
        }
        return null;
    }
}
