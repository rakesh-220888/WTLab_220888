let shirt=1400;
let pant=1800;
const pair=3000;
console.log('Shirt:',shirt);
console.log('Pant:',pant);
console.log('Pair:',pair);

// let namaste='Ajio welcomes you'

 let customer=prompt('Enter your name');
// console.log(customer);

document.getElementById("cust").innerHTML=customer;
// document.write(namaste);

function greet(name){
	console.log('Hello',name)
}

const addtocart=()=>{
	document.getElementById("cart").innerHTML=alert("product added to the cart")
}
greet(customer);

let myobj={
	number:5,
	string:"shopping website",
	hello:()=>{
		console.log("Hello");
	}
};

myobj.hello();
console.log(myobj["number"])

let myobjs={
	price:1000,
	name:"plain jeans",
};

let list=document.getElementById("list");

for(let key in myobjs){
	list.innerHTML +=`<li> ${key}: ${myobjs[key]}</li>`;
}