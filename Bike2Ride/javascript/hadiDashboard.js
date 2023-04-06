








// Chart.defaults.global.elements.rectangle.backgroundColor = '#FF0000';




let graphValues = [];
const f = fetch('http://localhost/phpbike2ride/php/dashbordgraph.php')  
  .then(response => {
    return response.json();
  })
  .then(res => {
    graphValues.push(res["result1"][0]["ALLPRODUCT"]);
    graphValues.push(res["result2"][0]["bikePRODUCT"]);
    graphValues.push(res["result3"][0]["AccPRODUCT"]);
    graphValues.push(res["result4"][0]["HelPRODUCT"]);
    graphValues.push(res["result5"][0]["GlovPRODUCT"]);
    graphValues.push(res["result6"][0]["BotPRODUCT"]);
    show_api_data(res);
  });

  console.log(graphValues);
  function show_api_data(data){

    
    


  

var bar_ctx = document.getElementById('bar-chart').getContext('2d');

var purple_orange_gradient = bar_ctx.createLinearGradient(0, 0, 0, 600);
// purple_orange_gradient.addColorStop(0, 'orange');
// purple_orange_gradient.addColorStop(1, 'blue');
purple_orange_gradient.addColorStop(0, '#474747');
purple_orange_gradient.addColorStop(1, '#c4c4c4');


var bar_chart = new Chart(bar_ctx, {
    type: 'bar',
    data: {
        labels: ["All Products", "Bikes", "Accessories", "Helmit", "Purple", "Gloves"],
        datasets: [{
            label: '# of Quantity',
            data: [graphValues[0], graphValues[1], graphValues[2],  graphValues[3],  graphValues[4], graphValues[5]],
						backgroundColor: purple_orange_gradient,
						hoverBackgroundColor: purple_orange_gradient,
						hoverBorderWidth: 2,
						hoverBorderColor: 'purple'
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});




}



// const r = fetch('http://localhost/phpbike2ride/php/tableproductHadi.php')  
//   .then(response => response.json())
//   .then(data => show_api_data(data));

//   function show_api_data(data){

//     let tablebody = '';
//     for(i in data){
//         tablebody += `<tr>
//         <td><img class="DtableImage"
//         src="productsImages/${data[i].product_id}.${data[i].ext}"></td>
//         <td>${data[i].product_id}</td>
//         <td>${data[i].title}</td>
//         // <td class="CifValid">Valid</td>
//         <td>$ ${data[i].price}</td>
//         <td>${data[i].Category}</td>
//         <td>${data[i].brandName}</td>
//         <td>${data[i].color1} <br> ${data[i].color2}</td>
//         </tr>`;
       
//         // console.log(data[i])
        
//         const dbb = document.querySelector("#tablebodyy");
//         // const dbb = document.getElementById("tablebodyy");
//         dbb.innerHTML =`${tablebody}`;
//     }
    


//   }







var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
// document.addEventListener("click", closeAllSelect);



// $(document).ready(function(){
//   $('#btbDivh').Click(function(){
//     $('.MaiNDivAdminReley').show(2000);
//   });
// });


// let add =document.querySelector('#btbDivh');

// add.addEventListener('click' , )



// let btn1 =document.querySelector('#btbDivh');
// let dv1 =document.querySelector('#divvA');
// btn1.addEventListener('click', () =>{
//   if(dv1.style.display == 'none'){
//     dv1.style.display = 'block';
//   }else{
//     dv1.style.display = 'none';
//   }
// })
