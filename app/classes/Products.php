<?php

namespace App\classes;

class Products
{
    public $products =[];
    public function allProducts()
    {
        $this->products=[
          0=>[
            'id' => 1,
            'name' => 'white shirt',
            'price' => '1000',
              'image' =>'assets/img/7.jpg',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolorum eaque expedita explicabo illum iusto qui vel? Cum facere repellendus totam? Alias
    autem commodi, dolorum facere fugiat quasi rerum tempore.',
          ],
            1=>[
                'id'=>2,
                'name' => 'White Shirt',
                'price' =>'2000',
                'image' => 'assets/img/8.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolorum eaque expedita explicabo illum iusto qui vel? Cum facere repellendus totam? Alias
    autem commodi, dolorum facere fugiat quasi rerum tempore.',
                ],
            2 => [
                'id'=>3,
                'name' => 'shoe',
                'price' =>'2400',
                'image' => 'assets/img/9.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolorum eaque expedita explicabo illum iusto qui vel? Cum facere repellendus totam? Alias
    autem commodi, dolorum facere fugiat quasi rerum tempore.',
                  ],
            3=> [
                'id'=>3,
                'name' => 'share',
                'price' =>'3000',
                'image' => 'assets/img/9.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolorum eaque expedita explicabo illum iusto qui vel? Cum facere repellendus totam? Alias
    autem commodi, dolorum facere fugiat quasi rerum tempore.',
                 ],
            4=>[
                'id'=>4,
                'name' => 'black pant',
                'price' =>'1800',
                'image' => 'assets/img/9.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolorum eaque expedita explicabo illum iusto qui vel? Cum facere repellendus totam? Alias
    autem commodi, dolorum facere fugiat quasi rerum tempore.',
                ],
            5=> [
                'id'=>5,
                'name' => 'kid shirt',
                'price' =>'3500',
                'image' => 'assets/img/10.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolorum eaque expedita explicabo illum iusto qui vel? Cum facere repellendus totam? Alias
    autem commodi, dolorum facere fugiat quasi rerum tempore.',
            ],
        ];
        return $this->products;
    }

}