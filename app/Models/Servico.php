<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Servico
 * 
 * @property int $id
 * @property string|null $titulo
 * @property string|null $descricao
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Arquivo[] $arquivos
 * @property Collection|PotencialCliente[] $potencial_clientes
 *
 * @package App\Models
 */
class Servico extends Model
{
	protected $table = 'servicos';

	protected $fillable = [
		'titulo',
		'descricao'
	];

	public function arquivos():BelongsToMany
	{
		return $this->belongsToMany(Arquivo::class, 'id_servico');
	}

	public function potencial_clientes()
	{
		return $this->hasMany(PotencialCliente::class, 'id_servico');
	}
}
