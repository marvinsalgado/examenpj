<template>
    <div>
        <section class="section">
            <main>
                <Menu></Menu>
                <router-view></router-view>
            </main>
        </section>
    </div>
</template>

<script>
import Menu from './components/Menu.vue'
export default {
    components: {
        Menu
    }

};
</script>
