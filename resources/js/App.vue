<template>
  <div>
      <Header />

      <main>
          <h1>Welcome to public home</h1>
          <article>
        
          </article>

      </main>
  </div>
</template>

<script>
import Header from "./components/Header.vue";

export default {
    name: 'App',

    components: {
        Header,
    },

    data() {
        return {
            posts: [],
        }
    },

    created() {
        this.getPosts();
    },

    methods: {
        getPosts() {
            axios.get('http://127.0.0.1:8000/api/posts')
            .then(response => {
                console.log(response.data)
            })
            .catch(error => {
                console.log(error);
            })
        }
    }

    
}
</script>

<style lang="scss" scoped>
    body {
        color: red;
    }
</style>