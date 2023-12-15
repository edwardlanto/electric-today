<?php 

namespace App\Libraries;

class Layout{

    public function __construct(){
        $this->db = \Config\Database::connect();
    }
    
    public function renderFooter($params){
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
        author.author_name
    FROM
        post
    JOIN
        tag ON post.id = tag.post_id
    LEFT JOIN
        author ON post.author_id = author.id
    WHERE
        post.is_menu = 1
        AND tag.slug = 'td-automation'
    GROUP BY
    post.title, post.image, post.slug, post.excerpt, author.author_name, post.id, tag.slug
    ORDER BY
        post.created_at")->getResultArray();
    $data = array(
      'td_automation' => $td_automation
    );
    return view('templates/footer', $data);
    }

    public function renderHeader(){
        $td_automation = $this->db->query("SELECT
        post.title,
        post.image,
        post.slug,
        tag.slug AS tag_slug,
        tag.id
    FROM
        post
    JOIN
        tag ON post.id = tag.post_id
    WHERE
        post.is_menu = 1
        AND tag.slug = 'td-automation'
    GROUP BY
        post.title, tag.id
    ORDER BY
        post.created_at")->getResultArray();
        $data = array(
            'td_automation' => $td_automation
        );
        return view('templates/header', $data);
    }
}
