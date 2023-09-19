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
            <div class="bg-light rounded p-4">
                <h2 class="fs-250 fw-bold text-center mb-8 text-capitalize">Get in touch</h2>
                <form action="">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 md:col-span-6">
                            <label for="Name" class="block mb-2 cursor-pointer required">Name</label>
                            <input type="text" class="form-control block w-full rounded invalid" id="Name" required>
                            <small class="error-msg">This field is required</small>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="EmailAddress" class="block mb-2 cursor-pointer required">Email Address</label>
                            <input type="text" class="form-control block w-full rounded invalid" id="EmailAddress">
                            <small class="error-msg">Email is required</small>
                        </div>
                        <div class="col-span-12">
                            <label for="Subject" class="block mb-2 cursor-pointer required">Subject</label>
                            <input type="text" class="form-control block w-full rounded" id="Subject">
                        </div>
                        <div class="col-span-12 md:col-span-12">
                            <label for="Message" class="block mb-2 cursor-pointer required">Message</label>
                            <textarea name="Message" id="Message" cols="30" rows="10" class="form-control block w-full rounded"></textarea>
                        </div>
                    </div>
                    <div class="my-4">
                        <button class="primary-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<!-- Footer -->
<?php
include_once("../components/footer.php");
?>