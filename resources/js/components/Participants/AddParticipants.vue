<template lang="">
    <div class="divform">
        <form @submit.prevent="ajouterparticipant">
            <label>Numero passeport </label>
            <input type="number" v-model="num_passeport" />

            <label>Nom Participant</label>
            <input type="text" v-model="nom" />

            <label>Prenom Participant </label>
            <input type="text" v-model="prenom" />

            <label>Date naissance </label>
            <input type="text" v-model="date_naiss" />

            <label>Pays </label>
            <input type="text" v-model="pays" />

            <label>Numero telephone </label>
            <input type="number" v-model="tel" />

            <label>Email</label>
            <input type="text" v-model="email" />

            <label>Date inscription </label>
            <input type="text" v-model="date_inscription" />

            <label>Reference vehicule </label>
            <input type="text" v-model="reference_vehicule" />

            <label>Rang </label>
            <input type="number" v-model="rang" />

            <!-- <button type="submit" class="btn btn-success">Ajouter Participant</button> -->
            <input type="submit" value="Ajouter Participant" class="bttn" />
        </form>
    </div>
</template>

<script>
export default {
    name: "app",
    data() {
        return {
            tab: [],
            id: "",
            num_passeport: "",
            nom: "",
            prenom: "",
            date_naiss: "",
            pays: "",
            tel: "",
            email: "",
            date_inscription: "",
            reference_vehicule: "",
            rang: "",
        };
    },
    methods: {
        ajouterparticipant() {
            const pr = {
                id: this.id,
                num_passeport: this.num_passeport,
                nom: this.nom,
                prenom: this.prenom,
                date_naiss: this.date_naiss,
                pays: this.pays,
                tel: this.tel,
                email: this.email,
                date_inscription: this.date_inscription,
                reference_vehicule: this.reference_vehicule,
                rang: this.rang,
            };
            this.axios
                .post("http://localhost:8000/api/participants", pr)
                .then(() => {
                    this.$router.push("/participants");
                })
                .catch((error) => {
                    this.errorMessage = error.message;
                    console.error("There was an error!", error);
                });
        },
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
