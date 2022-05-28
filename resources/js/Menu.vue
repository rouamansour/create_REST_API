<template>
    
    <nav class="navbar navbar-dark bg-dark justify-content-between flex-nowrap flex-row">
        
        <div class="container">
            
            <a class="navbar-brand float-left">
                <router-link class="nav-link navbar-brand pr-3" to="/register">Authentification</router-link>
            </a>
            <ul class="nav navbar-nav flex-row float-right">
                <li class="nav-item">
                    <router-link class="nav-link navbar-brand pr-3" to="/"> Home </router-link>
                </li>
                    <li class="nav-item">
                    <router-link class="nav-link navbar-brand pr-3" to="/participants"> Participants </router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link navbar-brand pr-3" to="/addParticipant">Ajout Participant </router-link>
                </li>
                <li>
                    <a class="navbar-brand float-left">
                            <router-link class="nav-link" to="/logout"> Logout </router-link>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {};
</script>