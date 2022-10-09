<?php
namespace App\Controller\Component;

use App\Model\Entity\UserAddress;
use Cake\Controller\Component;

class CartComponent extends Component {

    public function getcart()
    {
        return $this->getController()->getRequest()->getSession()->read('Shop');
    }

////////////////////////////////////////////////////////////////////////////////

    public function cart()
    {
//        $shop = $this->getcart();
//        // print_r($shop);
//        $quantity = 0;
//        $subtotal = 0;
//        $total = 0;
//        $order_item_count = 0;
//        // $order = $shop['Order'];
//        if (count($shop['Orderitems']) > 0) {
//            foreach ($shop['Orderitems'] as $item) {
//                $quantity += $item['quantity'];
//                $subtotal += $item['subtotal'];
//                $total += $item['subtotal'];
//                $order_item_count++;
//            }
//            $order['order_item_count'] = $order_item_count;
//            $order['quantity'] = $quantity;
//            $order['subtotal'] = sprintf('%01.2f', $subtotal);
//            $order['total'] = sprintf('%01.2f', $total);
//
//            $this->getController()->getRequest()->getSession()->write('Shop.Order', $order);
//            return true;
//        }
//        else {
//            $this->clear();
//            return false;
//        }
    }

////////////////////////////////////////////////////////////////////////////////

    public function add($id, $quantity = 1)
    {

        $controller = $this->_registry->getController();

        if(!is_numeric($quantity) || $quantity < 1) {
            $quantity = 1;
        }

//        $quantity = abs($quantity);
//
        $data = [];

        $product = $controller->Products->get($id, [
            'contain' => []
        ]);
        if ($product->sale_price != null){
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => sprintf('%01.2f', $product->sale_price)
        ];}else{
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => sprintf('%01.2f', $product->price)
            ];
        }
        if ($product->wholesale_price != null){
            $wholesale_data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'wholesale_price' => sprintf('%01.2f', $product->wholesale_price)
            ];}
        else{
            $wholesale_data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'wholesale_price' => sprintf('%01.2f', $data['price'])
            ];
        }

        $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
        $this->getController()->getRequest()->getSession()->write('Shop.WholesaleOrderitems.' . $id, $wholesale_data);

        $this->cart();

    }

////////////////////////////////////////////////////////////////////////////////

    public function remove($id) {
        if($this->getController()->getRequest()->getSession()->read('Shop.Orderitems.' . $id)) {
            $product = $this->getController()->getRequest()->getSession()->read('Shop.Orderitems.' . $id);
            $this->getController()->getRequest()->getSession()->delete('Shop.Orderitems.' . $id);
            $this->cart();
            return $product;
        }
        return false;
    }

////////////////////////////////////////////////////////////////////////////////

    public function clear()
    {
        $this->getController()->getRequest()->getSession()->delete('Shop');
    }

    public function addUserAddress($id){
        $controller = $this->_registry->getController();

        $data = [];

        $userAddress = $controller->UserAddress->get($id, [
            'contain' => []
        ]);
        $data = [
            'product_id' => $userAddress->id,
            'user_id' => $userAddress->user_id,
            'address_line_1' => $userAddress->address_line_1,
            'address_line_2' => $userAddress->address_line_2,
            'city' => $userAddress->city,
            'country' => $userAddress->country,
            'state' => $userAddress->state,
            'postcode' => $userAddress->postcode
        ];
        $this->getController()->getRequest()->getSession()->write('Shop.UserAddress.' . $id, $data);
    }
}
