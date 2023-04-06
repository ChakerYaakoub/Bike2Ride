
function editCart(product_id, size,quantity,what) {
 
    
    var product_id = document.getElementById(product_id).value;
    var size = document.getElementById(size).value;
    var quantity = document.getElementById(quantity).value;
    // Returns successful data submission message when the entered information is stored in database.
    var dataString =  '&product_id=' + product_id + '&size=' + size + '&quantity=' + quantity + '&what=' + what;
    if ( product_id == '' || size == '' || quantity == '' ) {
    alert("Please Fill All Fields");
    } else {
    // AJAX code to submit form.
    $.ajax({
    type: "POST",
    url: "ajaxEditRemoveCart.php",
    data: dataString,
  
    success:  window.setTimeout(function(){location.reload()},1000)
     
      
    });
    }
    return false; 
    
   
    }