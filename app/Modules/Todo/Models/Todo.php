<?php

namespace App\Modules\Todo\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Todo extends Model
{
	use SoftDeletes, HasUuids;

	protected $table      = 'todo';
	protected $fillable   = ['todo','tanggal','jam','status'];

	public static function boot()
	{
		parent::boot();

		static::creating(function ($model) {
			$model->created_by = Auth::check() ? Auth::id() : 'Guest';
		});

		static::updating(function ($model) {
			$model->updated_by = Auth::check() ? Auth::id() : 'Guest';
		});

		static::deleting(function ($model) {
			$model->deleted_by = Auth::check() ? Auth::id() : 'Guest';
			$model->save();
		});

		static::restoring(function ($model) {
			$model->deleted_by = null;
			$model->save();
		});
	}

	
}
