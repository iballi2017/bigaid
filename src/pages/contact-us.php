<!-- Header -->
<?php
include_once("../components/header.php");
?>

<section class="page-header title-bg-one">
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h1 class="title">Contact Us</h1>
        </div>
    </div>
</section>



<section class="contact-us">
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h2 class="fs-250 fw-bold mb-4 text-capitalize">Stand Up, Join the Campaign.</h2>
            <p class="mb-4">
                Interested? Let’s connect and set up a discovery call. Contact Our Business Development Team.<br />
                <strong>Use the form below to Submit an Inquiry.</strong>
            </p>

            <div class="grid grid-cols-12 gap-4 md:gap-8">
                <div class="col-span-12 md:col-span-6">
                    <ul class="mb-4">
                        <li class="flex gap-2 items-start mb-3">
                            <div class="contact-icon">
                                <img src="../assets/icons/map-marker-alt-solid.svg" alt="">
                            </div>
                            <p>
                                Plot 970 Chief Akajobi Crescent, off Gesse Street, Mabushi 900001, Abuja, Federal Capital Territory
                            </p>
                        </li>
                        <li class="flex gap-2 items-center mb-3">
                            <div class="contact-icon">
                                <img src="../assets/icons/phone-alt-solid.svg" alt="">
                            </div>
                            <span>+234 706 306 8802</span>
                        </li>
                        <li class="flex gap-2 items-center mb-3">
                            <div class="contact-icon">
                                <img src="../assets/icons/envelope-solid.svg" alt="">
                            </div>
                            <a href="mailto:wecare@bigaid.org" class="text-secondary">wecare@bigaid.org</a>
                        </li>
                    </ul>
                    <div class="rounded-lg overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63045.96955000808!2d7.411474366139727!3d9.029688673374606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0ba894a9f23b%3A0xc7e6480e5ed469ba!2sBIGAiD%20Foundation!5e0!3m2!1sen!2sng!4v1697814228979!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <form action="">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 lg:col-span-6">
                                <label for="FirstName" class="block mb-2 cursor-pointer required">First Name</label>
                                <input type="text" class="form-control block w-full rounded invalid" id="FirstName" name="FirstName" required>
                                <small class="error-msg">This field is required</small>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <label for="LastName" class="block mb-2 cursor-pointer required">Last Name</label>
                                <input type="text" class="form-control block w-full rounded invalid" id="LastName" name="LastName" required>
                                <small class="error-msg">This field is required</small>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <label for="EmailAddress" class="block mb-2 cursor-pointer required">Email Address</label>
                                <input type="text" class="form-control block w-full rounded invalid" id="EmailAddress">
                                <small class="error-msg">Email is required</small>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <label for="PhoneNumber" class="block mb-2 cursor-pointer required">Phone Number</label>
                                <input type="tel" class="form-control block w-full rounded invalid telephone" id="PhoneNumber" name="PhoneNumber">
                                <small class="error-msg">Email is required</small>
                            </div>
                            <div class="col-span-12">
                                <label for="Subject" class="block mb-2 cursor-pointer required">Subject</label>
                                <select name="Subject" id="Subject" class="form-control block w-full rounded">
                                    <option value="" selected>--Select Subject--</option>
                                    <option value="Enquiry">Enquiry</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Partner">Partner</option>
                                    <option value="Donation">Donation</option>
                                    <option value="Project">Project</option>
                                </select>
                            </div>
                            <div class="col-span-12">
                                <label for="Message" class="block mb-2 cursor-pointer required">Message</label>
                                <textarea name="Message" id="Message" cols="30" rows="10" class="form-control block w-full rounded"></textarea>
                            </div>
                            <div class="col-span-12">
                                <input type="checkbox" name="terms-and-condition" id="terms-and-condition" class="mr-2">
                                <label for="terms-and-condition" class="required">Yes, I would love to receive Updates from the BIGAiD Foundation</label>
                            </div>
                        </div>
                        <small>We treat your personal information confidentially and will not transfer such details to any third parties. </small>

                        <div class="captcha py-4">
                            <i>reCAPTCHA code snippet here</i>
                        </div>
                        <div class="my-4">
                            <button class="primary-button">Submit</button>
                        </div>
                    </form>



                    <!-- SUCCESS MESSAGE -->
                    <div class="card my-8">
                        <div class="card-body text-center py-4">
                            <div class="fw-bolder fs-200 mb-4">Thank You for contacting us at BIGAiD</div>
                            <p>Our team will review your request and get back to you in the shortest available time.</p>
                            <div class="flex items-center justify-center w-full mt-8">
                                <div>Cheers!!!</div>
                                <div class="mx-2"></div>
                                <div class="smiley-wrapper">
                                    <div class="flex items-center">
                                        <img src="../assets/icons/smiley-emoji-removebg-preview-min.png" alt="" class="smiley-icon">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <a href="#" class="text-secondary fs-100 block mt-4">Continue...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>



<!-- Footer -->
<?php
include_once("../components/footer.php");
?>