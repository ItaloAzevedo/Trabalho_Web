<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 16:44:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property int $id_funcao
 * @property string $nome
 * @property string $email
 * @property string $login
 * @property string $senha
 * @property string $cpf
 *
 * @package App\Models
 */
class Usuario extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'id_funcao' => 'int'
	];

	protected $fillable = [
		'id_funcao',
		'nome',
		'email',
		'login',
		'senha',
		'cpf'
	];
}
