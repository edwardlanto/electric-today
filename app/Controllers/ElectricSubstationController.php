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
        $post = $this->db->table('post')->where('post.slug', $slug)->join('author', 'post.author_id = author.id', 'LEFT')->select(['*'])->get()->getRow();
        if($post){
            $tags = $this->db->table('tag')->select(['title', 'slug'])->get()->getResultArray();
            $categories = $this->db->table('category')->select(['title', 'slug'])->get()->getResultArray();
            $comments = new CommentModel;
            $comments = $comments->where('post_id', $post->id)->get()->getResultArray();
            $data = array(
                'title' => $post->title,
                'content' => $post->content,
                'image' => $post->image,
                'view_count' => $post->view_count,
                'comments' => $comments,
                'tags' => $tags,
                'categories' => $categories,
                'author_name' => $post->author_name,
                'author_slug' => $post->author_slug,
            );
        }else{
            throw PageNotFoundException::forPageNotFound('Oops count not find the post your looking for.');
        }

        return view('pages/electrical-substation', $data);
    }
}