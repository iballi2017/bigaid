<?php
include_once("../components/header.php");
?>

<section class="page-header title-bg-one">
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h1 class="title">Donate Now</h1>
        </div>
    </div>
</section>

<div class="container mx-auto py-8">
    <article>
        <section>
            <div class="wrap-container mb-4">
                <p>
                    <strong class="block fs-250">Over 60% </strong>
                    population lacks access to quality primary healthcare services in Nigeria. The National Primary Healthcare Development Agency (NPHCDA) Stated in 2022 report. Also, a survey conducted by NOI Polls revealed only 17% of the country's population has health insurance coverage in Nigeria, May 2023 report.
                </p>
                <br />
                <p>
                    <strong class="block fs-250">Over 600,000,000 (million)</strong>
                    Africans, representing 48% of the continent's population, still lack access to the quality health care they need, WHO Regional Director for Africa, Matshidiso Moeti stated, in an April 2023 report.
                </p>
                <br />
                <p>Make a difference by Donating and funding vital advocacy, education, and prompt intervention structures through the BIGAiD App and development programs that will help save human lives and give rights to accessing primary and quality healthcare across Nigeria and Africa.
                </p>

            </div>
        </section>
    </article>

    <section>
        <div class="wrap-container">
            <form action="" class="mb-4">
                <fieldset>
                    <legend class="fs-200 fw-bold">Personal Information</legend>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label for="DonorEmail" class="block mb-2 cursor-pointer required">Email Address</label>
                            <input type="text" class="form-control block w-full rounded" id="DonorEmail" required readonly>
                        </div>
                    </div>
                </fieldset>

                <hr class="my-8" />
                <fieldset>
                    <legend class="fs-200 fw-bold mb-2">Organization</legend>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 md:col-span-6">
                            <label for="FirstName" class="block mb-2 cursor-pointer required">First Name (Representative)</label>
                            <input type="text" class="form-control block w-full rounded invalid" id="FirstName" required>
                            <small class="error-msg">This field is required</small>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="LastName" class="block mb-2 cursor-pointer required">Last Name (Representative)</label>
                            <input type="text" class="form-control block w-full rounded" id="LastName" required>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="NameOfOrganization" class="block mb-2 cursor-pointer required">Name of Organization</label>
                            <input type="text" class="form-control block w-full rounded" id="NameOfOrganization" required>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="Industry" class="block mb-2 cursor-pointer required">Industry</label>
                            <input type="text" class="form-control block w-full rounded" id="Industry" required>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="Sector" class="block mb-2 cursor-pointer required">Sector</label>
                            <input type="text" class="form-control block w-full rounded" id="Sector" required>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="AddressOfOrganization" class="block mb-2 cursor-pointer required">Address of Organization</label>
                            <input type="text" class="form-control block w-full rounded" id="AddressOfOrganization" required>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="OrganizationEmail" class="block mb-2 cursor-pointer required">Email Address</label>
                            <input type="text" class="form-control block w-full rounded" id="OrganizationEmail" required>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="PhoneNumber" class="block mb-2 cursor-pointer required">Phone Number</label>
                            <input type="text" class="form-control block w-full rounded" id="PhoneNumber" required>
                        </div>
                    </div>
                </fieldset>
                <hr class="my-8" />

                <fieldset>
                    <legend class="fs-200 fw-bold">Address</legend>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 md:col-span-12">
                            <label for="Address" class="block mb-2 cursor-pointer">Address</label>
                            <input type="text" class="form-control block w-full rounded" id="Address">
                        </div>
                        <div class="col-span-12 md:col-span-3">
                            <label for="City" class="block mb-2 cursor-pointer">City</label>
                            <input type="text" class="form-control block w-full rounded" id="City">
                        </div>
                        <div class="col-span-12 md:col-span-3">
                            <label for="State" class="block mb-2 cursor-pointer">State</label>
                            <input type="text" class="form-control block w-full rounded" id="State">
                        </div>
                        <div class="col-span-12 md:col-span-3">
                            <label for="PostalCode" class="block mb-2 cursor-pointer">Postal Code</label>
                            <input type="text" class="form-control block w-full rounded" id="PostalCode">
                        </div>
                        <div class="col-span-12 md:col-span-3">
                            <label for="Country" class="block mb-2 cursor-pointer">Country</label>
                            <!-- <input type="text" class="form-control block w-full rounded" id="Country"> -->
                            <select name="Country" id="Country" class="Country form-control block w-full rounded">
                            </select>
                        </div>
                    </div>
                </fieldset>
                <hr class="my-8" />
                <fieldset>
                    <legend class="fs-200 fw-bold">Donor's Note</legend>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label for="DonorsNote" class="block mb-2 cursor-pointer required">Message</label>
                            <textarea name="DonorsNote" id="DonorsNote" cols="30" rows="10" class="w-full rounded"></textarea>
                        </div>
                    </div>
                </fieldset>

                <div class="captcha py-4">
                    <i>reCAPTCHA code snippet here</i>
                </div>

                <div class="my-4">
                    <button class="secondary-button">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>

<?php
include_once("../components/footer.php");
?>