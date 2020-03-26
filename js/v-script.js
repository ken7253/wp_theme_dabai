var year = new Vue({
  el: '#yearNow',
  data: {
    year: new Date().getFullYear()
  }
})

new Vue({
  el: '#header',
  data: {
    show: false
  }
})