<template>
    <header>
        <a class="navbar-brand" href="index.html" id="topPage">A.D </a>

        <img src="/img/man.jpeg" alt="Image de chaise de barbier" title="Chaise de barbier">


      <WhiteNavbar />

        <div class="title">
            <h1> GALLERIE</h1>
            <h3> By </h3>
            <h2> Alex Defrancq </h2>
        </div>
    </header>

    <section class="introduction-gallerie">
        <h2>
            BIENVENUE
        </h2>

        <article>
            <p> Je tiens ici à remercier mes clients qui me font confiance, qui continuent de me soutenir !</p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus ab vel accusamus sequi nisi, nulla esse vero, quasi similique ut natus odio. Accusamus ipsum molestiae, quia facere architecto tempore?
            </p>
        </article>

        <div class="container-photos">
            <img class="ml-5" src="/img/gallerie/client1.png" alt="Photo de client" title="photo de client">
            <img src="/img/gallerie/client2.png" alt="Photo de client" title="photo de client">
            <img class="mr-5" src="/img/gallerie/client3.png" alt="Photo de client" title="photo de client">
            <img class="ml-5" src="/img/gallerie/client4.png" alt="Photo de client" title="photo de client">
            <img src="/img/gallerie/client5.png" alt="Photo de client" title="photo de client">
            <img class="mr-5" src="/img/gallerie/client6.png" alt="Photo de client" title="photo de client">
            <img class="ml-5" src="/img/gallerie/client7.png" alt="Photo de client" title="photo de client">
            <img src="/img/gallerie/client8.png" alt="Photo de client" title="photo de client">
            <img class="mr-5" src="/img/gallerie/client9.png" alt="Photo de client" title="photo de client">
            <img class="mb-5 ml-5" src="/img/gallerie/client10.png" alt="Photo de client" title="photo de client">
            <img class="mb-5" src="/img/gallerie/client11.png" alt="Photo de client" title="photo de client">
            <img class="mb-5 mr-5" src="/img/gallerie/client12.png" alt="Photo de client" title="photo de client">

        </div>

    </section>

      <footer>
        <div class="footer-title">
            <h2> Alex Defrancq</h2>
            <a href="http://www.thomasries.fr" target="blank"> <h3> Réalisation : Thomas R-B / 2020</h3> </a>
        </div>
        <div class="horaires">
            <h2>HORAIRES</h2>
            <h3>
                Du Mardi au Vendredi : 9h - 19h
            </h3>
            <h3>
                Samedi : 9h - 17h
            </h3>
        </div>
        <div class="social">
            <a href="https://www.instagram.com/alex.defrancq/" target="blank"><i class="fab fa-instagram"></i></a>
            <a href="https://fr-fr.facebook.com/alexdefrancq/" target="blank"><i class="fab fa-facebook"></i></a>

        </div>

    </footer>

</template>

<script>
// import Footer from '@/components/Footer.vue'
import WhiteNavbar from '@/components/navbar/WhiteNavbar.vue'

export default {
    name: "Gallerie",

    components: {
    // Footer,
    WhiteNavbar,
  }


}
</script>

<style scoped>

.introduction-gallerie {
    height: 100vh;
    position: absolute;
    top: 99rem;
    left: 0;
    right: 0;
    margin: auto;
    width: 140rem;
    padding-bottom: 8rem !important;
}

.introduction-gallerie h2 {
    font-size: 5rem;
    font-weight: 600;
    font-family: 'Viaoda Libre', sans-serif;
    text-align: center;
    padding-top: 5rem;
    text-decoration: underline;
    margin: 5rem 0 2rem 0;
}

article {
    width: 100rem;
    left: 0;
    right: 0;
    margin: auto;
}

article p {
    text-align: center;
    font-size: 1.8rem;
}

.container-photos {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 8rem;
    /* background-color: var(--background); */
    width: 150rem;
}

.container-photos img {
    height: 50rem;
    width: 40rem;
    object-fit: cover;
    margin-top: 5rem;
    border-radius: 5px;
}

/*  =========================================
/*  =========================================
          - FOOTER -
/*  =========================================
    ========================================= */

footer {
    display: flex !important;
    justify-content: space-between;
    background-color: #02020A;
    position: absolute;
    top: 355rem;
    left: 0;
    right: 0;
    margin: auto;
    margin-top: 3rem;
    margin-left: 19rem;
    width: 150rem;
    height: auto;
}

footer h2,
footer h3 {
    color: #fff;
    margin: 1rem 0 0 2rem;
}

footer h3 {
    font-size: 1.4rem;
    margin-bottom: 1rem;
    font-style: italic;
}

footer a:hover,
footer h3:hover {
    text-decoration: none !important;
    color: var(--liens);
}

.fa-instagram,
.fa-facebook {
    color: #fff;
    font-size: 3rem;
    margin: 1rem 2rem 0 0;
}

.fa-instagram:hover,
.fa-facebook:hover {
    color: var(--liens);
}

</style>
