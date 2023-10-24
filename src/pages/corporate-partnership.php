<!-- Header -->
<?php
include_once("../components/header.php");
?>

<section class="page-header title-bg-one">
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h1 class="title">Corporate Partnership</h1>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <!-- <h2 class="fs-250 fw-bold mb-4 text-capitalize">Stand Up, Join the Campaign.</h2> -->
            <p class="fs-250 text-center fw-bold mb-4">
                Forging new partnerships with organizations and companies like yours will go a long way in helping us Succeed In Our Mission of Saving Lives and giving millions the opportunity to live healthier and meaningful lives.
                Our Success Depends On Strong and healthy Partnership
            </p>
            <p>We're always looking for new partners in the private and public sectors that align with our mission of saving lives and ensuring people live healthy through nutrition, quality healthcare, access to prompt health intervention, education, and development empowerment programs, ensuring that every community can forge their own path to a healthier future and lead the lives they choose. The private sector plays a strong role in making that happen – by supporting economic growth through human capital development, access to quality basic primary healthcare, and prompt intervention for emergency cases for the communities we serve.</p>
            <br />
            <p>
                <span class="fw-bold fs-200">Interested in finding out more?</span><br />
                Connect now by using the form below and we will set up a discovery/partnership meeting. 
            </p>
            <br />
            <form action="" method="GET">
                <div class="card flex mt-4">
                    <div class="card-body">
                        <fieldset>
                            <legend class="fs-150 fw-bold break-all">Partnering Institution/Company/Organization</legend>
                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-12">
                                    <label for="Name" class="block mb-2 cursor-pointer required">Name</label>
                                    <input type="text" class="form-control block w-full rounded invalid" id="Name" required>
                                    <small class="error-msg">This field is required</small>
                                </div>
                                <div class="col-span-12 md:col-span-4">
                                    <label for="sector_industry" class="block mb-2 cursor-pointer required">Sector/Industry</label>
                                    <input type="text" class="form-control block w-full rounded invalid" id="sector_industry" required>
                                    <small class="error-msg">This field is required</small>
                                </div>
                                <div class="col-span-12 md:col-span-4">
                                    <label for="specialization" class="block mb-2 cursor-pointer required">Area of Specialization</label>
                                    <input type="text" class="form-control block w-full rounded invalid" id="specialization" required>
                                    <small class="error-msg">This field is required</small>
                                </div>
                                <div class="col-span-12 md:col-span-4">
                                    <label for="ownership" class="block mb-2 cursor-pointer required">Ownership</label>
                                    <select name="ownership" id="ownership" class="form-control block w-full rounded">
                                        <option value="" selected>--Select Ownership--</option>
                                        <option value="Public">Public</option>
                                        <option value="Private">Private</option>
                                        <option value="NGO">NGO</option>
                                        <option value="GovernmentOwned">Government Owned</option>
                                    </select>
                                </div>
                                <div class="col-span-12 md:col-span-12">
                                    <label for="Address" class="block mb-2 cursor-pointer">Address</label>
                                    <input type="text" class="form-control block w-full rounded" id="Address" autocomplete="street-address">
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
                                    <select name="Country" id="Country" class="Country form-control block w-full rounded" autocomplete="address-level2">
                                    </select>
                                </div>
                                <div class="col-span-12 md:col-span-5">
                                    <label for="EmailAddress" class="block mb-2 cursor-pointer required">Email Address</label>
                                    <input type="text" class="form-control block w-full rounded invalid" id="EmailAddress">
                                    <small class="error-msg">Email is required</small>
                                </div>
                                <div class="col-span-12 md:col-span-4">
                                    <label for="PhoneNumber" class="block mb-2 cursor-pointer required">Phone Number</label>
                                    <input type="tel" class="form-control block w-full rounded invalid telephone" id="PhoneNumber">
                                </div>
                                <div class="col-span-12 md:col-span-3">
                                    <label for="website" class="block mb-2 cursor-pointer required">Website</label>
                                    <input type="text" class="form-control block w-full rounded invalid" id="website">
                                </div>
                                <div class="col-span-12">
                                    <label for="social_media_links" class="block mb-2 cursor-pointer required">Social Media Links</label>
                                    <ol type="1" id="social_links">
                                        <li>
                                            <div class="flex gap-2 flex-wrap md:flex-nowrap">
                                                <select name="social_media_1" id="social_media_1" class="rounded w-full md:w-auto">
                                                    <option value="facebook" selected="selected">Facebook</option>
                                                    <option value="twitter">Threads(Twitter)</option>
                                                    <option value="instagram">Instagram</option>
                                                    <option value="linkedIn"">LinkedIn</option>
                                                </select>
                                                <input type=" text" name="social_link_1" class="rounded w-full" placeholder="https://facebook.com/whatever">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex gap-2 flex-wrap md:flex-nowrap">
                                                <select name="social_media_2" id="social_media_2" class="rounded w-full md:w-auto">
                                                    <option value="facebook">Facebook</option>
                                                    <option value="twitter">Threads(Twitter)</option>
                                                    <option value="instagram">Instagram</option>
                                                    <option value="linkedIn" selected="selected">LinkedIn</option>
                                                </select>
                                                <input type="text" name="social_link_2" class="rounded w-full" placeholder="https://linkedin.com/whatever">
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                        </fieldset>
                    </div>
                </div>

                <!--  -->

                <div class="card flex mt-4">
                    <div class="card-body">
                        <fieldset>
                            <legend class="fs-150 fw-bold">Organization/Company Representatives </legend>
                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-12">
                                    <label for="full_name" class="block mb-2 cursor-pointer required">Full Name</label>
                                    <input type="text" class="form-control block w-full rounded invalid" id="full_name" required>
                                    <small class="error-msg">This field is required</small>
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <label for="designation_portfolio" class="block mb-2 cursor-pointer required">Designation/Portfolio</label>
                                    <input type="text" class="form-control block w-full rounded invalid" id="designation_portfolio" required>
                                    <small class="error-msg">This field is required</small>
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <label for="department" class="block mb-2 cursor-pointer required">Department</label>
                                    <input type="text" class="form-control block w-full rounded invalid" id="department" required>
                                    <small class="error-msg">This field is required</small>
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <label for="email" class="block mb-2 cursor-pointer required">Email Address</label>
                                    <input type="email" class="form-control block w-full rounded invalid" id="email">
                                    <small class="error-msg">Email is required</small>
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <label for="mobile_number" class="block mb-2 cursor-pointer required">Mobile Number</label>
                                    <input type="tel" class="form-control block w-full rounded invalid telephone" id="mobile_number">
                                </div>
                        </fieldset>
                    </div>
                </div>
                <fieldset class="mt-4">
                    <legend class="fs-150 fw-bold mb-2">Purpose</legend>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label for="how_you_wish_to_partner" class="block mb-2 cursor-pointer">Select How Your Organization Wish to Partner</label>
                            <select name="how_you_wish_to_partner" id="how_you_wish_to_partner" class="form-control block w-full rounded">
                                <option value="" selected="selected">--Select How Your Organization Wish to Partner--</option>
                                <option value="corporate Collaborations">Corporate Collaborations</option>
                                <option value="events & fundraising">Events & Fundraising</option>
                                <option value="direct community investment">Direct Community Investment</option>
                                <option value="workplace campaigns">Workplace Campaigns</option>
                                <option value="group volunteering opportunities">Group Volunteering Opportunities</option>
                                <option value="pro-bono contributions">Pro-Bono Contributions</option>
                                <option value="cause marketing">Cause Marketing</option>
                                <option value="product & donations">Product & Donations</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="col-span-12">
                            <label for="how_you_wish_to_partner_others" class="block mb-2 cursor-pointer">If Other (State Clearly)</label>
                            <textarea name="how_you_wish_to_partner_others" id="how_you_wish_to_partner_others" cols="30" rows="3" class="block w-full rounded"></textarea>
                        </div>
                        <div class="col-span-12">
                            <label for="reason_for_partnership" class="block mb-2 cursor-pointer">What Does Your Organization/Company hope to achieve from this Partnership request with BIGAiD?</label>
                            <textarea name="reason_for_partnership" id="reason_for_partnership" cols="30" rows="3" class="block w-full rounded"></textarea>
                        </div>
                        <div class="col-span-12">
                            <div>
                                <input type="checkbox" name="terms-and-condition" id="terms-and-condition" class="mr-2">
                                <label for="terms-and-condition">I have read and agree the <a href="#" class="text-secondary fw-bold">terms and conditions</a>
                                    and <a href="#" class="text-secondary fw-bold">content policy</a>.</label>
                            </div>
                        </div>
                    </div>

                </fieldset>
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
</section>



<!-- Footer -->
<?php
include_once("../components/footer.php");
?>