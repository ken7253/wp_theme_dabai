new Vue({
  el: '#videoList',
  data() {
    return {
      videos: [],
      loading: true,
      errored: false
    }
  },
  mounted() {
    axios
      .get('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=UUNetO5A5Uc-Dk9wUnqm_PFw&key=AIzaSyDj_uiJ7JzdjRt8GdYEEukPwxhPv9MufQs')
      .then(response => console.log(this.videos = response.data.items))
      .catch(error => {
        console.log(error)
        this.errored = true
      })
      .finally(() => this.loading = false)
  },
  components: {
    Hooper: window.Hooper.Hooper,
    Slide: window.Hooper.Slide
  }
})

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