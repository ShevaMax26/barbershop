<template>
          <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                <router-link to="/"> <li class="nav-item active">
                  <a class="nav-link" href="#"> ACCUEIL <span class="sr-only"></span></a>
                </li> </router-link>

                <router-link to="/prestations"> <li class="nav-item active">
                  <a class="nav-link" href="#"> PRESTATIONS <span class="sr-only"></span></a>
                </li> </router-link>

                <li class="nav-item">
                    <a class="nav-link" href="https://booking.wavy.pro/alexisdefrancq"> RÉSERVER </a>
                </li>

                <router-link to="/gallerie"> <li class="nav-item"> 
                     <a class="nav-link" href="#"> GALLERIE </a> 
                </li> </router-link>

                <router-link to="/contact"> <li class="nav-item"> 
                     <a class="nav-link" href="#"> CONTACT </a> 
                </li> </router-link>
              </ul>
            </div>
        </nav>
</template>

<script>
export default {
    name: 'WhiteNavbar'

}
</script>

<style scoped>

.navbar {
    position: absolute !important;
    top: 0;
    right: 2rem;
    background-color: transparent !important;
}
.navbar-nav {
    text-align: right;
}

router-link {
    padding-top: -2rem !important;
}

.nav-item a {
    color: #fff !important;
    font-size: 1.8rem;
    margin-left: 2rem;
    font-weight: 600;
}

.nav-item a:hover {
    color: var(--liens) !important;
    text-decoration: underline;
    font-weight: 700;
}


</style>