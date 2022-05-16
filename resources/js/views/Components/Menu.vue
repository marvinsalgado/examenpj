<template>
    <nav class="navbar" role="navigation" aria-label="main navigation" v-if="store.getters.loggedIn">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://www.pjedomex.gob.mx/vista/images/LogoPJ@3x.png">
                <img src="https://www.pjedomex.gob.mx/vista/images/LogoPJ@3x.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" @click="goingTo('dashboard')">
                    Inicio
                </a>
                <a class="navbar-item" @click="goingTo('generar-exam')">
                    Examenes
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-light" @click="goingTo('logout')">
                            Cerrar Sesion
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import store from '../../store'
export default {
    data(){
        return {
            store: store
        }
    },
    methods: {
        goingTo(url){
            this.$router.push(url);
        }
    },
};
</script>
