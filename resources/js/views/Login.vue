<template>
    <div>
        <div class="container">
            <div class="column is-4 is-offset-4">
                <div class="box">
                    <h1 class="title">Iniciar Sesión</h1>
                    <div class="notification is-danger" v-if="error">
                        <p>{{error}}</p>
                    </div>
                    <form autocomplete="off" @submit.prevent="login" method="post">
                        <div class="field">
                            <div class="control">
                                <input type="email" class="input" placeholder="usario@correo.com" v-model="username" />
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input type="password" class="input" v-model="password" />
                            </div>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-primary">Iniciar Sesión</button>
                            </div>
                            <div class="control">
                                <button type="button" @click="register" class="button is-danger">Crear nuevo registro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            username: null,
            password: null,
            error: null
        };
    },
    methods: {
        login() {
            this.$store
                .dispatch("retrieveToken", {
                    username: this.username,
                    password: this.password
                })
                .then(response => {
                    this.$router.push({ name: "dashboard" });
                })
                .catch(error => {
                    this.error = error.response.data;
                });
        },
        register(){
            this.$router.push({ name: "register" });
        }
    }
};
</script>
