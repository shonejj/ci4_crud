<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\RegModel;
use App\Models\UploadModel;
use App\Models\CountryModel;
use App\Models\StateModel;
use CodeIgniter\View\View;

class Reg extends ResourceController
{

    use ResponseTrait;
    // all users
    public function index()
    {

        $model = new RegModel();
        $data['reg'] = $model->orderBy('id', 'DESC')->findAll();


        // return $this->respond($data);    

        return view('reg');
    }

    public function redirect()
    {
        return view('login');
    }

    public function redirect1()
    {
        return view('reg');
    }



    public function redirect3()
    {


        $this->session = \Config\Services::session();
        $uname = $this->session->get('logname');
        $un = $uname['uname'];
        $id = $this->request->getGet('id');
        $model = new UploadModel();
        $data['check'] = $model->where('id', $id)->where('uname', $un)->first();
        if ($data) {
            return view('edit', $data);
        } else {
            echo " the record is not yours ";

        }
    }


    public function redirect4()
    {


        // $this->session = \Config\Services::session();
        // $uname=$this->session->get('logname');
        // $un=$uname['uname'];
        // return view('dash',$uname);

        $uname = $this->request->getGet('param1');

        // return view('dash',$uname);
        return view('dash', ['uname' => $uname]);



        // Do something with $param1


    }


    public function try ()
    {

        return view('load');
    }

    // create new user 
    public function add()
    {

        //      echo "hola";

        $model = new RegModel();
        $data = [
            'uname' => $this->request->getVar('uname'),
            'email' => $this->request->getVar('email'),
            'pswd' => $this->request->getVar('pswd'),
        ];



        $model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'user created successfully'
            ]
        ];
        return $this->respondCreated($response);

    }

    //login

    public function login()
    {

        $model = new RegModel();
        $data = $model->where('uname', $this->request->getVar('uname'))->first();
        if ($data) {
            // return $this->respond($data);
            if ($data['pswd'] == $this->request->getVar('pswd')) {
                $this->session = \Config\Services::session();
                $model = new RegModel();

                $data = $model->where('uname', $this->request->getVar('uname'))->first();
                $this->session->set('logname', $data);
                $uname = $this->session->get('logname');
                $un = $uname['uname'];

                // return view ('dash',$data);
                return $this->readredirect();

            } else {
                return $this->failNotFound('user name or password wrong');
            }
        } else {
            return $this->failNotFound('user name or password wrong');
        }
    }


    //logout 

    public function logout()
    {
        // Remove user's session data
        helper('session');
        session()->remove('logname');

        // Close the session
        session()->destroy();

        // Close the output buffer
        while (ob_get_level()) {
            ob_end_clean();
        }

        // Redirect the user to the home page
        return redirect()->to('/reg');
    }




    //upload post 

    public function upload()
    {


        $this->session = \Config\Services::session();


        $uname = $this->session->get('logname');
        $un = $uname['uname'];


        // echo json_encode($uname); 
        // echo $un;
// file upload :
        $file = $this->request->getFile('file');
        $ran = $file->getrandomname();
        $file->move('./public/upload', $ran);

        $model = new UploadModel();
        $store = [
            'title' => $this->request->getVar('title'),
            'discription' => $this->request->getVar('discription'),
            'category' => $this->request->getvar('category'),
            'uname' => $un,
            'file' => $ran,
        ];
        $model->insert($store);

        //   return view ('redirect1',$uname);
        return $this->redirect4();

    }




    public function readredirect()
    {


        return $this->redirect4();


    }


    public function see()
    {
        $this->session = \Config\Services::session();

        $pager = \Config\Services::pager();


        $uname = $this->session->get('logname');
        $un = $uname['uname'];


        $model = new UploadModel();
        $data1['check'] = $model->paginate();
        $data1['pager'] = $model->pager;
        $data = [
            'users' => $model->paginate(),
            'pager' => $model->pager
        ];

        return view('view', $data1, $data, $un);



    }


    //delete

    public function delete($id = null)
    {

        $this->session = \Config\Services::session();

        $uname = $this->session->get('logname');
        $un = $uname['uname'];


        $id = $this->request->getGet('id');

        $model = new UploadModel();
        $data = $model->where('id', $id)->where('uname', $un)->first();
        if ($data) {
            $model->delete($id, $un);
            $response = [
                'status' => 200,
                'error' => null,
                'messages' => [
                    'success' => 'post successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('the record you are trying to delete is not yours');
        }
    }

    // update
    public function update($id = null)
    {


        $this->session = \Config\Services::session();

        $uname = $this->session->get('logname');
        $un = $uname['uname'];
        $model = new UploadModel();
        $id = $this->request->getVar('id');
        $data = $model->where('id', $id)->where('uname', $un)->first();
        if ($data) {
            // $title=$this->session->get('title');
            // $discription=$this->session->get('discription');
            $data1 = [
                'title' => $this->request->getPost('title'),
                'discription' => $this->request->getPost('discription'),
            ];
            $Model = new UploadModel();
            $Model->update($id, $data1);
            return redirect()->to('/view');
        } else {
            echo "error";
        }
    }



    //search


    public function search()
    {
        $pager = \Config\Services::pager();
        $this->session = \Config\Services::session();


        $uname = $this->session->get('logname');
        $un = $uname['uname'];
        // echo $un; 
        $model = new UploadModel();
        $data1['check'] = $model->paginate();
        $data1['pager'] = $model->pager;
        $data3 = [
            'users' => $model->paginate(),
            'pager' => $model->pager
        ];

        $model = new UploadModel();
        if ($this->request->getVar('search')) {
            $search = $this->request->getVar('search');
            $data['check'] = $model->like('title', $search)->paginate();
            if ($data) {
                $data1['check'] = $model->like('title', $search)->paginate();
                return view('view', $data1, $data, $un, $data3);

            }
        } else {
            echo "error";
        }

    }

}