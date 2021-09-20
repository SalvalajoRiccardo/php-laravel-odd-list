<template>
    <main>

        <div class="container">
            <div class="row">
                <div class="col-sm-6" v-for="post in posts" :key="post.id">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">{{post.title}}</h5>
                            <p class="card-text">{{post.content}}</p>
                            <router-link :to="{name: 'posts', params:{slug: post.slug}}" class="btn btn-primary">
                                Show More
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav aria-label="Page navigation example">
                <ul class="pagination mt-3">
                    <li :class="{'disabled' : currentPage === 1 }" class="page-item"><a class="page-link"  href="#" @click="getPosts(currentPage - 1)">Previous</a></li>
                    <li v-for="n in lastPage" :key="n" :class="{'active' : currentPage == n }" @click="getPosts(n)" class="page-item"><a class="page-link" href="#">{{n}}</a></li>
                    <li :class="{'disabled' : currentPage === lastPage }" class="page-item"><a class="page-link" href="#" @click="getPosts(currentPage + 1)">Next</a></li>
                </ul>
            </nav>
        </div>
    </main>
</template>

<script>
export default {
    name: 'Post',
    data(){
        return{
            cApi: 'http://127.0.0.1:8000/api/posts',
            posts: [],
            currentPage: 1,
            lastPage: null
        }
    },

    created(){
        this.getPosts(1);
    },

    methods:{
        getPosts(thisPage){
            axios.get(this.cApi,{
                params:{
                    page: thisPage
                }
            })
                .then(response =>{
                    this.posts = (response.data.results.data);
                    this.currentPage = response.data.results.current_page;
                    this.lastPage = response.data.results.last_page;
                    
                })
                .catch();
        }
    }
}
</script>

<style lang="scss" scoped>

</style>