<template>
    <div class="container">
        <div class="row justify-content-center">
           <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Post</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Remove</th>
                        <th scope="col"><a href="/post/create"><i class="bi bi-plus-lg"></i></a></th> 
                    </tr>
                </thead>
                <tbody> 
                    <div v-for="post in posts" :key="post.id" class="test">

                        <tr>
                            <th scope="row">{{post.id}}</th>
                            <td>{{post.text}}</td>
                            <td>
                                <button v-on:click="deleteById(post.id)" type="button"  class="btn btn-danger" >Delete</button>
                            </td>
                        </tr>    
                    </div>
                </tbody>
            </table>
            <sub-component/>
         </div>
    </div>
</template>

<script>

    import SubComponent from './SubComponent.vue';

    export default {
        components: {
            'SubComponent' : SubComponent
        },
        mounted() {
            this.getPosts();
            // console.log('Component mounted.')
        },  
        data(){
            return{
                posts:[]
            }
        },
        methods:{
            getPosts(){
                axios.get('/api/posts/').then((response)=>{
                    this.posts=response.data
                });
            },

            deleteById(id){
                axios.delete("/api/posts/"+id).then((response)=>{
                   console.log(response);
                   this.getPosts();
                });
            }
        }
    }
</script>
