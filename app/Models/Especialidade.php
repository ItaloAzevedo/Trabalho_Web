<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 16:44:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Especialidade
 * 
 * @property int $id
 * @property string $descricao
 *
 * @package App\Models
 */
class Especialidade extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'descricao'
	];
}
