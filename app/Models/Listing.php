<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title','tags','locatios','company','logo','user_id','email','website','description'];

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false ){
            $query->where('tags','Like','%'.request('tag').'%');
        }
        if($filters['search'] ?? false ){
            $query->where('tags','Like','%'.request('search').'%')
            ->orWhere('title','Like','%'.request('search').'%')
            ->orWhere('description','Like','%'.request('search').'%')
            ->orWhere('company','Like','%'.request('search').'%');
        }
    }


    //Relationship to User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

