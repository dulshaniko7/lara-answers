<template>
    <div class="bg-white rounded">
        <div class="card mt-3">
            <div class="card-body">
                <h1 class="card-title text-3xl">{{ question.title }}</h1>
                <p class="card-text">{{ question.description}}</p>
                <p class="mt-3 mb-3">Ask By:{{ question.user_id }} at {{ question.created_at}}</p>

            <button class="btn btn-primary sm">
                Answer</button>


        </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Question",
        props: [
            'question'
        ]
    }
</script>

<style scoped>

</style>