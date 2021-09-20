<template>
    <div class="card">
        <div class="card-header">
            Post Numero: {{ post.id}}
        </div>

        <div class="card-body">
            <h5 class="card-title">Title: {{ post.title}}</h5>
            <p class="card-text">content: {{ post.content}}</p>
            <p v-if="post.category" class="card-text">category: {{ post.category.name}}</p>
            <h5>Tags</h5>
            <p v-if="post.tags" class="card-text">
                <span  v-for="(tag,index) in post.tags" :key="index" class="badge badge-success">{{ tag.name}}</span>
                
            </p>
            <p v-else>
                <span>No Tags</span>
            </p>

            <router-link :to="{name: 'posts'}" class="btn btn-primary">
                Go back           
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SinglePost',
    data(){
        return{
            cApi: '/api/post/',
            post: []
        }
    },

    mounted(){
        axios.get('/api/posts/' + this.$route.params.slug)
                .then(response =>{
                    this.post = response.data.results;
                })
                .catch();
    }
}
</script>

<style>

</style>