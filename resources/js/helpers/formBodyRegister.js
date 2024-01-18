export const formBodyRegister = (form) => {
    return {
            nombre:     form.nombre,
            paterno:    form.paterno,
            materno:    form.materno,
            email:      form.email,
            password:   form.password,
            c_password: form.confirmPassword,
            activo:     'S',
    }
}
