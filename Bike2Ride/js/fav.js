function AddToFav(login=0,fav=0) {
    if(login==1) {
    var userId = document.getElementById("userId").value;
    var product_id = document.getElementById("product_id").value;
  
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'userId=' + userId + '&product_id=' + product_id ;


    if (userId == '' || product_id == '') {
        alert("Please Fill All Fields");
        } else {
        // AJAX code to submit form.
        $.ajax({
        type: "POST",
        url: "favPro.php",
        data: dataString,





    }}