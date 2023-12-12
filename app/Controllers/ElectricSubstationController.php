<?php 

namespace App\Controllers;
use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\TagModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class ElectricSubstationController extends BaseController
    {

    public function __construct(){
        $this->db = \Config\Database::connect();
    }

    public function read($slug){
        $post = new PostModel;
        $post = $post->find($slug);
        if($post){

            // Testing using db instance
            $tags = $this->db->table('tag')->select(['title', 'slug'])->get()->getResultArray();
            $categories = $this->db->table('category')->select(['title', 'slug'])->get()->getResultArray();
            $comments = new CommentModel;
            $comment_count = $comments->where('post_id', $post['id'])->countAll();
            $data = array(
                'title' => $post['title'],
                'content' => $post['content'],
                'image' => $post['image'],
                'view_count' => $post['view_count'],
                'comment_count' => $comment_count,
                'tags' => $tags,
                'categories' => $categories,
            );
        }else{
            throw PageNotFoundException::forPageNotFound('Oops count not find the post your looking for.');
        }

        return view('pages/electrical-substation', $data);
    }
}