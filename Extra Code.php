<?php
class CartModel extends CI_Model
{
	//This function runs only if Cart has any Data
	function cartSyncDB($sessionCartContent)
	{
		$userData = "";
		//If User Loggedin
		if($userData = $this->session->userdata('userData')){

			//If User has Database Cart
			$DBcartData = $this->db->where('ID',$userData['ID'])->get('customers')->row('cartdata');

			//If DB_cart is Empty
			if(!unserialize($DBcartData)){

			//Converting Session_cart Array data into string
			$sessionCartContent_string = serialize($sessionCartContent);
			
				if($sessionCartContent){
					$this->db->where('ID',$userData['ID'])->update('customers',
						['cartdata'=>$sessionCartContent_string]);
				}
			}

			//Means DB_cart Has Data
			else{
				$DBCartDataArray = unserialize($DBcartData); // fetching database cart data and coverting into array

				foreach($DBCartDataArray as $key => $val){
					foreach($sessionCartContent as $key_ => $val_){
				    	if($key == $key_){
				        	$qty = $val['qty']+$val_['qty'];
				            $DBCartDataArray[$key]['qty'] = $qty;
				        }
				    }
				}
				
				//Merged Data of DB and Session Carts
				$mergedCart = $DBCartDataArray + $sessionCartContent;
				$mergedCart_string = serialize($mergedCart);
				$this->db->where('ID',$userData['ID'])->update('customers',['cartdata'=>$mergedCart_string]);

				return $mergedCart;
				}

				return $sessionCartContent;	
			}
			else{
				return $sessionCartContent;
			}
		}

		//Fetch Specfic Itinerary Data
		function getProductData($ID){
			return $this->db->where('ID',$ID)->get('products')->row_array();
		}
}

?>