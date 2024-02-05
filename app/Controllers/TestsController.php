<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestModel;
use App\Models\TestsModel;
use CodeIgniter\HTTP\ResponseInterface;

class TestsController extends BaseController
{
    public function index()
    {
        $TestModel = new TestsModel();
        $Tests = $TestModel->findAll();

        return view('/admin/test/index', [
            'Tests' => $Tests
        ]);
    }

    public function new()
    {
        return view('admin/test/new');
    }

    public function store()
    {
        $rules = [
            'name' => ['label' => 'Name', 'rules' => 'required'],
            'jabatan' => ['label' => 'jabatan', 'rules' => 'required|in_list[staff,direktur]'],
        ];
        $message = [
            'name' => ['required' => 'Please fill the {field}'],
            'jabatan' => [
                'required' => 'Please fill the {field} field',
                'in_list' => 'Choose one from {field}'
            ]
        ];

        if (!$this->validate($rules, $message)) {
            return redirect()->back()->withInput();
        }
        $data = [
            'name' => $this->request->getVar('name'),
            'jabatan' => $this->request->getVar('jabatan'),
        ];
        $TestModel = new TestsModel();
        $TestModel->insert($data);

        return redirect()->to('/admin/test')->with('message', 'Test Successully Saved');
    }

    public function show($id = null)
    {
        $Test = new TestsModel();
        $Test = $Test->find($id);

        if (!$Test) {
            return redirect()->to('/admin/test')->with('error','Test Not Found');
        }

        return view('admin/test/show', [
            'Test' => $Test
        ]);
    }
    public function edit($id = null)
    {
        $Test = new TestsModel();
        $Test = $Test->find($id);

        if (!$Test) {
            return redirect()->to('/admin/test')-> with('error', 'Test Not Found');
        }

        return view('admin/test/edit', [
            'Test' => $Test
        ]);
    }
    public function update($id = null)
    {
        $Test = new TestsModel();
        $Test = $Test->find($id);
        if (!$Test) {
            return redirect()->to('/admin/test')-> with('error', 'Test Not Found');
        }
        $rules = [
            'name' => ['label' => 'Name', 'rules'=>'required'],
            'jabatan' => ['label' => 'jabatan', 'rules' => 'required|in_list[staff,direktur]']
        ];
        $message = [
            'name' => ['required' => 'Please fill the {field}'],
            'jabatan' => [
                'required' => 'Please fill the {field} field',
                'in_list' => 'Choose one from {field}'
            ]
        ];

        if (!$this->validate($rules, $message)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'name' => $this->request->getVar('name'),
            'jabatan' => $this->request->getVar('jabatan'),
        ];
            $TestModel = new TestsModel();
            $TestModel->update($Test['id'], $data);
        return redirect()
        ->to('admin/test')
        ->with('message','Test Has Been Updated');        
    }
    public function delete($id = null)
    {
        $TestModel = new TestsModel();
        $Test = $TestModel->find($id);
        if (!$Test) {
            return redirect()->to('/admin/test')-> with('error', 'Test Not Found');
        }
        $TestModel->delete($Test['id']);
        return redirect()
        ->to('admin/test')
        ->with('message','Test Has Been Deleted');
    }
}