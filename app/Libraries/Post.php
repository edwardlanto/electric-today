<?php 

namespace App\Libraries;

class Post{
    
    public function renderPost($params){
        return view('components/post_item', $params);
    }
}
