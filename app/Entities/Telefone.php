<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 26/09/2015
 * Time: 01:46
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable =[
        'descrição',
        'codpaís',
        'ddd',
        'prefixo',
        'sufixo'
    ];

}