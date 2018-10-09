function A() {
  const name = document.querySelector('#name').value;
  const surname = document.querySelector('#surname').value;
  const faculty = document.querySelector('#faculty').value;

  const newtr = document.createElement('tr');

  const newname = document.createElement('td');
  const newn = document.createTextNode(name);
  newname.appendChild(newn);

  const newsurname = document.createElement('td');
  const newsn = document.createTextNode(surname);
  newsurname.appendChild(newsn);

  const newfaculty = document.createElement('td');
  const newf = document.createTextNode(faculty);
  newfaculty.appendChild(newf);



  const table = document.querySelector('#students');
  table.appendChild(newtr);
  table.appendChild(newname);
  table.appendChild(newsurname);
  table.appendChild(newfaculty);
  console.log(newname);
  console.log(newname);
  console.log(newfaculty);


}

const button = document.querySelector('#addStudent');
button.addEventListener('click',A);
