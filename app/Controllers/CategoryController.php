<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use CodeIgniter\HTTP\ResponseInterface;

class CategoryController extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();

        return view('/admin/category/index', [
            'categories' => $categories
        ]);
    }

    public function new()
    {
        return view('admin/category/new');
    }

    public function store()
    {
        $rules = [
            'name' => ['label' => 'Name', 'rules' => 'required'],
            'status' => ['label' => 'Status', 'rules' => 'required|in_list[active,inactive]'],
        ];
        $message = [
            'name' => ['required' => 'Please fill the {field}'],
            'status' => [
                'required' => 'Please fill the {field} field',
                'in_list' => 'Choose one from {field}'
            ]
        ];

        if (!$this->validate($rules, $message)) {
            return redirect()->back()->withInput();
        }
        $data = [
            'name' => $this->request->getVar('name'),
            'status' => $this->request->getVar('status'),
        ];
        $CategoryModel = new CategoryModel();
        $CategoryModel->insert($data);

        return redirect()->to('/admin/category')->with('message', 'Category Successully Saved');
    }

    public function show($id = null)
    {
        $category = new CategoryModel();
        $category = $category->find($id);

        if (!$category) {
            return redirect()->to('/admin/category')->with('error','Category Not Found');
        }

        return view('admin/category/show', [
            'category' => $category
        ]);
    }
    public function edit($id = null)
    {
        $category = new CategoryModel();
        $category = $category->find($id);

        if (!$category) {
            return redirect()->to('/admin/category')-> with('error', 'Category Not Found');
        }

        return view('admin/category/edit', [
            'category' => $category
        ]);
    }
    public function update($id = null)
    {
        $category = new CategoryModel();
        $category = $category->find($id);
        if (!$category) {
            return redirect()->to('/admin/category')-> with('error', 'Category Not Found');
        }
        $rules = [
            'name' => ['label' => 'Name', 'rules'=>'required'],
            'status' => ['label' => 'Status', 'rules' => 'required|in_list[active,inactive]']
        ];
        $message = [
            'name' => ['required' => 'Please fill the {field}'],
            'status' => [
                'required' => 'Please fill the {field} field',
                'in_list' => 'Choose one from {field}'
            ]
        ];

        if (!$this->validate($rules, $message)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'name' => $this->request->getVar('name'),
            'status' => $this->request->getVar('status'),
        ];
            $CategoryModel = new CategoryModel();
            $CategoryModel->update($category['id'], $data);
        return redirect()
        ->to('admin/category')
        ->with('message','Category Has Been Updated');        
    }
    public function delete($id = null)
    {
        $CategoryModel = new CategoryModel();
        $category = $CategoryModel->find($id);
        if (!$category) {
            return redirect()->to('/admin/category')-> with('error', 'Category Not Found');
        }
        $CategoryModel->delete($category['id']);
        return redirect()
        ->to('admin/category')
        ->with('message','Category Has Been Deleted');
    }
}