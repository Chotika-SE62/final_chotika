<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RegisModel;
use App\Models\UserModel;

class AddDataRegister extends Controller {
    public function index() {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('adddataregister', $data);
    }
    public function regis() {
        $session = session();
        $RegisModel = new RegisModel();
        $data = [
            'ID' => $this->request->getVar('ID'),
            'member' => $session->get('id_card'),
            'category_run' => $this->request->getVar('category')
        ];
        $RegisModel->insert($data);
            return redirect()->to('/username');
    }
}
