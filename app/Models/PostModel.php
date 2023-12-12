<?php namespace App\Models;

    use CodeIgniter\Model;
    class PostModel extends Model{
        protected $table  = 'post';
        protected $primaryKey = 'slug';    
        protected $allowedFields = ['id', 'slug', 'title', 'content', 'created_at', 'updated_at'];

    }
?>