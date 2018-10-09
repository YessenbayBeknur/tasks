function Result(){
  var s11 = document.querySelector('#s11').value;
  var s12 = document.querySelector('#s12').value;
  var s13 = document.querySelector('#s13').value;
  var s21 = document.querySelector('#s21').value;
  var s22 = document.querySelector('#s22').value;
  var s23 = document.querySelector('#s23').value;
  var s31 = document.querySelector('#s31').value;
  var s32 = document.querySelector('#s32').value;
  var s33 = document.querySelector('#s33').value;
  var result = s11*s22*s33 + s12*s23*s31 + s13*s21*s32 - s13*s22*s31 - s12*s21*s33 - s11*s23*s32;
  const title = document.querySelector('#result');
  title.textContent = result;
}

const button = document.querySelector('#determinant');
button.addEventListener('click',Result)
