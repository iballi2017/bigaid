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

            <div class="flex mb-8">
                <!-- <a href="#" class="primary-button">Sign Up As a Volunteer</a> -->
                <div>
                    <input type="radio" value="volunteer" name="signup-forms" id="volunteer-form-radio">
                    <label for="volunteer-form-radio" class="primary-button cursor-pointer">Sign Up As a Volunteer</label>
                </div>
                <div>
                    <input type="radio" value="partner" name="signup-forms" id="partner-form-radio">
                    <label for="partner-form-radio" class="primary-button cursor-pointer">Sign Up As a Partner</label>
                </div>
                <div class="mx-2"></div>
                <!-- <a href="#" class="secondary-button">Sign Up As a Partner</a> -->
            </div>

            <!-- Volunteer Form -->
            <?php include_once("../components/volunteer-form.php") ?>
            <!-- Partner Form -->
            <?php include_once("../components/partnership-form.php") ?>
        </div>
    </div>
</section>



<?php
include_once("../components/footer.php");
?>