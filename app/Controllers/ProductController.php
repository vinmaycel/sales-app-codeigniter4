<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class ProductController extends ResourceController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }



    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $productModel = $this->productModel;
        $productModel->select('products.*, c.name category_name');
        $productModel->join('categories c', 'products.category_id = c.id');

        $products = $productModel->findAll();
        $data = [
            'products' => $products
        ];
        return view('admin/product/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return ResponseInterface
     */
    public function new()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->builder()
                    ->select("name,id")
                    ->get()
                    ->getResultArray();
        return view('admin/product/new',[
            'categories'=>$categories
        ]);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return ResponseInterface
     */
    public function create()
    {

        $rules = [
            'category_id' => ['label' => 'Category', 'rules' => 'required'],
            'name' => ['label' => 'Name', 'rules' => 'required'],
            'description' => ['label' => 'description', 'rules' => 'required'],
            'price' => ['label' => 'price', 'rules' => 'required'],
            'sku' => ['label' => 'sku', 'rules' => 'required'],
            'image' => [
                'label' => 'Image',
                'rules' => [
                    'uploaded[image]',
                    'is_image[image]',
                    'mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp'
                ],
            ],
            'status' => ['label' => 'Status', 'rules' => 'required|in_list[active,inactive]'],
        ];
        $message = [
            'category_id' => ['required' => 'Please fill the {field}'],
            'name' => ['required' => 'Please fill the {field}'],
            'description' => ['required' => 'Please fill the {field}'],
            'price' => ['required' => 'Please fill the {field}'],
            'sku' => ['required' => 'Please fill the {field}'],
            'image' => ['required' => 'Please fill the {field}'],
            'status' => [
                'required' => 'Please fill the {field} field',
                'in_list' => 'Choose one from {field}'
            ]
        ];

        if (!$this->validate($rules, $message)) {
            return redirect()->back()->withInput();
        }

        $image = $this->request->getFile('image');
        $filename = $image->getRandomName();
        
        $data = $this->request->getVar();
        $data['image'] = $filename;
        $this->productModel->insert($data);

        $image->move('img/uploads', $filename);
        return "data saved";
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
