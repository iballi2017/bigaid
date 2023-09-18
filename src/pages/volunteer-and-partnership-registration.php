<?php
include_once("../components/header.php");
?>

<section class="page-header title-bg-one">
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h1 class="title">Become A Volunteer</h1>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h2 class="fw-bold fs-300 mb-2 md:mb-6 text-primary">Join the BIGAiD App Expert Community</h2>
            <p class=" mb-2 md:mb-6">Professionals like you volunteering and sacrificing their time and expertise, making a difference in people's lives globally are the reason many lives are been saved and the energy behind organizations fuelling community ideas and ambitious vision to meet global goals of a united and equitable world where health is accessible to all.
                By joining the BIGAiD Volunteer and Partner Community, you have become a part of our journey: the building of a global community and movement for quality global health, wellness, nutrition, education, community development, and social good.
            </p>


            <!-- TAB NAVIGATION -->
            <div class="tab-nav vertical mb-8">
                <div class="tab-nav-item">
                    <input type="radio" value="volunteer" name="signup-forms" id="volunteer-form-radio" checked="true">
                    <label for="volunteer-form-radio">Volunteer</label>
                    <span class="horiline"></span>
                </div>
                <div class="tab-nav-item">
                    <input type="radio" value="partner" name="signup-forms" id="partner-form-radio">
                    <label for="partner-form-radio">Partner</label>
                    <span class="horiline"></span>
                </div>
            </div>

            <!-- TAB CONTENT -->

            <!-- Volunteer Form -->
            <div id="volunteer-form" class="tab-content active">
                <?php include_once("../components/volunteer-form.php") ?>
            </div>

            <!-- Partner Form -->
            <div id="partner-form" class="tab-content">
                <?php include_once("../components/partnership-form.php") ?>
            </div>
        </div>
    </div>
</section>

<?php
include_once("../components/footer.php");
?>