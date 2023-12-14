<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function __construct(){
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $td_automation = $this->db->query("SELECT
        post.title,
        post.image,
        post.slug,
        post.excerpt,
        (
          SELECT COUNT(*)
          FROM comment
          WHERE comment.post_id = post.id
        ) AS comment_count,
        (
          SELECT author_name
          FROM author
          WHERE post.author_id = author.id
        ) AS author_name
      FROM post
      WHERE post.is_menu != 1 ORDER BY created_at")->getResultArray();
      $data = array(
        'td_automation' => $td_automation
      );
      return view('pages/home', $data);
    }


}
 