<template>
  <div>
      <Header />

      <main>
          <div class="container">
              <h1>Blog</h1>
                <article v-for="post in posts" :key="post.id">
                    <h2>{{post.title}}</h2>
                    <div>{{formatDate(post.created_at)}}</div>
                    <a href="">reed more</a>
                </article>

                <section class="navigation">

                    

                    <button v-for="i in pagination.last" 
                        :key="i"
                        @click="getPosts(i)"
                        :class="{'active-page': i == pagination.current}"  
                    >
                        {{i}}
                    </button>

                    <div>
                        <button
                            v-show="pagination.current > 1"
                            @click="getPosts(pagination.current - 1)"
                        >
                            prev
                        </button>
                        <button
                            v-show="pagination.current < pagination.last"
                            @click="getPosts(pagination.current + 1)"
                        >
                            next
                        </button>
                    </div>
                </section>
          </div>

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
            pagination: {},
        }
    },

    created() {
        this.getPosts();
    },

    methods: {
        getPosts(page = 1) {
            axios.get(`http://127.0.0.1:8000/api/posts?page=${page}`)
            .then(response => {
                console.log(response.data.data);
                this.posts = response.data.data;
                this.pagination = {
                    current: response.data.current_page,
                    last: response.data.last_page,
                }
            })
            .catch(error => {
                console.log(error);
            })
        },

        formatDate(date) {
            const postDate = new Date(date);
            let day = postDate.getDate();
            let month = postDate.getMonth() + 1;
            const year = postDate.getFullYear();
            
            if (day < 10) {
                day = '0' + day;                
            }

            if (month < 10) {
                month = '0' + month;                
            }

            return `${day}/${month}/${year}`;
        }

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