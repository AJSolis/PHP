<script setup>
import { RouterLink, RouterView } from 'vue-router'
import navbar from './components/navbar.vue'
</script>

<template>
  <navbar />
  <header>

    <div class="wrapper">
      <nav>

      </nav>
    </div>
  </header>

  <RouterView />
</template>
