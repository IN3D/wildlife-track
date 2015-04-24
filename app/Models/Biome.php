<?php namespace WT\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Biome extends Model {

        use SoftDeletes;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'biomes';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'name',
            'short_name'
        ];

        /**
         * Additional fields to treat as Carbon instances.
         *
         * @var array
         */
        protected $dates = [
            'deleted_at'
        ];

    }
