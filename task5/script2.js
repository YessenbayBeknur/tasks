function A(event) {
  const newimage = event.currentTarget.src;
  const image = document.querySelector('#bigImage').getElementsByTagName('img');
  image[0].src = newimage;
  console.log(image);
}
const images = document.getElementById('carousel').getElementsByTagName('img');

for(var i = 0; i<images.length; i++){
    images[i].addEventListener('click',A);
}
