<template>
 <div class="content">
    <h1 style="color:white">
      Welcome to <br><span style="color:cyan">Guitar</span><span style="color:#FBCEB1">Stop</span>!
    </h1>
     <a href="/guitars" class="btn btn-secondary">Browse</a>
 </div>   
 
 
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'

const message = "Testing..."
const number = ref(0)
function increment(){
    number.value++
}
function decrement(){
    number.value--
}
</script>

<script>
export default {
    layout: Layout
}


</script>

<style scoped>
  .content{
    text-align: center;
    margin-top: 150px;
     
  }

  .content h1{
  font-weight: bold;
  color: #fff;
  font-size: 90px;
   -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color:rgb(50, 75, 74);
  }
</style>
