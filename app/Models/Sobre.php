<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sobre
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $missao
 * @property string $valores
 * @property string $visao
 * @property string $titulo
 * @property string $subtitulo
 *
 * @package App\Models
 */
class Sobre extends Model
{
	protected $table = 'sobres';

	protected $fillable = [
		'missao',
		'valores',
		'visao',
		'titulo',
		'subtitulo'
	];
}
