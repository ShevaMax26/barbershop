<template>
  <div id="nav">
    <!-- <router-link to="/">Home</router-link> | -->
    <!-- <router-link to="/about">About</router-link> -->
  </div>
  <router-view/>
</template>

<style>
/*  =========================================
/*  =========================================
          - Alex Defrancq Barber Shop -
/*  =========================================
    ========================================= */
/*
    Author: Thomas R-B
    Version: 1.0
    Date: 31/12/2020
    URI: www.thomasries.fr
*/


* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-size: 10px;
    font-family: 'Playfair Display', sans-serif; 
}

html {
    --paragraph-color: #000;
    --btn-color: ;
    --background: #191919;
    --or: #e0c496;
    --liens: #f3bb0c;
}

header > img {
    position: absolute;
    height: 100vh;
    width: 100%;
    object-fit: cover;
    opacity: .8;
}

.navbar-brand {
    position: absolute !important;
    top: 0;
    left: 1rem;
    font-size: 3rem !important;
    font-family: 'Viaoda Libre', sans-serif;
    font-weight: 600;
}


.title {
    position: absolute;
    top: 35rem;
    left: 0;
    right: 0;
    margin: auto;
    width: 60rem;
    text-align: center;
    background-color: #fff;
    opacity: .6;
    border-radius: 5px;
}

.title h1 {
    font-size: 7rem;
    padding-top: 2rem;
    color: var(--paragraph-color);
}

.title h2 {
    font-size: 4rem;
    margin-top: 1rem;
    padding-bottom: 2rem;
    color: var(--paragraph-color);
}

</style>
