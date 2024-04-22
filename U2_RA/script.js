if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('./service-worker.js')
      .then(reg => console.log('Registro del service worker exitoso', reg))
      .catch(err => console.warn('Error al tratar de registrar el service worker', err))
  }