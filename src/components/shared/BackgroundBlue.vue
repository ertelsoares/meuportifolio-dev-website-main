<template>
  <section class="first-bg">
    <slot></slot>
  </section>
</template>

<style scoped>
.first-bg {
  @apply flex flex-col items-center
  h-[40rem] w-full
  bg-blue
  text-2xl;
  border-radius: 48px 48px 0px 0px;
}
</style>