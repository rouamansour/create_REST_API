<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
         <!-- <i class="fa fa-home"></i> -->
        <i class="fa fa-home" aria-hidden="true"></i>
        <a class="navbar-brand" href="/">Acceuil</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <router-link
                        class="nav-link navbar-brand pr-3"
                        to="/participants"
                    >
                        Listes Participants
                    </router-link>
                </li>
                <li class="nav-item active">
                    <router-link
                        class="nav-link navbar-brand pr-3"
                        to="/addParticipant"
                    >
                        Ajout Participant
                    </router-link>
                </li>
                 <li class="nav-item active">
                    <router-link
                        class="nav-link navbar-brand pr-3"
                        to="/Register"
                    >
                        Register
                    </router-link>
                </li>
                <li class="nav-item active">
                    <router-link
                        class="nav-link navbar-brand pr-3"
                        to="/Login"
                    >
                        Login
                    </router-link>
                </li>

                    <!-- <li class="nav-item active">
                        <router-link
                            class="form-control mr-sm-2"
                            to="/register"
                        >
                            Register
                        </router-link>
                    </li>

                    <li class="nav-item active">
                        <router-link class="form-control mr-sm-2" to="/logout">
                            Logout
                        </router-link>
                    </li> -->

            </ul>
        </div>
    </nav>
</template>

<script>
export default {};
</script>
