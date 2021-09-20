<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <router-link :to="{name: 'home'}" class="navbar-brand">
                Boolpress
            </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <router-link :to="{name: 'home'}" class="nav-item nav-link">
                        Home
                    </router-link>
                    <router-link :to="{name: 'about'}" class="nav-item nav-link">
                        About
                    </router-link>
                    <router-link :to="{name: 'contacts'}" class="nav-item nav-link">
                        Contacts
                    </router-link>
                    <router-link :to="{name: 'post'}" class="nav-item nav-link">
                        Posts
                    </router-link>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>

export default {
    name: "Header",
    // components: {
        
    // }
}
</script>

<style lang="scss" scoped>

</style>