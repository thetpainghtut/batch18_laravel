let myarray = [
  {id:1, name:'item one', photo:'path', price:5000, qty:3},
  {id:2, name:'item one', photo:'path', price:6000, qty:1}
];

localStorage.setItem('cart',JSON.stringify(myarray));