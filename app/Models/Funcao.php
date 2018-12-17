<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 16:44:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Funcao
 * 
 * @property int $id
 * @property string $descricao
 *
 * @package App\Models
 */
class Funcao extends Eloquent
{
	protected $table = 'funcao';
	public $timestamps = false;

	protected $fillable = [
		'descricao'
	];
}
