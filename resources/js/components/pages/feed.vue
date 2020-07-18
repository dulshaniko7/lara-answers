<template>
    <div class="flex flex-column">
        <div class="container mt-4">
            <question v-for="question in questions" :key="question.id" :question="question"></question>
        </div>
    </div>
</template>

<script>
    import Question from "../min-components/Question";

    export default {
        name: "feed",
        components: {Question},
        data() {
            return {
                questions: null
            }

        },
        mounted() {
            axios.get('/questions')
                .then(res => {
                    this.questions = res.data
                })
                .catch(error => {
                    console.log('Data error');
                })
        }
    }



</script>

<style scoped>

</style>