<template lang="">
<form @submit.prevent="ajouterparticipant">


<div class="form-group">

<input type="number" class="form-control" placeholder="num_passeport" v-model="num_passeport">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="nom" v-model="nom">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="prenom" v-model="prenom">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="date_naiss" v-model="date_naiss">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="pays" v-model="pays">

</div>
<div class="form-group">

<input type="number" class="form-control" placeholder="tel" v-model="tel">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="email" v-model="email">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="date_inscription" v-model="date_inscription">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="reference_vehicule" v-model="reference_vehicule">

</div>
<div class="form-group">

<input type="number" class="form-control" placeholder="rang" v-model="rang">

</div>


<button type="submit" class="btn btn-block btn-primary">Ajouter Participant</button>
</form>
</template>

<script>


export default {
name: 'app',
data() {
return {
tab:[],
id:"",
num_passeport: "",
nom: "",
prenom: "",
date_naiss: "",
pays: "",
tel: "",
email:"",
date_inscription: "",
reference_vehicule: "",
rang:"",
}
},
methods: {
ajouterparticipant(){

const pr = {
id:this.id,
num_passeport:this.num_passeport,
nom:this.nom,
prenom:this.prenom,
date_naiss:this.date_naiss,
pays:this.pays,
tel:this.tel,
email:this.email,
date_inscription:this.date_inscription,
reference_vehicule:this.reference_vehicule,
rang:this.rang
}
this.axios.post("http://localhost:8000/api/participants",pr)
.then(() => {
this.$router.push('/participants')})
.catch(error => {
this.errorMessage = error.message;
console.error("There was an error!", error);})
},

},
}
</script>
<style lang="">
</style>