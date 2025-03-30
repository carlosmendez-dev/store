<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';
const props = defineProps({
    cart_article:Object
})

const form = useForm({
    quantity:props.cart_article.quantity
})

function updateQuantity(){
   form.patch(`/cart-article/${props.cart_article.id}`,{
    preserveScroll:true
   })
}

</script>

<template>
    <article class="card vbox">
        <div class="size-[200px] flex justify-center items-center">    
            <img :src="cart_article.article.image" alt="" class="h-full">
        </div>
        {{ cart_article.article.name }}
        <h3>Disponibles: {{ cart_article.article.stock }}</h3>
        
        
        <div class="flex flex-col">    
            <label for="">Cantidad</label>
            <input class="form-control" type="number" min="1" :max="cart_article.article.stock" v-model="form.quantity" @change="updateQuantity">
        </div>
        
        <h3 class="font-bold text-green-600">${{ cart_article.article.price *  cart_article.quantity }}</h3>
        <div>
            <button @click="router.delete(`/cart-article/${cart_article.id}`)" class="btn btn-danger">Eliminar</button>
        </div>
    </article>
</template>