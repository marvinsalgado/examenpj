<template>
    <div>
        <h1 class="title">Generar Examen</h1>
        <div class="control">
            <label>Selecciona las preguntas</label>
            <Multiselect placeholder="Preguntas" :multiple="true" v-model="value" :options="preguntas" :max="4" label="desPregunta" track-by="cvePregunta" name="preguntas" :show-labels="false"></Multiselect>
        </div>
        <br>
        <button class="button is-primary" @click="guardar" v-if="this.value !== null">Guardar</button>
    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'
import store from "../store";
export default {
    data(){
        return{
            value: null,
            options: ['list', 'of', 'options']
        }
    },
    created () {
        this.$store.dispatch('getPreguntas')
    },
    computed:{
        preguntas (){
            return this.$store.state.preguntas
        },
        user(){
           return this.$store.state.userId
        }
    },
    methods:{
        guardar (){
            if(this.value.length > 0){
                let formData = new FormData();
                formData.append('preguntas', JSON.stringify(this.value))
                formData.append('userId', this.user)
                formData.append('numPreguntas', this.value.length)

                this.$store.dispatch('sendPreguntas', formData).catch(err => { console.error(err) })
                this.$router.push('/dashboard')
            } else {
                alert('Selecciona al menos una pregunta')
            }
        }
    },
    components: {
        Multiselect
    }
};
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
