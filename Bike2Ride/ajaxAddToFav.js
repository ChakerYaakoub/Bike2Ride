
function AddToFav(login=0,fav=0) {
    if(login==1) {
    var userId = document.getElementById("userId").value;
    var product_id = document.getElementById("product_id").value;
  
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'userId=' + userId + '&product_id=' + product_id ;
    if(fav==0){


        if (userId == '' || product_id == '') {
            alert("Please Fill All Fields");
            } else {
            // AJAX code to submit form.
            $.ajax({
            type: "POST",
            url: "AddToFav.php",
            data: dataString,
          
            success:
         
            function myFunctionalert() {
                if (form.checkValidity()) {
                 
                 
                  swal({
                    title: "This item has been added to your wish list.",
                    // You have successfully added this item 
                  
                    icon: "success",
                    buttons: {
                    cancel: "CONTINUE SHOPPING",
                   
                    cart:  " MY WISHLIST",
                
                  },cartButtonColor: "black",
                
                    
                
                    
                    
                }).then((value) => {
                  switch (value) {
                 
                 case "cart":
                 window.location.href = `fav.php` ;}
                  
                
                
                });
                }
              }
              
            });
            } window.setTimeout(function(){location.reload()},3000);
        
    }else{


        if (userId == '' || product_id == '') {
            alert("Please Fill All Fields");
            } else {
            // AJAX code to submit form.
            $.ajax({
            type: "POST",
            url: "AddToFav.php",
            data: dataString,
          
            success:
         
            function myFunctionalert() {
                if (form.checkValidity()) {
                 
                 
                  swal({
                    title: "This item has been removed from your wishlist.",
                    // You have successfully added this item 
                  
                    icon: "error",
                    buttons: {
                    cancel: "CONTINUE SHOPPING",
                   
                    cart:  " MY WISHLIST",
                
                  },cartButtonColor: "black",
                
                    
                
                    
                    
                }).then((value) => {
                  switch (value) {
                 
                 case "cart":
                 window.location.href = `fav.php` ;
                 
                }
                  
                
                
                });
                }
              } 
              
            });
            }  window.setTimeout(function(){location.reload()},3000);


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