<template>
    <div>
        <Nav></Nav>
        <router-view></router-view>
    </div>
</template>

<script>
    import Nav from './min-components/Nav'

    export default {
        name: "MainApp",
        components: {
            Nav
        }
    }
</script>

<style scoped>

</style>