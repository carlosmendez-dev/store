<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

const page = usePage();
</script>

<template>
    <main class="flex flex-col h-screen">
        <!--barra de navegacion-->
        <nav class="navbar">
            <Link href="/dashboard"><i class="bi bi-bag-fill me-1"></i>STORE</Link>
        
            
            <div class="hbox">
                <Link class="nav-link" href="/cart"><i class="bi bi-cart me-1"></i><span class="badge" v-if="page.props.cart_articles.length>0">{{ page.props.cart_articles.length }}</span> <span class="hidden sm:block">Carrito</span></Link>
                <Link class="nav-link" href="/admin"><i class="bi bi-key me-1" v-if="page.props.auth.user.is_admin==true"></i> <span class="hidden sm:block">Admin</span></Link>
            </div>
        </nav>

        <section class="grow p-6">
            <slot />
        </section>

        <footer class="footer">
            <h6>© Carlos Chan</h6>
        </footer>
    </main>
</template>
