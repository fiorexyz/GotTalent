<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = [
        'image',
        'talent_images',
        'talent_video'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }

    public function getImageAttribute(){
        $file = 'profile pic/' . $this->id .'.jpg';
        if(Storage::disk('public')->exists($file)){
            return $file;
        }
        else{
            return 'profile pic/placeholder.png';
        }
    }

    public function getTalentImagesAttribute() {
        $images = collect();

        for ($i=1; $i <= 2; $i++) {
            $file = 'talent pic/' . $this->id . '-' . $i . '.jpg';
            if(Storage::disk('public')->exists($file)){
                $images->push(url($file));
            }
        }

        if($images->count() < 1){
            $images->push(url('talent pic/placeholder.png'));
        }
        return $images;
    }

    public function getTalentVideoAttribute(){
        if(Storage::disk('public')->exists("talent video/$this->id.mp4")){
            return "talent video/$this->id.mp4";
        }

        return null;
    }

    public function sub_category(){
        return $this->belongsTo(SubCategory::class);
    }
}
