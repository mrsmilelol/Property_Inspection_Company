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

    public function add($id, $quantity = 1)
    {
        //Registering the controller from which the Component will be called
        $controller = $this->_registry->getController();

        if(!is_numeric($quantity) || $quantity < 1) {
            $quantity = 1;
        }
        $data = [];
        //Getting the product object by its ID
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
        //Inserting the values into the session
        $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
        $this->getController()->getRequest()->getSession()->write('Shop.WholesaleOrderitems.' . $id, $wholesale_data);

        $this->cart();

    }

////////////////////////////////////////////////////////////////////////////////

    public function remove($id) {
        //Check if the product exists in the Shop session
        if($this->getController()->getRequest()->getSession()->read('Shop.Orderitems.' . $id)) {
            //Reading the product information from the Shop session by its ID
            $product = $this->getController()->getRequest()->getSession()->read('Shop.Orderitems.' . $id);
            //Deleting the product from the Shop session
            $this->getController()->getRequest()->getSession()->delete('Shop.Orderitems.' . $id);
            $this->cart();
            return $product;
        }
        return false;
    }

////////////////////////////////////////////////////////////////////////////////

    public function clear()
    {
        //Clearing the Shop session
        $this->getController()->getRequest()->getSession()->delete('Shop');
    }

    public function updateQty($id,$quantity){
        //Registering the controller from which the Component will be called
        $controller = $this->_registry->getController();
        //Reading the product information from the Shop and Auth session
        $cart = $this->getController()->getRequest()->getSession()->read('Shop');
        $user = $this->getController()->getRequest()->getSession()->read('Auth');
        $data = [];
        //Getting the product object by its ID
        $product = $controller->Products->get($id, ['contain' => []]);
        if ($user->user_type_id == 2){
            //Populating the data array with the product information for wholesale customers
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => sprintf('%01.2f', $product->wholesale_price)
            ];
            ////Inserting the values into the session
            $this->getController()->getRequest()->getSession()->write('Shop.WholesaleOrderitems.' . $id, $data);
        }
        elseif ($product->sale_price != null){
            //Populating the data array with the product information if there is sale price
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => sprintf('%01.2f', $product->sale_price)
            ];
            //Inserting the values into the session
            $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
        }
        else{
            //Populating the data array with the product information for regular customer
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => sprintf('%01.2f', $product->price)
            ];
            //Inserting the values into the session
            $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
        }
    }

    public function qtyChange($id,$quantity,$change){
        //Registering the controller from which the Component will be called
        $controller = $this->_registry->getController();
        //Reading the product information from the Shop and Auth session
        $cart = $this->getController()->getRequest()->getSession()->read('Shop');
        $user = $this->getController()->getRequest()->getSession()->read('Auth');
        $data = [];
        //Getting the product object by its ID
        $product = $controller->Products->get($id, ['contain' => []]);
        //Check if the quantity needs to be decreased
        if ($change === 'minus') {
            $newquantity = $quantity - 1;
            if ($newquantity < 1) {$quantity = $quantity + 1;}
            // Check if the user is Wholesale user
        if ($user !== null and $user->user_type_id == 2){
            //Populating the data array with the product information for wholesale customers
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity - 1,
                'price' => sprintf('%01.2f', $product->wholesale_price)
            ];
            //Inserting the values into the session
            $this->getController()->getRequest()->getSession()->write('Shop.WholesaleOrderitems.' . $id, $data);
        }
        elseif ($product->sale_price != null){
            //Populating the data array with the product information with sale price
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity - 1,
                'price' => sprintf('%01.2f', $product->sale_price)
            ];
            //Inserting the values into the session
            $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
        }
        else{
            //Populating the data array with the product information for regular customer
            $data = [
                'product_id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity - 1,
                'price' => sprintf('%01.2f', $product->price)
            ];
            //Inserting the values into the session
            $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
        }
        }
        //If not decreasing then the quantity should be increased
        else {
            //Check if the user is the Wholesale user
            if ($user !== null and $user->user_type_id == 2){
                //Populating the data array with the product information for wholesale customer
                $data = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'quantity' => $quantity + 1,
                    'price' => sprintf('%01.2f', $product->wholesale_price)
                ];
                //Inserting the values into the session
                $this->getController()->getRequest()->getSession()->write('Shop.WholesaleOrderitems.' . $id, $data);
            }
            elseif ($product->sale_price != null){
                //Populating the data array with the product information if there is sale price
                $data = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'quantity' => $quantity + 1,
                    'price' => sprintf('%01.2f', $product->sale_price)
                ];
                //Inserting the values into the session
                $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
            }
            else{
                //Populating the data array with the product information for regular customer
                $data = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'quantity' => $quantity + 1,
                    'price' => sprintf('%01.2f', $product->price)
                ];
                //Inserting the values into the session
                $this->getController()->getRequest()->getSession()->write('Shop.Orderitems.' . $id, $data);
            }
        }

    }

    public function addUserAddress($userAddress){
        $data = [];
        $states = ['1' => 'VIC','2' => 'NSW','3' => 'SA','4' => 'WA','5' => 'NT','6' => 'QLD','7' => 'TAS'];
        $id = $userAddress['user_id'];
        if (is_int(intval($userAddress['state'])) != 0){
            $data = [
                'user_id' => intval($userAddress['user_id']),
                'address_line_1' => $userAddress['address_line_1'],
                'address_line_2' => $userAddress['address_line_2'],
                'city' => $userAddress['city'],
                'country' => $userAddress['country'],
                'state' => $states[$userAddress['state']],
                'postcode' => $userAddress['postcode']
            ];
        }
        else{
            $data = [
                'user_id' => intval($userAddress['user_id']),
                'address_line_1' => $userAddress['address_line_1'],
                'address_line_2' => $userAddress['address_line_2'],
                'city' => $userAddress['city'],
                'country' => $userAddress['country'],
                'state' => $userAddress['state'],
                'postcode' => $userAddress['postcode']
            ];
        }
        $this->getController()->getRequest()->getSession()->write('Shop.UserAddress.' . $id, $data);
    }
}
