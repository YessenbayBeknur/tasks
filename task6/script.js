function A(event) {
  const el = event.currentTarget;
  el.parentNode.dataset.status = 'done';
}

const buttons = document.getElementsByTagName('button');

for(var i = 0; i<buttons.length; i++){
    buttons[i].addEventListener('click',A);
}
