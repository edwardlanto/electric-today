<?php namespace App\Models;

    use CodeIgniter\Model;
    class TagModel extends Model{
        protected $table      = 'tag';
        protected $primaryKey = 'id';    
        protected $allowedFields = ['post_id', 'slug', 'title', 'content', 'created_at', 'updated_at'];
    }
?>