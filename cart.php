<?php
session_start();

?>

<body>
<?php include "navbar.php"; ?>

<div class="container" style="margin-top:60px">
<h2>My Shopping Cart</h2><hr>

  <div id="loadCart">

  </div>
</div>

<script type="text/javascript">
// READ records using AJAX shorthand get request
function loadCart() {
    $.get("load_cart.php", function (data, status) {
        $("#loadCart").html(data);
    });
}


$(document).ready(function () {
    // READ records on page load
    loadCart(); // calling function
});

function changeNoItems(id){
	var items = $("#quantity" + id).val();
	var price = $("#price" + id).text();
	var newPrice = (items * price);
	$("#subTotal" + id).text(newPrice);
	addToCart(id);
	loadCart();

}

	function addToCart(itemId){
      var quantity = $("#quantity"+itemId).val();
      console.log("This is item ID:" + itemId);
      console.log("This is the quantity:" + quantity);
    

          $.ajax({
              url:"add_to_cart.php",
              method:"POST",
              data:
                    {
                      item_id: itemId,
                      item_quantity: quantity
                    },
                dataType:"text",
                  success:function(data, status){
                  $('a[href="cart.php"]').html(data);
            }
          })
    }

    function removeFromCart(id){
    	// console.log("You are deleting product" + id);
    	var ans = confirm("Are you sure you want to delete?");
    	if(ans){
    		$.ajax({
    			url:"remove_from_cart.php",
    			method: "POST",
    			data:{
    				x:id
    				},
    				dataType:"text",
    				success: function(data, status){
    					$('a[href="cart.php"]').html(data);
    					loadCart();
    				}
    		});
    	}
    }

    

    </script>