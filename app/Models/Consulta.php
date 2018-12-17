<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 17 Dec 2018 16:44:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Consulta
 * 
 * @property int $id
 * @property int $id_cliente
 * @property int $id_medico
 * @property \Carbon\Carbon $data_hora
 *
 * @package App\Models
 */
class Consulta extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'id_medico' => 'int'
	];

	protected $dates = [
		'data_hora'
	];

	protected $fillable = [
		'id_cliente',
		'id_medico',
		'data_hora'
	];
}
