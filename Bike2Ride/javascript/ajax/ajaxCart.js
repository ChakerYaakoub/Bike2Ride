$(document).ready(function () {
    $.ajax({
        url: 'ajaxCart.php',
        type: 'get',
        dataType: 'JSON',
        success: function (response) {

            
            let len =(response.length) ;

            if (len>0){

            
           let TotalProductValue=0;//ok
            let Shipping =0;//ok
            let userPoint = response[0].userPoint;//ok
            let userId = response[0].userId;//ok
            let addressU = response[0].addressU;//ok
            let allPoints=0;//ok
            let TotalAmount=0;//ok
            let vat=0;//ok
            let editId=0;
           
            

            for (let i = 0; i<len; i++) {



                editId=editId+1;

               
                let cart_quantity = response[i].cart_quantity;//ok
                let product_size = response[i].product_size;//ok

                let points = response[i].points;//ok
                points=points*cart_quantity;
               

                let maxQuantity = response[i].maxQuantity;//pk

              

             

                let product_id = response[i].product_id;//ok
                let title = response[i].title;//ok
                let brandName = response[i].brandName;//ok
                let price = response[i].price;//ok
                let priceAfter = response[i].priceAfter;//ok
                let ext = response[i].ext;//ok

                let SumtotalProduct=cart_quantity*priceAfter;//ok

                Shipping=Shipping+(cart_quantity*3);//ok
                

                TotalProductValue=TotalProductValue+SumtotalProduct;//ok
                allPoints=allPoints+points;//ok


                // " + product_id + "

              
               
          

                let tr_str = 
                "<tr><td id='forimg'> <a href='echoproduct.php?product_id=" + product_id + "'><img src='productsImages/" + product_id + "." + ext + "' id='proImag' alt='product'> </a>  </td>" +

                "<td class='discpp'> <p class='pp1'> " + title + " </p>"+

                "<p class='pp2'>  Wheel size : <b> " + product_size + " </b> / <span class='pp3'> Still <b> " + maxQuantity + " </b> in stock </span> </p>"+

                " <p class='pp2'>   Brand : <b> " + brandName + " </b>  </p>"+

                "<p class='pp4'> <span class='pp44'> QUANTITY : </span>"+


             
                  " <input type='number' id=" + editId + "  name='product_id' value= " + product_id + " hidden readonly>"+
                " <input type='text' id=" + product_id + product_size + "   name='size' value='" + product_size + "' hidden  readonly>"+
              
              
               

                "<input type='button'  onclick='decrementValue(\""+ product_size + product_id+ "\") ;editCart(" + editId + ",\""+ product_id + product_size+ "\",\""+ product_size + product_id+ "\",1);' value='-' />"+

                " <input type='number' name='quantity' value='" + cart_quantity + "' size='1' max='" + maxQuantity + "' min='0' id= " + product_size + product_id + " />"+

                " <input type='button' onclick='incrementValue(\""+ product_size + product_id+"\");editCart(" + editId + ",\""+ product_id + product_size+ "\",\""+ product_size + product_id+ "\",1); ' value='+' />   </p>"+

                "<p><span class='pp5'> <span class='pp44'> PRICE : </span> <span class='s2'> " + priceAfter + " € </span>"+

                "<span style='text-decoration:line-through;' class='s1'> " + price + " € </span> <span class='s0'> "+

                " <sup>RRP1</sup> </span> </span>"+

                " <span class='pp6'> <span class='pp44'> SUM : </span><span class='s2'> " + SumtotalProduct.toFixed(2) + " € </span>   </span>  </p> </td>"+

                "<td class='tabremove' style='  border-spacing: 55px !important;'>"+

                " <p> <button type='button' class='remove' onclick='editCart(" + editId + ",\""+ product_id + product_size+ "\",\""+ product_size + product_id+ "\",0); removeRow(this) ;'><i class='fa-regular fa-trash-can'></i></button></p></td>"+

                "   </tr> "

                
                
                ;



                $("#tableProduct #myTable").append(tr_str);
                
            }


            if(userPoint>=100 || allPoints>=100){//ok
                Shipping=0;
               
                let free1="<i class='fa-regular fa-circle-check'></i> Over than <b> 100 points </b> .. Get free delivery!"
                $(" #free1").append(free1);

            } 

            

            if(userPoint<100 && allPoints<100 ){
                let free1="<i class='fa-regular fa-circle-check'></i> delivery : 3 euros / piece <br> <i class='fa-regular fa-circle-check'></i> Collect 100 points and Get free delivery "
                $(" #free1").append(free1);

            }
          
            TotalAmount=TotalProductValue + Shipping;
            vat= TotalAmount * 20/100 ;

            
          
            

             

            $(" #addressU").append(addressU); 
            $(" #TotalProductValue").append(TotalProductValue.toFixed(2));
            $(" #Shipping").append(Shipping.toFixed(2)); 
            $(" #TotalAmount").append(TotalAmount.toFixed(2)); 
            $(" #vat").append(vat.toFixed(2)); 

       
       
            




        }else{
            videImg="<img src='photo/vide.png' width=100%> ";

            $("#tableProduct #myTable").append(videImg);

            $("#CHECKOUT").prop('disabled', true);
            $("#CONTINUE").prop('disabled', true);
            $("#BUYNOW").prop('disabled', true);


        }
                                     }
    });
});







