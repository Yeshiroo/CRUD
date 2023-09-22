<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\ProductModel;


class ProductController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }
    public function edit($Id)
    {
        $data = [
            'product'=> $this->product->findAll(),
            'pro' => $this->product->where('Id', $Id)->first(),
        ];
        
        return view('products', $data);
        
    }
    public function delete($Id)
    {
        $this->product->delete($Id);
        return redirect()->to('/product');
    }
    public function save()
    {
        $Id =$_POST['Id'];
        $data =  [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity'   => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];
        if($Id!= null) {
            
            $this->product->set($data)->where('Id', $Id)->update();
        }else{
            $this->product->save($data);
        }
        return redirect()->to('/product');


    }
    public function product($product)
    {
        return view('Viewss', $data);
    }
    public function Yeshiroo()
    {
        $data['product']= $this->product->findAll();
        return view('Viewss', $data);
    }
    public function index()
    {
        //
    }
}
