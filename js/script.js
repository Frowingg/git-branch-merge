var app = new Vue({
  el: "#root",
  data: {
    url: "http://localhost:8888/php-ajax-dischi/Milestone-2/api.php",
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
