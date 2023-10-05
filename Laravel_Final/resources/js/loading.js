document.getElementById('redirigir').addEventListener('click', function() {
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
})
});

document.getElementById('redirigir1').addEventListener('click', function() {
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
})
});

document.getElementById('redirigir2').addEventListener('click', function() {
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
})
});

document.getElementById('redirigir3').addEventListener('click', function() {
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
})
});

document.getElementById('redirigir4').addEventListener('click', function() {
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
})
});