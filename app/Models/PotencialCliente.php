<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PotencialCliente
 * 
 * @property string $telefone
 * @property string $cidade
 * @property string $nome
 * @property int $id
 * @property string $descricao
 * @property int $id_servico
 * @property bool|null $viavel
 * 
 * @property Servico $servico
 *
 * @package App\Models
 */
class PotencialCliente extends Model
{
	protected $table = 'potencial_cliente';
	public $timestamps = false;

	protected $casts = [
		'id_servico' => 'int',
		'viavel' => 'bool'
	];

	protected $fillable = [
		'telefone',
		'cidade',
		'nome',
		'descricao',
		'id_servico',
		'viavel'
	];

	public function servico()
	{
		return $this->belongsTo(Servico::class, 'id_servico');
	}
}
