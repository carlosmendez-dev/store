<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

// componentes
import ArticleCard from '@/components/Dashboard/ArticleCard.vue';

const page = usePage();
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout>
        Hola desde Dashboard
        <section class="flowbox">    
            <ArticleCard v-for="article in page.props.articles" :article="article"></ArticleCard>
        </section>
    </AppLayout>
</template>
