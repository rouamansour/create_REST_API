<template>
    <div>
    <h2 class="text-center">Liste des Participants </h2>

    <table class="table" id="example">
    <thead>
    <tr>
    <th>numero passeport</th>
    <th>nom</th>
    <th>prenom</th>
    <th>date naissance</th>
    <th>Pays</th>
    <th>tel</th>
    <th>email</th>
    <th>date inscription </th>
    <th>rang</th>

    </tr>
    </thead>
    <tbody>
    <tr v-for="p in Participants" :key="p.id">

    <td>{{p.num_passeport}}</td>
    <td>{{p.nom}}</td>
    <td>{{p.prenom}}</td>
    <td>{{p.date_naiss}}</td>
    <td>{{p.pays}}</td>
    <td>{{p.tel}}</td>
    <td>{{p.email}}</td>
    <td>{{p.date_inscription}}</td>
    <td>{{p.reference_vehicule}}</td>
    <td>{{p.rang}}</td>
    <td>
    <button @click.prevent="deleteParticipant(p.id)" class="btn btn-danger">
    Supprimer
    </button>
    <router-link :to="{name: 'editParticipant', params: { id: p.id}}" class="btn btn-success">Modifier</router-link>
    
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </template>

    <script>
    //Bootstrap and jQuery libraries
    import 'bootstrap/dist/css/bootstrap.min.css';
    import 'jquery/dist/jquery.min.js';
    //Datatable Modules
    import "datatables.net-dt/js/dataTables.dataTables"
    import "datatables.net-dt/css/jquery.dataTables.min.css"
    import $ from 'jquery';
    export default {
    data() {
    return {
    Participants: []
    }
    },
    mounted() {
    this.getParticipants();
    },
    methods: {
    deleteParticipant(id) {
    if (window.confirm("Etes-vous sûr de vouloir supprimer ?")) {
    this.axios
    .delete(`http://localhost:8000/api/participants/${id}`)
    .then(res => {
    console.log(res)
    this.getParticipants();
    })
    .catch(error => {
    console.log(error)
    });
    }
    },
    getParticipants(){
    this.axios
    .get('http://localhost:8000/api/participants/')
    .then(response => {
    this.Participants = response.data;
    $(function() {$('#example').DataTable();});
    });
    }
    }
    }
</script>