<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'author_id',
		'supplier',
		'company_id',
		'invoice_due_date',
		'vs',
		'invoice_price_unvat',
		'invoice_currency',
		'description',
		'reinvoice',
	];
}
