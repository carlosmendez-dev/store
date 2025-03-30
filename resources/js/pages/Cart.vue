<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

// componentes
import CartArticleCard from '@/components/Cart/CartArticleCard.vue';

const page = usePage();
console.log(page.props.cart_articles);
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout>
        <section class="flowbox">
            <CartArticleCard v-for="cart_article in page.props.cart_articles" :cart_article="cart_article"></CartArticleCard>
        </section>
    </AppLayout>
</template>
