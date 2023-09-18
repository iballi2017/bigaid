<?php
include_once("../components/header.php");
?>

<section class="page-header title-bg-one">
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h1 class="title">Donation</h1>
        </div>
    </div>
</section>

<div class="container mx-auto py-8">
    <article>
        <section>
            <div class="wrap-container mb-4">
                <p><strong>Over 60% </strong>
                    population lacks access to quality primary healthcare services in Nigeria. The National Primary Healthcare Development Agency (NPHCDA) Stated in 2022 report. Also, a survey conducted by NOI Polls revealed only 17% of the country's population has health insurance coverage in Nigeria, May 2023 report.
                </p>
                <br />
                <p><strong>Over 600,000,000 (million)</strong>
                    Africans, representing 48% of the continent's population, still lack access to the quality health care they need, WHO Regional Director for Africa, Matshidiso Moeti stated, in an April 2023 report.
                </p>

            </div>
        </section>
    </article>

    <section>
        <div class="wrap-container">

            <!-- Donation successful -->
            <div class="card">
                <div class="card-body">
                    ddd
                </div>
            </div>


            <form action="" class="mb-4">
                <fieldset>
                    <legend class="sr-only">Introduction</legend>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 md:col-span-6">
                            <label for="WhoIsDonating" class="block mb-2 cursor-pointer fw-bold required">Who is Donating?</label>
                            <select name="WhoIsDonating" id="WhoIsDonating" class="form-control block w-full rounded">
                                <option value="" selected>--Select who is donating--</option>
                                <option value="donating-for-Yourself">Donating for Yourself</option>
                                <option value="donating-on-behalf-of-third-party">Donating on Behalf of Third Party</option>
                                <option value="donation-for-or-as-an-organization">Donation for Or as An Organization</option>
                            </select>
                            <small class="error-msg">This field is required</small>
                        </div>
                        <div class="col-span-12">
                            <label for="WhoIsDonating" class="block mb-2 cursor-pointer fw-bold">Currency</label>
                            <ul class="flex items-center">
                                <li class="flex items-center">
                                    <input type="radio" name="Currency" id="Dollar" class="cursor-pointer mr-2">
                                    <label for="Dollar">USD</label>
                                </li>
                                <li class="px-4"></li>
                                <li class="flex items-center">
                                    <input type="radio" name="Currency" id="Naira" class="cursor-pointer mr-2">
                                    <label for="Naira">NAIRA</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-12">
                            <label for="WhoIsDonating" class="block mb-2 cursor-pointer fw-bold">Frequency</label>
                            <ul class="flex items-center">
                                <li class="flex items-center">
                                    <input type="radio" name="Frequency" id="OneTime" class="cursor-pointer mr-2">
                                    <label for="OneTime">One Time</label>
                                </li>
                                <li class="px-4"></li>
                                <li class="flex items-center">
                                    <input type="radio" name="Frequency" id="Monthly" class="cursor-pointer mr-2">
                                    <label for="Monthly">Monthly</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="NairaDonation" class="block mb-2 cursor-pointer fw-bold required">Your Donation (Naira)</label>
                            <select name="NairaDonation" id="NairaDonation" class="form-control block w-full rounded">
                                <option value="" selected>--Select donation--</option>
                                <option value="2000">2,000</option>
                                <option value="5000">5,000</option>
                                <option value="10000">10,000</option>
                                <option value="20000">20,000</option>
                                <option value="50000">50,000</option>
                                <option value="100000">100,000</option>
                            </select>
                            <small class="error-msg">This field is required</small>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="USDDonation" class="block mb-2 cursor-pointer fw-bold required">Your Donation (USD)</label>
                            <select name="USDDonation" id="USDDonation" class="form-control block w-full rounded">
                                <option value="" selected>--Select donation--</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="500">500</option>
                                <option value="1000">1000</option>
                            </select>
                            <small class="error-msg">This field is required</small>
                        </div>
                    </div>
                </fieldset>

                <aside class="my-4">
                    <p>For private donation, <a href="#" class="text-secondary fw-bold">Contact us.</a></p>
                </aside>

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
                            <select name="Country" id="Country" class="form-control block w-full rounded">
                                <option value="" selected>--Select Country--</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Angola">Angola</option>
                            </select>
                        </div>
                    </div>
                </fieldset>

                <div class="my-4">
                    <button class="secondary-button">Continue to Payment</button>
                </div>
            </form>
        </div>
    </section>
</div>

<?php
include_once("../components/footer.php");
?>