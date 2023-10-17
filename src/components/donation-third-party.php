<form action="#" method="POST">
    <input type="hidden" name="donating-for-self" value="donating-for-self" readonly>
    <!--  -->

    <div class="card mb-8">
        <div class="card-body">
            <fieldset>
                <legend class="sr-only">Introduction</legend>
                <div class="grid grid-cols-12 gap-2 md:gap-4">
                    <div class="col-span-12 md:col-span-6">
                        <label for="name_donation_third_party" class="block mb-2 cursor-pointer required">Third Party Name</label>
                        <input type="text" id="name_donation_third_party" class="form-control block w-full rounded">
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <label for="email_donation_third_party" class="block mb-2 cursor-pointer required">Third Party Email Address</label>
                        <input type="text" id="email_donation_third_party" class="form-control block w-full rounded">
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <label for="phone_number_donation_third_party" class="block mb-2 cursor-pointer required">Third Party Phone Number</label>
                        <input type="tel" id="phone_number_donation_third_party" class="form-control block w-full rounded">
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <!--  -->

    <div class="card mb-8">
        <div class="card-body">
            <fieldset class="mb-4">
                <legend class="fs-200 fw-bold">Address</legend>
                <div class="grid grid-cols-12 gap-2 md:gap-4">
                    <div class="col-span-12 md:col-span-10">
                        <label for="Address_donation_third_party" class="block mb-2 cursor-pointer">Address</label>
                        <input type="text" class="form-control block w-full rounded" id="Address_donation_third_party" autocomplete="street-address">
                    </div>
                    <div class="col-span-12 md:col-span-2">
                        <label for="City_donation_third_party" class="block mb-2 cursor-pointer">City</label>
                        <input type="text" class="form-control block w-full rounded" id="City_donation_third_party">
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <label for="State_donation_third_party" class="block mb-2 cursor-pointer">State</label>
                        <input type="text" class="form-control block w-full rounded" id="State_donation_third_party">
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <label for="PostalCode_donation_third_party" class="block mb-2 cursor-pointer">Postal Code</label>
                        <input type="text" class="form-control block w-full rounded" id="PostalCode_donation_third_party">
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <label for="continent_donation_third_party" class="block mb-2 cursor-pointer">Continent</label>
                        <select name="continent" id="continent_donation_third_party" class="continent form-control block w-full rounded">
                            <option value="" selected>--Select continent--</option>
                            <option value="africa">Africa</option>
                            <option value="europe">Europe</option>
                        </select>
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <label for="country_donation_third_party" class="block mb-2 cursor-pointer">Country</label>
                        <select name="country" id="country_donation_third_party" class="country form-control block w-full rounded">
                            <option value="" selected>--Select country--</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Angola">Angola</option>
                        </select>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>

    <!--  -->
    <div class="card mb-8">
        <div class="card-body">
            <fieldset>
                <legend class="fs-200 fw-bold">Payment</legend>
                <div class="grid grid-cols-12 gap-2 md:gap-4">
                    <div class="col-span-12 md:col-span-6">
                        <label for="WhoIsDonating" class="block mb-2 cursor-pointer">Currency</label>
                        <ul class="flex items-center">
                            <li class="flex items-center">
                                <input type="radio" name="Currency" id="USD_donation_third_party" value="USD" class="usd cursor-pointer mr-2" checked>
                                <label for="USD_donation_third_party">USD</label>
                            </li>
                            <li class="px-4"></li>
                            <li class="flex items-center">
                                <input type="radio" name="Currency" id="Naira_donation_third_party" value="Naira" class="naira cursor-pointer mr-2">
                                <label for="Naira_donation_third_party">NAIRA</label>
                            </li>
                        </ul>
                    </div>
                    <!--  -->

                    <div class="col-span-12 md:col-span-6 hidden nairaSelect">
                        <label for="NairaDonation_donation_third_party" class="block mb-2 cursor-pointer required">Your Donation (Naira)</label>
                        <select name="NairaDonation_donation_third_party" id="NairaDonation_donation_third_party" class="form-control block w-full rounded">
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
                    <div class="col-span-12 md:col-span-6 usdSelect">
                        <label for="USDDonation_donation_third_party" class="block mb-2 cursor-pointer required">Your Donation (USD)</label>
                        <select name="USDDonation" id="USDDonation_donation_third_party" class="form-control block w-full rounded">
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
        </div>
    </div>
    <aside class="my-4">
        <p>For private donation, <a href="./donation-contact-us.php" class="text-secondary fw-bold">Contact us.</a></p>
    </aside>
    <div class="my-4">
        <button class="secondary-button">Continue to Payment</button>
    </div>

</form>