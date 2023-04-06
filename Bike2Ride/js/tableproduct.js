const f = fetch('http://localhost/phpbike2ride/php/tableproductHadi.php')  
  .then(response => response.json())
  .then(data => show_api_data(data));

  function show_api_data(data){

    let tablebody = '';
    for(i in data){
        tablebody += `<tr>
        <td><img class="DtableImage"
        src="productsImages/${data[i].product_id}.${data[i].ext}"></td>
        <td>${data[i].product_id}</td>
        <td>${data[i].title}</td>
        // <td class="CifValid">Valid</td>
        <td>$ ${data[i].price}</td>
        <td>${data[i].Category}</td>
        <td>${data[i].brandName}</td>
        <td>${data[i].color1} <br> ${data[i].color2}</td>
        </tr>`;
       
        // console.log(data[i])
        
        const dbb = document.querySelector("#tablebodyy");
        // const dbb = document.getElementById("tablebodyy");
        dbb.innerHTML =`${tablebody}`;
    }
    


  }
  