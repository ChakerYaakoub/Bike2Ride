
// const f = fetch('./bike2ride/php/brand.php')           //api for the get request
const f = fetch('http://localhost/phpbike2ride/php/brand.php')  
  .then(response => response.json())
  .then(data => show_api_data(data));

  function show_api_data(data){

    let branddiv = '';
    for(i in data){
        branddiv += `<div class="col-sm-6 col-md-3">
        <div class="mainbranddiv">
           <a href="./brandProduct.php?brandName=${data[i].brandName}"> <img class="imgbrand"
             src ="BrandsImages/${data[i].brand_id}.${data[i].ext}" 
            onclick="gotobarana()">
            <a class="brandtext" href="./brandProduct.php?brandName=${data[i].brandName}"> SHOP NOW</a></a>
        </div> </div>`;
        // console.log(data[i])
        
        const dbb = document.querySelector("#dataDone");
        dbb.innerHTML =`${branddiv}`;
    }
    


  }