let removeRow = (oButton) => { /// remove a row product 
             
           
    let tableProduct = document.getElementById('tableProduct');
    tableProduct.deleteRow(oButton.parentNode.parentNode.parentNode.rowIndex); // buttton -> td -> tr;
   
}

// let removeRow = (oButton) => {
//     let text = "Click OK if you are sure of your decision to delete this item";
//     if (confirm(text) == true) {
//       let empTab = document.getElementById('tableProduct');
//       empTab.deleteRow(oButton.parentNode.parentNode.rowIndex); // buttton -> td -> tr;
//     } else {
//       text = "You canceled!";
//     }

//   }

// ffofr quantite fffjfjfjjfjfjfj

// for the max input 
// let max=20; 
// var input = document.getElementById("number");
// input.setAttribute("max",max);
 // set a new value; 



function incrementValue(id)
{
    let value = parseInt(document.getElementById(id).value);
    let max = parseInt(document.getElementById(id).max);
    value = isNaN(value) ? 0 : value;
    if(value<max){
        value++;
            document.getElementById(id).value = value;
    }
}
function decrementValue(id)
{
    let value = parseInt(document.getElementById(id).value);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById(id).value = value;
    }

} 


// function disableBtn(nb) {
//     if(nb==0){
//         x=document.getElementByClassName("edit");
//         x.disabled=true;

//     }
   

   
 
// }




///////////////swal 
// let form = document.getElementById('formpay');

// function myFunctionalert() {
//   if (form.checkValidity()) {
   
   
//     swal({
//       title: "You have successfully added this item",
    
//       icon: "success",
//       buttons: {
//       cancel: "CONTINUE SHOPPING",
     
//       cart:  "Order Now",
  
//     },cartButtonColor: "black",
  
      
  
      
      
//   }).then((value) => {
//     switch (value) {
   
//    case "cart":
//    window.location.href = `cart.html` ;}
    
  
  
//   });
//   }
// }

// 
// let submitCart = (oButton) => {
//     let text = "Click OK if you are sure of your decision to delete this item";
//     if (confirm(text) == true) {
//      // buttton -> td -> tr;
//     } else {
//       text = "You canceled!";
//     }

//   }