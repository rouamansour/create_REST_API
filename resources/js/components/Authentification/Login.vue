<template>
<div class="divform">

<!-- <h2>Connexion</h2> -->
<form @submit.prevent="handleLogin">

<input placeholder="email" type="email"  v-model="user.email"/>

<input placeholder="password" type="password"  v-model="user.password"/>

<!-- <button class="btn btn-primary btn-block">
Valider
</button> -->
 <input type="submit" value="Valider" class="bttn" />
</form>

</div>
</template>
<script>
const API_URL = 'http://localhost:8000/api/auth/';
export default {
name: "Login",
data(){
return {
user: {},
message: ""

}
},
methods: {
handleLogin() {

return this.axios
.post(API_URL + 'login', this.user)
.then(response => (
localStorage.setItem('user',

JSON.stringify(response.data)),

this.$router.push({ name: 'profile' })
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
