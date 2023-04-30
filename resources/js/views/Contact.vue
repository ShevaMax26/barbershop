<template>
      <header>
        <a class="navbar-brand" href="index.html" id="topPage">A.D </a>

        <img src="/img/man2.jpeg" alt="Image de chaise de barbier" title="Chaise de barbier">


      <WhiteNavbar />

        <div class="title">
            <h1> CONTACT</h1>
            <h2> & </h2>
            <h1> LOCALISATION</h1>

        </div>
    </header>

    <section class="contact">

        <h2>
            ME CONTACTER & ME REJOINDRE
        </h2>

        <h4>
            <i class="fas fa-map-marked-alt"></i> Trouver le Shop
        </h4>
        <h3> Retrouvez moi avec <a href="https://www.tintastrasbourg.com/"> TINTA </a> au 3, rue de l'ail - 67100 STRASBOURG </h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.580560328674!2d7.7445506160746405!3d48.57958177926104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c852aea054a5%3A0xda1b1f1af181ff2!2s3%20Rue%20de%20l&#39;Ail%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1609488314824!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


        <h4>
            <i class="fas fa-mobile-alt"></i> De vive voix
        </h4>
        <h3> En composant le 06.12.34.56.78 </h3>

        <h4>
            <i class="far fa-paper-plane"></i> Par email
        </h4>
        <h3> En cilquant sur <a href="mailto:contact@alexdefrancq.com"> contact@alexdefrancq.com </a> </h3>

    </section>
<Footer />

</template>

<script>
// import Footer from '@/components/Footer.vue'
import WhiteNavbar from '@/components/navbar/WhiteNavbar.vue'
import Footer from '@/components/Footer.vue'



export default {
    name: "Contact",

    components: {
    Footer,
    WhiteNavbar,
  }


}
</script>

<style scoped>

.title h2 {
    font-size: 5rem;
    margin-bottom: -4rem;
}
.contact {
    height: 100vh;
    position: absolute;
    top: 101rem;
    left: 0;
    right: 0;
    margin: auto;
    width: 140rem;
}

.contact h2 {
    font-size: 5rem;
    font-weight: 600;
    font-family: 'Viaoda Libre', sans-serif;
    text-align: center;
    padding-top: 5rem;
    text-decoration: underline;
    margin: 5rem 0 2rem 0;
}

.contact h4 {
    text-align: center;
    font-size: 4rem;
    margin-top: 5rem;
}
.contact h3 {
    text-align: center;
    margin-top: 2rem;
}

.contact a {
    font-size: 2rem;
    color: #000;
    font-weight: 600;;
}

.contact a:hover {
    color: var(--liens) !important;
}

.fas,
.far {
    font-size: 4rem;
    margin-right: 1rem;
}

iframe {
    margin-top: 3rem;
    margin-left: 12rem;
    width: 120rem;
    height: 40rem;
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
    top: 210rem;
    left: 0;
    right: 0;
    margin: auto;
    margin-top: 3rem;
    width: 140rem;
    height: auto;
}

footer h2,
footer h3,
footer h4 {
    color: #fff;
    margin: 1rem 0 0 2rem;
}

footer h3,
footer h4 {
    font-size: 1.4rem;
    margin-bottom: 1rem;
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
