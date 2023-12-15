<?php 

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
class AuthorController extends BaseController
    {

    public function __construct(){
        $this->db = \Config\Database::connect();
    }

    public function read($slug){
        
        $author = $this->db->table('author')->where('author.author_slug', $slug)->get()->getRow();
        if($author){
            $posts = $this->db->table('post')->where('post.author_id', $author->id)->join('author', 'post.author_id = author.id', 'LEFT')->get()->getResultArray();
            $total_comment_count = 0;
            foreach ($posts as $post){
                $post['comment_count'] = $this->db->table('comment')->where('post_id', $post['id'])->countAll();
                $total_comment_count++;
            }

            $data = array(
                'name' => $author->author_name,
                'slug' => $author->author_slug,
                'avatar' => $author->author_avatar,
                'posts' => $posts,
                'total_comment_count' => $total_comment_count
            );
        }else{
            throw PageNotFoundException::forPageNotFound('Oops count not find the post your looking for.');
        }

        return view('pages/author', $data);
    }
}

