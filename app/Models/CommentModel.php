<?php namespace App\Models;

    use CodeIgniter\Model;
    class CommentModel extends Model{
        protected $table  = 'comment';
        protected $primaryKey = 'id';    
        protected $allowedFields = ['post_id', 'content'];
    }
    
?>