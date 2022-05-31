<template>
<div class="divform">

<!-- <h3> Si vous disposez déjà d'un compte passez à la connexion
<router-link to="/login"> Login </router-link>
</h3> -->
<!-- <h2>Enregistrement</h2> -->
<form @submit.prevent="handleRegister">
<input placeholder="name" type="text"  v-model="user.name"/>

<input placeholder="email" type="email"  v-model="user.email"/>

<input placeholder="password" type="password"  v-model="user.password"/>

<input placeholder="password confirmation" type="password"  v-model="user.password_confirmation"/>
<!-- <button class="btn btn-primary btn-block">
Register
</button> -->
 <input type="submit" value="Register" class="bttn" />
</form>
</div>

</template>
<script>
const API_URL = 'http://localhost:8000/api/auth/';
export default {
name: "Register",
data(){
return {
user: {},
message: ""
}
},
methods: {
handleRegister() {
return this.axios.post(API_URL + 'register', this.user)

.then(response => (
localStorage.setItem('user',JSON.stringify(response.data)),

this.$router.push({ name: 'login' })
))
.catch(err => console.log(err))
}

},
};
</script>
<style>
input,
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.bttn {
    width: 100%;
    background-color: #4caf50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.bttn:hover {
    background-color: #45a049;
}

.divform {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>