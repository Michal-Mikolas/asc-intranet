<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('companies', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('orders', function (Blueprint $table) {
			$table->id();
			$table->foreignId('author_id')->constrained('users')->onDelete('cascade');
			$table->string('supplier');
			$table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
			$table->dateTime('invoice_due_date');
			$table->string('vs');
			$table->decimal('invoice_price_unvat', 8, 2);
			$table->string('invoice_currency')->default('CZK');
			$table->text('description');
			$table->string('reinvoice')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('orders');
		Schema::dropIfExists('companies');
	}
};
