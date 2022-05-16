<template></template>

<script>
export default {
    created() {
        this.$store.dispatch("destroyToken").then(response => {
            console.log('Se cerror')
        });
        this.$router.push( "login" );
    }
};
</script>

