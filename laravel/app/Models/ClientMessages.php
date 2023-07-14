<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientMessages extends Model
{
    protected $table = 'messages';
    protected $fillable = ['message'];
    protected $primaryKey = 'id';

    public static function api($request, $cm)
    {
        $bod = $request->getContent();
        $cm->insert(['message' => $bod]);
    }
}
