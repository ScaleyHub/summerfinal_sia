<template>
    <h1 style="color:aliceblue"> Guitars </h1>
    <hr>
    <div class="container justify-content-between ">
        <div class="d-flex justify-content-between ">
        <div class="card border-secondary " v-for="guitar in guitars" :key="guitar.id">
            <div class="card-header">
                <h4 style="color: white">{{guitar.name}}</h4>
            </div>
            <div class="card-body">
                <h6 style="color: white">Specifications:</h6>
                <h6 v-for="description in guitar.descriptions" :key="description.id">
                  <strong>Brand:</strong>  {{description.brand}}  
                </h6>
                <h6 v-for="description in guitar.descriptions" :key="description.id">
                    <strong>Pick Ups:</strong> {{description.pickup}}  
                </h6>
                <h6 v-for="description in guitar.descriptions" :key="description.id">
                    <strong>Body Material:</strong> {{description.body}}  
                </h6>
                <h6 v-for="description in guitar.descriptions" :key="description.id">
                    <strong>Neck Shape:</strong> {{description.neck}}  
                </h6>
                <h6 v-for="description in guitar.descriptions" :key="description.id">
                    Designed in Year {{description.year}}  
                </h6>

            </div>
        </div>
    </div>
    </div>
    
</template>


<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        guitars: Array
    }
}
</script>

<style scoped>
    .card-whole{
    width: 290px;
        }
    .card{
        /* padding: 3px; */
        margin: 2px;
        background-color: transparent;
        width:350px;
    }
    .card:hover{
     transform: scale(1.05);
     box-shadow: 0 10px 20px rgba(255, 245, 245, 0.429), 0 4px 8px rgba(0,0,0,.06);
    }
    .card-body{
        background-color: rgba(45, 43, 43, 0.782);
    }
    .card-header{
        background-color: transparent;
        height:70px ;

    }
    .card-header h4{
         overflow-wrap: break-word;
         white-space: initial;
    }
    .card-body h6{
        color: white;
        -webkit-text-stroke-width: .3px;
        -webkit-text-stroke-color: black;       
    }
    .card-body strong{
        color: bisque;
    }

</style>