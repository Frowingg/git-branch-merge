console.log(window.location.hostname);

var app = new Vue({
  el: "#root",
  data: {
    url: "./api.php",
    booksList: [],
  },
  methods: {
    getBooks() {
      axios
        .get(this.url)
        .then((response) => {
          this.booksList = response.data;
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
  },
  mounted() {
    this.getBooks();
  },
});
console.log(window.location.hostname);
