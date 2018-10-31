function C(text) {
  const list = JSON.parse(text);

  const div = document.getElementById('cards');


  for(var i = 0; i < list.length; i++){
    const card = document.createElement('div');
    card.classList.add('card');

    const title = document.createElement('div');
    title.classList.add('title');
    title.appendChild(document.createTextNode(list[i].maker + " " + list[i].model));
    card.appendChild(title);

    const price = document.createElement('div');
    price.classList.add('price');
    price.appendChild(document.createTextNode(list[i].price));
    card.appendChild(price);


    div.appendChild(card);
  }

}

function B(response) {
  return response.text();
}


function A() {
  fetch("http://demo4296963.mockable.io/listCars").then(B).then(C);
}




var button = document.querySelector('button');
button.addEventListener('click',A);
