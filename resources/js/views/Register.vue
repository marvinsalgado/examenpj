<template>
    <div>
        <div class="container">
            <div class="column is-6 is-offset-3">
                <div class="box">
                    <h1 class="title">Registro de Usuario</h1>
                    <form ref="userForm" autocomplete="off" @submit.prevent="register" method="post">
                        <div class="field">
                            <label class="label">Nombre</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Nombre" v-model="nombre" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Apellido Paterno</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Apellido Paterno" v-model="paterno" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Apellido Materno</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Apellido Materno" v-model="materno" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Correo Electrónico</label>
                            <div class="control">
                                <input type="email" class="input" placeholder="usuario@correo.com" v-model="email" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Contraseña</label>
                            <div class="control">
                                <input type="password" class="input" placeholder="Contraseña" v-model="password" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Confirmar Contraseña</label>
                            <div class="control">
                                <input type="password" class="input" placeholder="Confirmar Contraseña"
                                    v-model="confirmPassword" />
                            </div>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-primary">Registrar</button>
                            </div>
                            <div class="control">
                                <button type="button" @click="goingTo" class="button is-danger">Regresar</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { formBodyRegister } from "../helpers/formBodyRegister"
export default {
    methods: {
        register() {
            this.$store
                .dispatch("addRegister", formBodyRegister(this))
                .then(response => {
                    console.log(response);
                    this.$router.push({ name: "login" });
                })
                .catch(error => {
                    alert("Ocurrió un error al registrar el usuario ):");
                    this.error = error.response.data;
                });
        },
        goingTo() {
            this.$router.push({ name: "login" });
        }
    }
};
</script>
