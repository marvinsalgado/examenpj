import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        token: localStorage.getItem('access_token') || null,
        userId: localStorage.getItem('userId') || null,
        preguntas: [],
        examenes: [],
        preguntasExamenes: [],
        formRegister: null
    },
    getters: {
        loggedIn(state) {
            return state.token !== null
        }
    },
    mutations: {
        retrieveToken(state, token) {
            state.token = token
        },
        retrieveUserId(state, userId) {
            state.userId = userId
        },
        destroyToken(state) {
            state.token = null
            state.userId = null
        },
        addFormRegister(state, formRegister) {
            state.formRegister = formRegister
        }
    },
    actions: {
        retrieveToken(context, credentials) {

            return new Promise((resolve, reject) => {
                axios.post('/api/auth/login', {
                    email: credentials.username,
                    password: credentials.password,
                })
                    .then(response => {
                        //console.log(response)
                        const token = response.data.access_token
                        const user = response.data.userId
                        localStorage.setItem('access_token', token)
                        localStorage.setItem('userId', user)
                        context.commit('retrieveToken', token)
                        context.commit('retrieveUserId', user)

                        resolve(response)
                    })
                    .catch(error => {
                        //console.log(error)
                        reject(error)
                    })
            })

        },
        destroyToken(context) {

            if (context.getters.loggedIn){

                return new Promise((resolve, reject) => {
                    axios.post('/api/auth/logout', '', {
                        headers: { Authorization: "Bearer " + context.state.token }
                    })
                        .then(response => {
                            //console.log(response)
                            localStorage.removeItem('access_token')
                            context.commit('destroyToken')

                            resolve(response)
                        })
                        .catch(error => {
                            //console.log(error)
                            localStorage.removeItem('access_token')
                            context.commit('destroyToken')

                            reject(error)
                        })
                })

            }
        },
        getPreguntas({ commit }, payload) {
            return new Promise((resolve, reject) => {
                axios.get('/api/auth/preguntas', {
                    headers: { Authorization: "Bearer " + this.state.token }
                })
                    .then(response => {
                        console.log(response)
                        this.state.preguntas = response.data
                        resolve(response)
                    })
                    .catch(error => {
                        //console.log(error)
                        reject(error)
                    })
            })
        },
        getExamenes({ commit }, payload) {
            return new Promise((resolve, reject) => {
                axios.get('/api/auth/getExamenesUser/'+payload.idUsuario, {
                    headers: { Authorization: "Bearer " + this.state.token }
                })
                    .then(response => {
                        console.log(response)
                        this.state.examenes = response.data
                        resolve(response)
                    })
                    .catch(error => {
                        //console.log(error)
                        reject(error)
                    })
            })
        },
        sendPreguntas({ commit }, payload) {
            return new Promise((resolve, reject) => {
                axios.post('/api/auth/examenes', payload, {
                    headers: { Authorization: "Bearer " + this.state.token, 'content-type': 'multipart/form-data' }
                })
                    .then(response => {
                        if(response.data.success){
                            resolve(response)
                        }

                    })
                    .catch(error => {
                        //console.log(error)
                        reject(error)
                    })
            })
        },

        getPreguntasExamenes({ commit }, payload) {
            return new Promise((resolve, reject) => {
                axios.get('/api/auth/getPreguntasExamenes/'+payload.idExamen, {
                    headers: { Authorization: "Bearer " + this.state.token }
                })
                    .then(response => {
                        console.log(response)
                        this.state.preguntasExamenes = response.data
                        resolve(response)
                    })
                    .catch(error => {
                        //console.log(error)
                        reject(error)
                    })
            })
        },

        deleteExamen({ commit }, payload) {
            return new Promise((resolve, reject) => {

                axios.delete('/api/auth/examenes/'+payload.idExamen, {
                    headers: { Authorization: "Bearer " + this.state.token }
                })
                    .then(response => {
                        if(response.data.success){
                            resolve(response)
                        }

                    })
                    .catch(error => {
                        //console.log(error)
                        reject(error)
                    })
            })
        },

        addRegister({ commit }, payload) {
            return new Promise((resolve, reject) => {
                axios.post('/api/auth/register', payload)
                    .then(response => {
                        this.state.formRegister = response.data
                        resolve(response)
                    })
                    .catch(error => {
                        //console.log(error)
                        reject(error)
                    })
            })
        }
    }
})

export default store
