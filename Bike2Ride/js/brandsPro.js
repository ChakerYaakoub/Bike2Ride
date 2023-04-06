const f = fetch(`http://localhost/phpbike2ride/brandProduct.php?brandName=${data[i].brandName}`)  
// const f = fetch('http://localhost/bike2ride/php/brand.php')  
  .then(response => response.json())
  .then(data => show_api_data(data));

  function show_api_data(data){

    let branddiv = '';
    for(i in data){
        branddiv += `
        
        <div class="col-sm-6 col-md-4">
        <a href="echobike2.html">
            <div class="product">

                <div class="product-img">
                    <img src ="${data[i].image}"
                        alt="">
                    <div class="product-label">
                    </div>
                </div>
                <div class="product-body">
                    <p class="product-category">${data[i].brandName}</p>
                    <h3 class="product-name"><a href="#">${data[i].title}</a></h3>
                    <div class="product-btns">
                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                    </div>
                    <h4 style="padding-top: 7px;" class="product-price">${data[i].price}      
                    </h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>

                </div>
                <div class="add-to-cart">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
        </a>
    </div>
        
        `;
        // console.log(data[i])
        
        const dbb = document.querySelector("#databrandType");
        dbb.innerHTML =`${branddiv}`;
    }
    


  }