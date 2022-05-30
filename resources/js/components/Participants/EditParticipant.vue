<template lang="">
<div class="divform">
<form @submit.prevent="modifierparticipant">

<input type="number"  placeholder="num_passeport" v-model="participant.num_passeport">

<input type="text"  placeholder="nom" v-model="participant.nom">

<input type="text"  placeholder="prenom" v-model="participant.prenom">

<input type="text"  placeholder="date_naiss" v-model="participant.date_naiss">

<input type="text"  placeholder="pays" v-model="participant.pays">

<input type="number"  placeholder="tel" v-model="participant.tel">

<input type="text"  placeholder="email" v-model="participant.email">

<input type="text"  placeholder="date_inscription" v-model="participant.date_inscription">

<input type="text"  placeholder="reference_vehicule" v-model="participant.reference_vehicule">

<!-- <button type="submit" class="btn btn-success">Modifier participant</button> -->
<input type="submit" value="Modifier Participant" class="bttn">
</form>
</div>
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