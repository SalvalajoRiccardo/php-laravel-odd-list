<template>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-6" v-for="post in posts" :key="post.id">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">{{post.title}}</h5>
                            <p class="card-text">{{post.content}}</p>
                            <a href="#" class="btn btn-primary">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</template>

<script>

export default {
    name: "Main",
    // components: {
        
    // }
    data(){
        return{
            cApi: 'http://127.0.0.1:8000/api/posts',
            posts: []
        }
    },

    created(){
        this.getPosts();
    },

    methods:{
        getPosts(){
            axios.get(this.cApi)
                .then(response =>{
                    this.posts = (response.data.results.data);
                    // console.log(this.posts);
                })
                .catch();
        }
    }
}
</script>

<style lang="scss" scoped>

</style>