<template>
    <div>
        <button class="btn btn-info" v-on:click="addQuestion">Add a new Question</button>
        <table class="table">
            <thead>
            <tr>
                <th>Question</th>
                <th>Description</th>
                <th>Ask By</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td v-model="question.title">{{question.title}}</td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        name: "index",
        data(){
            return {
                questions: [],
                question: {
                    id:'',
                    title: '',
                    description:''
                },
                posts: null

            }
        },
        components: {

        },
        mounted() {
            axios.get('/questions')
                .then(res => {
                    this.posts = res.data;
                })
                .catch(error=>{
                    console.log('error in data')
                })
        }

    }
</script>

<style scoped>

</style>