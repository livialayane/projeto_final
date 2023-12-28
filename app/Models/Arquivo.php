<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Arquivo
 * 
 * @property string $documento
 * @property int $id
 * @property string $titulo
 * @property int $id_servico
 * 
 * @property Servico $servico
 *
 * @package App\Models
 */
class Arquivo extends Model
{
	protected $table = 'arquivos';
	public $timestamps = false;

	protected $casts = [
		'id_servico' => 'int'
	];

	protected $fillable = [
		'documento',
		'titulo',
		'id_servico'
	];

	public function servico()
	{
		return $this->belongsTo(Servico::class, 'id_servico');
	}
}
