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
                'quantity' => 1,
                'price' => sprintf('%01.2f', $product->sale_price)
        ];}else{
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => 1,
                'price' => sprintf('%01.2f', $product->price)
            ];
        }
        if ($product->wholesale_price != null){
            $wholesale_data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => 1,
                'price' => sprintf('%01.2f', $product->wholesale_price)
            ];}
        else{
            $wholesale_data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => 1,
                'price' => sprintf('%01.2f', $data['price'])
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

    public function updateQty($id,$quantity){
        $controller = $this->_registry->getController();
        $cart = $this->getController()->getRequest()->getSession()->read('Shop');
        $user = $this->getController()->getRequest()->getSession()->read('Auth');
        $data = [];
        $product = $controller->Products->get($id, ['contain' => []]);
        if ($user->user_type_id == 2){
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => sprintf('%01.2f', $product->wholesale_price)
            ];
            $this->getController()->getRequest()->getSession()->write('Shop.WholesaleOrderitems.' . $id, $data);
        }
        elseif ($product->sale_price != null){
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => sprintf('%01.2f', $product->sale_price)
            ];
            $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
        }
        else{
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => sprintf('%01.2f', $product->price)
            ];
            $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
        }
    }

    public function qtyChange($id,$quantity,$change){
        $controller = $this->_registry->getController();
        $cart = $this->getController()->getRequest()->getSession()->read('Shop');
        $user = $this->getController()->getRequest()->getSession()->read('Auth');
        $data = [];
        $product = $controller->Products->get($id, ['contain' => []]);
        if ($change === 'minus') {
            $newquantity = $quantity - 1;
            if ($newquantity < 1) {$quantity = $quantity + 1;}
        if ($user !== null and $user->user_type_id == 2){
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity - 1,
                'price' => sprintf('%01.2f', $product->wholesale_price)
            ];
            $this->getController()->getRequest()->getSession()->write('Shop.WholesaleOrderitems.' . $id, $data);
        }
        elseif ($product->sale_price != null){
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity - 1,
                'price' => sprintf('%01.2f', $product->sale_price)
            ];
            $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
        }
        else{
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity - 1,
                'price' => sprintf('%01.2f', $product->price)
            ];
            $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
        }
        }
        else {
            if ($user !== null and $user->user_type_id == 2){
                $data = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'quantity' => $quantity + 1,
                    'price' => sprintf('%01.2f', $product->wholesale_price)
                ];
                $this->getController()->getRequest()->getSession()->write('Shop.WholesaleOrderitems.' . $id, $data);
            }
            elseif ($product->sale_price != null){
                $data = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'quantity' => $quantity + 1,
                    'price' => sprintf('%01.2f', $product->sale_price)
                ];
                $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
            }
            else{
                $data = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'quantity' => $quantity + 1,
                    'price' => sprintf('%01.2f', $product->price)
                ];
                $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
            }
        }

    }
}
