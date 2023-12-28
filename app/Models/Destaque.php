<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Destaque
 * 
 * @property string|null $titulo
 * @property string|null $descricao
 * @property string|null $imagem
 * @property int $id
 *
 * @package App\Models
 */
class Destaque extends Model
{
	protected $table = 'destaques';
	public $timestamps = false;

	protected $fillable = [
		'titulo',
		'descricao',
		'imagem'
	];
}
