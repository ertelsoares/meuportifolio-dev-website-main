<template>
  <main class="main">
    <Home></Home>
    <MySkills class="my-skills section-margin"> </MySkills>
    <AboutMe class="about-me"></AboutMe>
    
    <LastRepos class="last-repos"></LastRepos>
   
    <ProfessionalProfile
      class="skill-cards section-margin"
    ></ProfessionalProfile>
    <SendMail class="send-mail section-margin"></SendMail>
    <Footer class="footer section-margin"></Footer>
  </main>
</template>

<script>
import Home from "./components/home/Home.vue";
import AboutMe from "./components/about-me/AboutMe.vue";
import MySkills from "./components/my-skills/MySkills.vue";
import BackgroundBlue from "./components/shared/BackgroundBlue.vue";
import LastRepos from "./components/last-repos/LastRepos.vue";
import ProfessionalProfile from "./components/professional-profile/ProfessionalProfile.vue";
import SendMail from "./components/send-mail/SendMail.vue";
import Footer from "./components/footer/Footer.vue";

export default {
  components: {
    Home,
    AboutMe,
    MySkills,
    BackgroundBlue,
    LastRepos,
    ProfessionalProfile,
    SendMail,
    Footer,
  },
};
</script>

<style >
.main {
  @apply bg-white-gray font-body w-full overflow-hidden
  flex flex-col
  box-border;
}

.last-repos {
  @apply -mt-48 mx-auto;
}

.skill-cards {
  @apply xl:mt-12 !important;
}

.section-margin {
  @apply mt-24;
}
</style>