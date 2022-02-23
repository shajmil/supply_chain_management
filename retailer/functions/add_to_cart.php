<?php
session_start();
if(isset($_POST["add_to_cart"]) )
{
  if( $_POST['quantity'] != 0)
  {
  if(isset($_SESSION["shopping_cart"]))
  {
   

    $item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
   if(!in_array($_GET['id'], $item_array_id)) {
         $count = count($_SESSION["shopping_cart"]);
         $item_array = array(
          'item_id' => $_GET['id'],
          'item_name' => $_POST['hidden_name'],
          'item_price' => $_POST['hidden_price'],
          'item_quantity' => $_POST['quantity']
          ); 
         $_SESSION["shopping_cart"][$count] = $item_array;
         
    }
    else{

      echo '<script>alert("ITEM IS ALREADY ADDED") </script>' ;
    
    }


  }else{
           $item_array = array(
                                'item_id' => $_GET['id'],
                                'item_name' => $_POST['hidden_name'],
                                'item_price' => $_POST['hidden_price'],
                                'item_quantity' => $_POST['quantity']


                               );
         $_SESSION["shopping_cart"][0] = $item_array;
         

       }     

      }
      header("Location:../cart_list.php");
}
if(isset($_GET["action"]))
{
 if($_GET["action"] == "delete")
 {
   foreach($_SESSION["shopping_cart"] as $keys => $values )
   {
     if($values["item_id"] == $_GET["id"])
     {
       unset($_SESSION["shopping_cart"][$keys]);
       echo '<script>alert("item removed")</script>';
       header("Location:../cart_list.php"); 
     }
   }
 }

}
?>