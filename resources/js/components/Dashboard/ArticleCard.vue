<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
const props = defineProps({
    article:Object
})

const form = useForm({
    article_id:props.article.id
})

function addTocart(){
    form.post("/cart-article")
}
</script>

<template>
    <article class="card">
        <div class="size-[200px] flex justify-center items-center">    
            <img :src="article.image" alt="" class="h-full">
        </div>
        <div class="flex flex-col gap-1 mt-5">    
            <h1 class="font-bold">{{ article.name }}</h1>
            <h2 class="font-bold text-green-600">${{ article.price }}</h2>
            <button class="btn btn-primary w-full" @click="addTocart">AGREGAR AL CARRITO</button>
        </div>
    </article>
</template>