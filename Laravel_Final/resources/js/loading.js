// Función para redirigir
function redirigir() {
    let timerInterval
    Swal.fire({
      title: 'Generating...',
      html: 'Redirigiendo en <b></b> milliseconds.',
      timer: 1000,
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading()
        const b = Swal.getHtmlContainer().querySelector('b')
        timerInterval = setInterval(() => {
          b.textContent = Swal.getTimerLeft()
        }, 25)
      },
      willClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      if (result.dismiss === Swal.DismissReason.timer) {
        console.log('I was closed by the timer')
      }
    });
  }
  
  var botones = document.querySelectorAll(".boton");
  
  botones.forEach(function(boton) {
    boton.addEventListener("click", redirigir);
  });
  
  document.getElementById('redirigir').addEventListener('click', redirigir);
  