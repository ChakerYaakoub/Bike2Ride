$(document).ready(function () {
    $.ajax({
        url: 'AjaxEditProductPHP.php',
        type: 'get',
        dataType: 'JSON',
        success: function (response) {

            
            let len =(response.length) ;

            for (let i = 0; i<len; i++) {

             

                let product_id = response[i].product_id;
                let Category = response[i].Category;
                let title = response[i].title;
                let brandName = response[i].brandName;
                let color1 = response[i].color1;
                let color2 = response[i].color2;
                let price = response[i].price;
                let discount = response[i].discount;
                let priceAfter = response[i].priceAfter;
                let total = response[i].total;
                let ext = response[i].ext;
          

                let tr_str = "<tr>" +
                    " <td>" + product_id + "</td>" +

                    " <td> <b>" + Category + "</b> </td> " +

                    "<td> <img src='productsImages/" + product_id + "." + ext + "' alt='product img'></td> " +
                    "  <td><b> " + title + "</b> <br> " +
                    " <p>" + brandName + "</p>" +
                    "<p> Color: " + color1 + ", " + color2 + "</p> " +

                    " </td>" +

                    "<td>" + total + " Piece</td> " +


                    "<td> " +
                    "<p> <span class='line'> " + price + " Є</span> </p> " +

                    " <p> <span class='red'> Discount " + discount + "% </span> </p>" +

                    " <p> <span class='red'> " + priceAfter + " Є</span> </p> " +
                    "</td> " +

                    "<td> <a href='editProduct.php?product_id=" + product_id + "'> " +
                    "<button>Edit</button> " +
                    " </a> </td>" +

                    "<td>   <button class='remove' onclick='removeRow(this," + product_id + ")'> remove </button></td> " +
                    "</tr>";



                $("#empTable #myTable").append(tr_str);
                
            }

        }
    });
});







