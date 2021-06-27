<template>
  <div>
      <Header />

      <main>
          <!-- component matched by the route will render here -->
          <router-view></router-view> 
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
           
        }
    },

    created() {

    },

    methods: {
        

    }

    
}
</script>

<style lang="scss">
    @import '../sass/frontoffice/utilities';

    body {
        font-family:san-serir;
    }

    .navigation {
        button {
            margin-right:  10px;
            border-radius: 50%;
            
        }
        .active-page {
            background-color: teal;
        }
    }
  
</style>