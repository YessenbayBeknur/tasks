function A() {
  let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};
  const country = document.querySelector('#countries');
  const city = document.querySelector('#cities');
  const c = city.getElementsByTagName('option');
  const len = c.length;
  for (var i = 1; i < len; i++) {
    c[1].parentNode.removeChild(c[1]);
  }


  for (let item of cities_by_country[country.value]){
    const op = document.createElement('option');
    const text = document.createTextNode(item);
    op.appendChild(text);
    city.appendChild(op);
  }
}

let countries = ["Kazakhstan","Russia","England","France"];
const country = document.querySelector('#countries');
for(let item of countries){
  const op = document.createElement('option');
  const text = document.createTextNode(item);
  op.appendChild(text);
  country.appendChild(op);
}

country.addEventListener('change',A);
