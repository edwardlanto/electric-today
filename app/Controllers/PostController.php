<?php 

namespace App\Controllers;
use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\TagModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class PostController extends BaseController
    {

    public function __construct(){
        $this->db = \Config\Database::connect();
    }

    public function read($slug){
        $post = $this->db->table('post')->where('post.slug', $slug)->join('author', 'post.author_id = author.id', 'LEFT')->select('author.id as author_id, author_name, author_slug, post.*')
        ->orderBy('created_at', 'DESC')->get()->getRow();
        if($post){
            $tags = $this->db->table('tag')->select(['title', 'slug'])->where('post_id', $post->id)->get()->getResultArray();
            $categories = $this->db->table('category')->select(['title', 'slug'])->where('post_id', $post->id)->get()->getResultArray();
            $comments = new CommentModel;
            $comments = $comments->where('post_id', $post->id)->get()->getResultArray();
            $data = array(
                'title' => $post->title,
                'post_id' => $post->id,
                'author_id' => $post->author_id,
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

        return view('pages/post', $data);
    }
}