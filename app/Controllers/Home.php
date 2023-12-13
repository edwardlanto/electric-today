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
        post.excerpt,
        (
          SELECT COUNT(*)
          FROM comment
          WHERE comment.post_id = post.id
        ) AS comment_total
      FROM post
      LEFT JOIN author ON post.author_id = author.id
      WHERE post.is_menu = 0 ORDER BY created_at")->getResultArray();

      $data = array(
        'td_automation' => $td_automation
      );
      return view('pages/home', $data);
    }


}
 