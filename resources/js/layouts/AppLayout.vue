<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <main>
        <!--barra de navegacion-->
        <nav class="navbar">
            <Link href="/dashboard">STORE</Link>
        
            
            <div class="hbox">
                <Link href="/cart">Carrito</Link>
                <Link href="/admin">Admin</Link>
            </div>
        </nav>

        <slot />

        <footer class="footer">
            <h6>© Carlos Chan</h6>
        </footer>
    </main>
</template>
