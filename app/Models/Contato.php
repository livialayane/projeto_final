<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contato
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon $atendimento
 * @property string $email
 * @property string $endereco
 * @property string $telefone
 *
 * @package App\Models
 */
class Contato extends Model
{
	protected $table = 'contatos';

	protected $casts = [
		'atendimento' => 'datetime'
	];

	protected $fillable = [
		'atendimento',
		'email',
		'endereco',
		'telefone'
	];
}
