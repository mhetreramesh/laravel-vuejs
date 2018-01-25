<template>
    <div>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Tradebyte PIM</a>
            </div>
            <ul class="nav navbar-nav">
                <router-link tag="li" :exact=true :to="{ name: 'DisplayItem' }" active-class="active">
                    <a href="/">Article</a>
                </router-link>
                <router-link tag="li" :to="{ name: 'DisplayCategory' }" active-class="active">
                    <a href="/categories">Categories</a>
                </router-link>

            </ul>
        </div>
        </nav>
        <div class="container">
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script>

    export default{
    }
</script>
