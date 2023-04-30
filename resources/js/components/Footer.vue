<template>
      <footer>
        <div class="footer-title">
            <h2> Alex Defrancq</h2>
            <a href="http://www.thomasries.fr" target="blank"> <h3> Réalisation : Thomas R-B / 2020</h3> </a>
        </div>

        <div class="horaires">
            <h2>HORAIRES</h2>
            <h4>
                Du Mardi au Vendredi : 9h - 19h
            </h4>
            <h4>
                Samedi : 9h - 17h
            </h4>
        </div>

        <div class="social">
            <a href="https://www.instagram.com/alex.defrancq/" target="blank"><i class="fab fa-instagram"></i></a>
            <a href="https://fr-fr.facebook.com/alexdefrancq/" target="blank"><i class="fab fa-facebook"></i></a>

        </div>

    </footer>
</template>

<script>
export default {
    name: 'Footer',
}
</script>

<style scoped>
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