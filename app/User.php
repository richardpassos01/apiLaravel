<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

/**
 * User
 * 
 * @version 1.0.0
 * @since 1.0.0
 * @author Uday Kumar
 *
 */
class User extends Model
{
    protected $primaryKey = 'cod_ser';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_ser',
        'nome',
        'usuario',
        'senha',
        'frase',
        'comida',
        'bebida',
        'hobby',
        'linkedin',
        'skype',
        'slack',
        'cpf',
        'mail',
        'sexo',
        'filhos',
        'envio_sms',
        'unidade',
        'aniversario',
        'admissao',
        'demissao',
        'cargo',
        'celular',
        'celular_particular',
        'ramal',
        'area',
        'bonus',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'senha', 'remember_token','created_at','updated_at','cod_ser',
    ];
    
    /**
     * Set the user's name.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        return $this->attributes['nome'] = ucfirst($value);
    }
    
    /**
     * Set the password
     * 
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        return $this->attributes['senha'] = Hash::make($value);
    }
}
//end of class User
//end of file User.php