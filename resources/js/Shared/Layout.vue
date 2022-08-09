<template>
   <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./"><span style="color:cyan">Guitar</span><span style="color:blanchedalmond">Stop</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected':$page.component=='Home'}" aria-current="page" href="/">Home</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected':$page.component=='Guitar'}" href="/guitars">Guitars</Link>
        </li>
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected':$page.component=='About'}" href="/about">About</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected':$page.component=='Contact'}" href="/contact">Contact</Link>
        </li>

      </ul>
    </div>
  </div>
</nav>

<section class="container">
<slot />

</section>
  <footer class="text-center mt-5 " >
    Copyright &copy; 2022. All Rights Reserved.
  </footer>
</template>


<script setup>
  import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>
.container{
}
  .footer{
     background-color: rgba(255, 255, 255, 0.876);
  }

  .selected{
    color:cyan;
    font-weight: bold;
    border-width:1px; 
    border-style:solid;
    border-color: cyan;
    border-radius: 25px;
  }
</style>