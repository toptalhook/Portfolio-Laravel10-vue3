<template>
    <!-- Nav Main -->
    <nav class="nav">
        <div class="nav_wrapper">
                <span class="nav_close">
                    <i class="fas fa-window-close"></i>
                </span>
            <ul class="nav_list">
                <li class="nav_item">
                    <router-link class="nav_link nav__active" to="/admin/home">
                            <span class="nav_link--span--icon">
                                <i class="fas fa-home nav__link--icon"> </i>
                            </span>
                        <span class="nav_link--span--navname">
                                Home
                            </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link class="nav_link " to="/admin/about">
                            <span class="nav_link--span--icon">
                               <i class="fas fa-address-card nav__link--icon"></i>
                            </span>
                        <span class="nav_link--span--navname">
                                About Me
                            </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <a class="nav_link " href="service.html">
                            <span class="nav_link--span--icon">
                                <i class="fas fa-home nav__link--icon"> </i>
                            </span>
                        <span class="nav_link--span--navname">
                                Services
                            </span>
                    </a>
                </li>
                <li class="nav_item">
                    <a class="nav_link " href="skill.html">
                            <span class="nav_link--span--icon">
                                <i class="fas fa-home nav__link--icon"> </i>
                            </span>
                        <span class="nav_link--span--navname">
                                Skills
                            </span>
                    </a>
                </li>
                <li class="nav_item">
                    <a class="nav_link " href="education.html">
                            <span class="nav_link--span--icon">
                                <i class="fas fa-home nav__link--icon"> </i>
                            </span>
                        <span class="nav_link--span--navname">
                                Education
                            </span>
                    </a>
                </li>
                <li class="nav_item">
                    <a class="nav_link " href="experience.html">
                            <span class="nav_link--span--icon">
                                <i class="fas fa-home nav__link--icon"> </i>
                            </span>
                        <span class="nav_link--span--navname">
                                Experiences
                            </span>
                    </a>
                </li>
                <li class="nav_item">
                    <a class="nav_link " href="project.html">
                            <span class="nav_link--span--icon">
                                <i class="fas fa-home nav__link--icon"> </i>
                            </span>
                        <span class="nav_link--span--navname">
                                Projects
                            </span>
                    </a>
                </li>
                <li class="nav_item">
                    <a class="nav_link " href="#">
                            <span class="nav_link--span--icon">
                                <i class="fas fa-home nav__link--icon"> </i>
                            </span>
                        <span class="nav_link--span--navname">
                                Testimonial
                            </span>
                    </a>
                </li>
                <li class="nav_item">
                    <a class="nav_link " href="#">
                            <span class="nav_link--span--icon">
                                <i class="fas fa-home nav__link--icon"> </i>
                            </span>
                        <span class="nav_link--span--navname">
                                Messages
                            </span>
                    </a>
                </li>
                <li class="nav_item">
                    <a class="nav_link " href="#">
                            <span class="nav_link--span--icon">
                                <i class="fas fa-home nav__link--icon"> </i>
                            </span>
                        <span class="nav_link--span--navname">
                                Users
                            </span>
                    </a>
                </li>
                <li class="nav_item">
                    <a class="nav_link " href="#">
                            <span class="nav_link--span--icon">
                                <i class="fas fa-home nav__link--icon"> </i>
                            </span>
                        <span class="nav_link--span--navname">
                                Setting
                            </span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- End Nav Main -->

</template>

<script>
export default {
    name: "sidebar"
}
</script>

<style scoped>

</style>
