<template>
    <div>
        <h1 class="title">Ver Examen</h1>
        <button class="button is-primary">Exportar</button>

    </div>
</template>

<script>
export default {
    computed: {
        preguntasExamenes() {
            return this.$store.state.preguntasExamenes;
        },
    },
    created() {
        this.$store.dispatch('getPreguntasExamenes', {idExamen: this.$route.params.id});
    },
    mounted() {
        console.log(this.$route.params.id);
    }
};
</script>
