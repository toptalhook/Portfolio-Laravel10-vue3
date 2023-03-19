<template>
    <Base/>


    <!--==================== MAIN ====================-->
    <main class="main">
        <!-- Side Nav Dummy-->
        <div class="main__sideNav"></div>
        <!-- End Side Nav -->
        <!-- Main Content -->
        <div class="main__content">
            <!-- ==================-->
            <!-- Overview Page -->
            <section class="overview" id="overview">
                <div class="overview_left">
                    <div class="overview_analyse">
                        <canvas id="chart" width="1228" height="614"
                                style="display: block; box-sizing: border-box; height: 614px; width: 100%;"></canvas>
                    </div>
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Skills</h1>
                        </div>
                        <div class="titlebar_item">

                        </div>
                    </div>
                    <div class="overview_skills">
                        <div class="overview_skills-title">
                            <h3>Frontend developer</h3>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">HTML</h3>
                                <span class="skills_number">90%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_html"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">CSS</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_css"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">JavaScript</h3>
                                <span class="skills_number">75%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_js"></span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="overview_skills">
                        <div class="overview_skills-title">
                            <h3>Backend developer</h3>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">PHP</h3>
                                <span class="skills_number">90%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_html"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Node Js</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_css"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Python</h3>
                                <span class="skills_number">75%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_js"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Ruby</h3>
                                <span class="skills_number">75%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_js"></span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="overview_skills">
                        <div class="overview_skills-title">
                            <h3>Designer</h3>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Figma</h3>
                                <span class="skills_number">90%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_html"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Sketch</h3>
                                <span class="skills_number">80%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_css"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Adobe XD</h3>
                                <span class="skills_number">75%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_js"></span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Photoshop</h3>
                                <span class="skills_number">75%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage skills_js"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overview_right">
                    <div class="titlebar">
                        <div class="titlebar_item">
                            <h1>Overview Dashboard</h1>
                        </div>
                        <div class="titlebar_item">

                        </div>
                    </div>

                    <!-- TOP CARDS -->
                    <div class="overview_cards">
                        <div class="overview_cards-item">
                            <div class="overview_data">
                                <p>Skills</p>
                                <span>16</span>
                            </div>
                            <div class="overview_link">
                                <span></span>
                                <a href="#">View Reports</a>
                            </div>
                        </div>
                        <div class="overview_cards-item">
                            <div class="overview_data">
                                <p>Educations</p>
                                <span>16</span>
                            </div>
                            <div class="overview_link">
                                <span></span>
                                <a href="#">View Reports</a>
                            </div>
                        </div>
                        <div class="overview_cards-item">
                            <div class="overview_data">
                                <p>Experience</p>
                                <span>16</span>
                            </div>
                            <div class="overview_link">
                                <span></span>
                                <a href="#">View Reports</a>
                            </div>
                        </div>
                        <div class="overview_cards-item">
                            <div class="overview_data">
                                <p>Services</p>
                                <span>16</span>
                            </div>
                            <div class="overview_link">
                                <span></span>
                                <a href="#">View Reports</a>
                            </div>
                        </div>
                        <div class="overview_cards-item">
                            <div class="overview_data">
                                <p>Projects</p>
                                <span>9</span>
                            </div>
                            <div class="overview_link">
                                <span></span>
                                <a href="#">View Reports</a>
                            </div>
                        </div>
                        <div class="overview_cards-item">
                            <div class="overview_data">
                                <p>Testimonials</p>
                                <span>9</span>
                            </div>
                            <div class="overview_link">
                                <span></span>
                                <a href="#">View Reports</a>
                            </div>
                        </div>
                        <div class="overview_cards-item">
                            <div class="overview_data">
                                <p>Messages</p>
                                <span>9</span>
                            </div>
                            <div class="overview_link">
                                <span></span>
                                <a href="#">View Reports</a>
                            </div>
                        </div>
                        <div class="overview_cards-item">
                            <div class="overview_data">
                                <p>Users</p>
                                <span>9</span>
                            </div>
                            <div class="overview_link">
                                <span></span>
                                <a href="#">View Reports</a>
                            </div>
                        </div>


                    </div>
                    <!-- MEDIUM CARDS -->
                    <div class="overview_table">
                        <div class="overview_table-title">
                            <div class="titlebar">
                                <div class="titlebar_item">
                                    <h1>Latest Projects</h1>
                                </div>
                                <div class="titlebar_item">

                                </div>
                            </div>
                            <div class="table">
                                <div class="overview_table-header">
                                    <p>Image</p>
                                    <p>Product</p>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio2.jpg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio3.jpg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                            </div>
                        </div>
                        <div class="overview_table-title">
                            <div class="titlebar">
                                <div class="titlebar_item">
                                    <h1>Latest Testimonials</h1>
                                </div>
                                <div class="titlebar_item">

                                </div>
                            </div>
                            <div class="table">
                                <div class="overview_table-header">
                                    <p>Image</p>
                                    <p>Product</p>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                                <div class="overview_table-items">
                                    <img src="assets/img/portfolio1.jpeg" style="height:50px;width:50px;"/>
                                    <a>Product item.name item.name item.name</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>


            <!--==================== ABOUT ====================-->


            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">

            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">

            </section>

            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">

            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">

            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">

            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">

            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">

            </section>
        </div>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">

    </footer>

    <h1>welcome to admin overview dashboard</h1>
    <router-link to="/">Home Page</router-link>
    <br>
    <button @click="logout">
        Logout
    </button>
</template>

<script>

import {useRouter} from "vue-router";

import Base from "../layouts/base.vue";

export default {
    name: "index",
    components: {Base},
    setup() {
        const router = useRouter()
        const logout = () => {
            localStorage.removeItem('token')
            router.push('/')
        }

        return {
            logout
        }
    }
}
</script>

<style scoped>

</style>
