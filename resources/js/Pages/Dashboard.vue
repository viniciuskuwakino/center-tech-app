<script setup lang="ts">
import MainLayout from '@/Layouts/MainLayout.vue'
import { Head } from '@inertiajs/vue3';

</script>

<template>
  <Head title="Dashboard" />

  <MainLayout>
    <div class="flex items-center">
      <h1 class="text-lg font-semibold md:text-2xl">
        Dashboard
      </h1>
    </div>
    <div class="flex flex-1 items-center justify-center rounded-lg border border-dashed shadow-sm">
      <div class="flex flex-col items-center gap-1 text-center">
        <h3 class="text-2xl font-bold tracking-tight">
          You're logged in!
        </h3>
        <p class="text-sm text-muted-foreground">
          You're logged in!
        </p>
      </div>
    </div>
  </MainLayout>
</template>
