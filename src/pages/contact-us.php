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



<section>
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h2 class="fs-250 fw-bold mb-4 text-capitalize">Stand Up, Join the Campaign.</h2>
            <p class="mb-4">
                Interested? Let’s connect and set up a discovery call. Contact Our Business Development Team.<br />
                <strong>Use the form below to Submit an Inquiry.</strong>
            </p>
            <div>
                <form action="">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 md:col-span-6">
                            <label for="FirstName" class="block mb-2 cursor-pointer required">FirstName</label>
                            <input type="text" class="form-control block w-full rounded invalid" id="FirstName" required>
                            <small class="error-msg">This field is required</small>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="LastName" class="block mb-2 cursor-pointer required">LastName</label>
                            <input type="text" class="form-control block w-full rounded invalid" id="LastName" required>
                            <small class="error-msg">This field is required</small>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="EmailAddress" class="block mb-2 cursor-pointer required">Email Address</label>
                            <input type="text" class="form-control block w-full rounded invalid" id="EmailAddress">
                            <small class="error-msg">Email is required</small>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="PhoneNumber" class="block mb-2 cursor-pointer required">Phone Number</label>
                            <input type="tel" class="form-control block w-full rounded invalid" id="PhoneNumber">
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
                            <label for="terms-and-condition">Yes, I would love to receive Updates from the BIGAiD Foundation</label>
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
            </div>



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
                                <img src="../assets/icons/smiley-emoji-removebg-preview.png" alt="" class="smiley-icon">
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
</section>



<!-- Footer -->
<?php
include_once("../components/footer.php");
?>