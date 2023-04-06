
function deletFav(product_id,userId) {
    var product_id = product_id;
    var userId = userId;
    




    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'userId=' + userId + '&product_id=' + product_id;



        if (userId == '' || product_id == '') {
            alert("Please Fill All Fields");
        } else {
            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "deletfav.php",
                data: dataString ,
                success: window.setTimeout(function(){location.reload()})
                
                // 


            }
            )
        }}