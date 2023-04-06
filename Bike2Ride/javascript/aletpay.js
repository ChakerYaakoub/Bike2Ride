
function alertPay(){
    swal({
        title: "Thank you for dealing with our company",
        text: " your order will arrive soon!",
      
        icon: "success",
        buttons: {
        continue1: "CONTINUE SHOPPING",
       
        cart:  "GO TO HISTORICAL ",
    
      },cartButtonColor: "black",
    
        
    
        
        
    }).then((value) => {
      switch (value) {
     
     case "cart":
     window.location.href = `historical.php` ;

     case "continue1":
        window.location.href = `historical.php` ;

     
    
    
    }
      
    
    
    });
    window.setTimeout(function(){window.location.href= `historical.php`},7000);


}

