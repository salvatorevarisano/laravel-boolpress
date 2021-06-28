<template>
  <div class="container">

      <div v-if="post">
        <h1>{{post.title}}</h1>
        <span>{{post.category.name}}</span>
        
        <Tags :tags="post.tags" />
        <div>
            {{post.content}}
        </div>

      </div>
        <Loader v-else />
  </div>
</template>

<script>

import Loader from '../components/Loader.vue';
import Tags from '../components/Tags.vue';


export default {
    name: 'PostDetail',

    components: {
        Loader,
        Tags
    },

    data() {
        return {
            post: null,
        }
    },

    created() {
        this.getPostDetail()
    },

    methods: {
        getPostDetail() {
            axios.get(`http://127.0.0.1:8000/api/posts/${this.$route.params.slug}`)
                .then(res => {
                    console.log(res.post);
                    this.post = res.data;
                }).catch(err => {
                    console.log(err);
                })
        }
    }
}
</script>

<style>

</style>