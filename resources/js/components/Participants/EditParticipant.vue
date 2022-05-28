<template lang="">
<form @submit.prevent="modifierparticipant">
<div class="form-group">

<input type="number" class="form-control" placeholder="num_passeport" v-model="participant.num_passeport">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="nom" v-model="participant.nom">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="prenom" v-model="participant.prenom">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="date_naiss" v-model="participant.date_naiss">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="pays" v-model="participant.pays">

</div>
<div class="form-group">

<input type="number" class="form-control" placeholder="tel" v-model="participant.tel">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="email" v-model="participant.email">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="date_inscription" v-model="participant.date_inscription">

</div>
<div class="form-group">

<input type="text" class="form-control" placeholder="reference_vehicule" v-model="participant.reference_vehicule">

</div>

<div class="form-group">

<input type="number" class="form-control" placeholder="rang" v-model="participant.rang">

</div>



<button type="submit" class="btn btn-block btn-primary">Modifier participant</button>
</form>
</template>

<script>

export default {
name: 'edit',
data() {
return {
tab:[],
participant:{},
}
},

methods: {
modifierparticipant(){
this.axios.patch(`http://localhost:8000/api/participants/${this.$route.params.id}`,this.participant)
.then(() => {
this.$router.push('/participants')})
.catch(error => {
this.errorMessage = error.message;
console.error("There was an error!", error);})
},


getOneParticipant(){
this.axios.get(`http://localhost:8000/api/participants/${this.$route.params.id}`).then((res) => {
this.participant = res.data;
});
}

},
created() {

this.getOneParticipant() ;

},
}
</script>

<style lang="">
</style>