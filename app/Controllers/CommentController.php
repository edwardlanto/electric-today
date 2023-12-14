<?php 

namespace App\Controllers;
use App\Models\CommentModel;
use CodeIgniter\I18n\Time;

class CommentController extends BaseController
    {

    public function __construct(){
        $this->db = \Config\Database::connect();
        $this->validation = \Config\Services::validation();
    }

    protected $helpers = ['form'];


    public function create(){
        try{
            $rules = [
                'content' => 'required|min_length[5]',
            ];
    
            if (! $this->validate($rules)) {
                $data = [
                    'success' => 0,
                    'message' => validation_errors()
                ];
                return $this->response->setStatusCode(406)->setJSON($data);
            }
    
            $comment = new CommentModel();
            $post_data = [
                'post_id' => htmlspecialchars(intval($this->request->getPost('post'))),
                'content' => htmlspecialchars($this->request->getPost('content'))
            ];
            $comment->insert($post_data);
            if($this->db->affectedRows() == 1){
                $data = [
                    'success' => 1,
                    'id' => $comment->getInsertID(),
                    'message' => 'Successfully created a new comment.',
                ];
                return $this->response->setStatusCode(200)->setJSON($data);
            }
        }catch(\Exception $e){
            $data = [
                'success' => 0,
                'message' => $e->getMessage()
            ];
            return $this->response->setStatusCode(500)->setJSON($data);
        }
    }
}

