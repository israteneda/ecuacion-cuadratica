const answerDiv = document.getElementById('answer');
const button = document.getElementById('submit');

function compute(e) {
  let x2 = document.getElementById('x2').value;
  let x1 = document.getElementById('x1').value;
  let c = document.getElementById('c').value;

  let d,
      ans1,
      ans2;

  e.preventDefault();
  d = x1**2 - 4*x2*c;
  if (x2 == '' || x1 == '' || x2 == '') {
    answerDiv.innerHTML = '<p>Ingrese todos los numeros</p>';
  } else {
    if (d > 0) {
      ans1 = ((-x1 - Math.sqrt(x1**2 - 4*x2*c))/(2*x2));
      ans2 = ((-x1 + Math.sqrt(x1**2 - 4*x2*c))/(2*x2));
      answerDiv.innerHTML = `<p>Primera raiz: ${ ans1 } </p>`;
      answerDiv.innerHTML += `<p>Segunda raiz: ${ ans2 } </p>`;
    } else if ( d == 0) {
      ans1 = ((-x1 + Math.sqrt(x1**2 - 4*x2*c))/(2*x2));
      answerDiv.innerHTML = `<p>Primera raiz: ${ ans1 } </p>`;
    } else {
        answerDiv.innerHTML = '<p>No es posible calcular, posee raices imaginarias.</p>';
    }
  }
}

button.addEventListener('click', compute);