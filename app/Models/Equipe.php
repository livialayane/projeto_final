<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipe
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $foto
 * @property string $nome
 * @property string $texto
 * @property string $subtitulo
 *
 * @package App\Models
 */
class Equipe extends Model
{
	protected $table = 'equipes';

	protected $fillable = [
		'foto',
		'nome',
		'texto',
		'subtitulo',
		'formacao'
	];
}
