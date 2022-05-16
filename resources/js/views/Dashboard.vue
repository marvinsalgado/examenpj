<template>
    <div>
        <h1 class="title">Inicio</h1>
        <button class="button is-primary" @click="goingToGenerateExam">Generar Examen</button>

        <table class="table">
            <thead>
            <tr>
                <th><abbr title="Id Examen">Id Examen</abbr></th>
                <th>Id Usuario</th>
                <th><abbr title="Numero de Preguntas">Numero de Preguntas</abbr></th>
                <th><abbr title="Fecha de Registro">Fecha de Registro</abbr></th>
                <th><abbr title="Fecha de Actualizacion">Fecha de Actualizacion</abbr></th>
                <th><abbr title="Acciones">Acciones</abbr></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="value of examenes">
                <th>{{value.idExamen}}</th>
                <td>{{value.idUsuario}}</td>
                <td>{{value.numPreguntas}}</td>
                <td>{{value.fechaRegistro}}</td>
                <td>{{value.fechaActualizacion}}</td>
                <td>
                    <button class="button is-warning" @click="goingToVerExam(value.idExamen)">Ver</button>
                    <button class="button is-danger" @click="borrar(value.idExamen)">Borrar</button>
                </td>
                </tr>
            </tbody>
        </table>


    </div>

</template>

<script>
import store from "../store";
export default {
    methods: {
        goingToGenerateExam() {
            this.$router.push('/generar-exam');
        },
        goingToVerExam(id) {
            this.$router.push('/ver-exam/'+id);
        },
        borrar(id) {
            this.$swal.fire({
                title: 'Estas seguro de borrarlo?',
                text: "Al hacerlo no se podra revertir",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#0ed601',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, Borrar!'
            }).then((result) => {
                //send request to the server
                if (result.value) {
                    this.$store.dispatch('deleteExamen', {idExamen: id});
                    this.$swal(
                        'Se borro!',
                        'Se ha eliminado',
                        'warning'
                    );
                    this.$router.go();
                } else {
                    this.$swal(
                        'Se cancelo!',
                        'No se borro nada',
                        'warning'
                    );
                }
            })
        }
    },
    computed:{
        examenes (){
            return this.$store.state.examenes
        },
        user(){
            return this.$store.state.userId
        }
    },
    created () {
        this.$store.dispatch('getExamenes', {idUsuario: this.user})
    },
};
</script>
