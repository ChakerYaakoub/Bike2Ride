
function AddToCart(login=0) {
    if(login==1) {
    var userId = document.getElementById("userId").value;
    var product_id = document.getElementById("product_id").value;
    var size = document.getElementById("size").value;
    var quantity = document.getElementById("number").value;
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'userId=' + userId + '&product_id=' + product_id + '&size=' + size + '&quantity=' + quantity;
    if (userId == '' || product_id == '' || size == '' || quantity == '') {
    alert("Please Fill All Fields");
    } else {
    // AJAX code to submit form.
    $.ajax({
    type: "POST",
    url: "AddToCart.php",
    data: dataString,
  
    success: function myFunctionalert() {
        if (form.checkValidity()) {
         
         
          swal({
            title: "You have successfully added this item ",
          
            icon: "success",
            buttons: {
            cancel: "CONTINUE SHOPPING",
           
            cart:  "Order Now",
        
          },cartButtonColor: "black",
        
            
        
            
            
        }).then((value) => {
          switch (value) {
         
         case "cart":
         window.location.href = `cart.php` ;}
          
        
        
        });
        }
      }
      
    });
    }
    return false; }
    
    else{
        swal({
            title: "You must login first !!",
            icon: "info",
          
           
            buttons: {
            cancel: "Keep browsing",
           
            cart:  "Login Now",
        
          },cartButtonColor: "black",
        
            
        
            
            
        }).then((value) => {
          switch (value) {
         
         case "cart":
         window.location.href = `user.php` ;}
          
        
        
        });

    }
    }