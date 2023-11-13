<div id="donation_self_form">
    <form action="#" method="POST">
        <input type="hidden" name="donating-for-self" value="donating-for-self" readonly>
        <!--  -->
        <div class="card mb-8  light-form-bg py-4">
            <div class="card-body">
                <fieldset>
                    <legend class="sr-only">Introduction</legend>
                    <div class="grid grid-cols-12 gap-2 md:gap-4">
                        <div class="col-span-12 md:col-span-6">
                            <label for="name" class="block mb-2 cursor-pointer required">Your Name</label>
                            <input type="text" id="name" class="form-control block w-full rounded">
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="email" class="block mb-2 cursor-pointer required">Your Email Address</label>
                            <input type="text" id="email" class="form-control block w-full rounded">
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="phone_number" class="block mb-2 cursor-pointer required">Your Phone Number</label>
                            <input type="tel" id="phone_number" class="form-control block w-full rounded telephone">
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <label for="gender" class="block mb-2 cursor-pointer required">Gender</label>
                            <select id="gender" class="form-control block w-full rounded">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <!--  -->

        <div class="card mb-8 light-form-bg py-4">
            <div class="card-body">
                <fieldset>
                    <legend class="fs-200 fw-bold">Address</legend>
                    <div class="grid grid-cols-12 gap-2 md:gap-4">
                        <div class="col-span-12 md:col-span-10">
                            <label for="Address" class="block mb-2 cursor-pointer">Address</label>
                            <input type="text" class="form-control block w-full rounded" id="Address" autocomplete="street-address">
                        </div>
                        <div class="col-span-12 md:col-span-2">
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
                            <label for="continent" class="block mb-2 cursor-pointer">Continent</label>
                            <select name="continent" id="continent" class="continent form-control block w-full rounded">
                                <option value="" selected>--Select continent--</option>
                                <option value="africa">Africa</option>
                                <option value="europe">Europe</option>
                            </select>
                        </div>
                        <div class="col-span-12 md:col-span-3">
                            <label for="country" class="block mb-2 cursor-pointer">Country</label>
                            <select name="country" id="country" class="country form-control block w-full rounded">
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
        <div class="card mb-8 shadow">
            <div class="card-body">
                <fieldset>
                    <legend class="fs-200 fw-bold">Payment</legend>
                    <div class="grid grid-cols-12 gap-2 md:gap-4">
                        <div class="col-span-12 md:col-span-6">
                            <label for="WhoIsDonating" class="block mb-2 cursor-pointer">Currency</label>
                            <ul class="flex items-center">
                                <li class="flex items-center">
                                    <input type="radio" name="Currency" id="USD_donation_self" value="USD" class="usd cursor-pointer mr-2">
                                    <label for="USD_donation_self">USD</label>
                                </li>
                                <li class="px-4"></li>
                                <li class="flex items-center">
                                    <input type="radio" name="Currency" id="Naira_donation_self" value="Naira" class="naira cursor-pointer mr-2">
                                    <label for="Naira_donation_self">NAIRA</label>
                                </li>
                            </ul>
                        </div>
                        <!--  -->

                        <div class="col-span-12 md:col-span-6 amount_select_wrapper" data-src="Naira_donation_self">
                            <label for="NairaDonation_donation_self" class="block mb-2 cursor-pointer required">Your Donation (Naira)</label>
                            <select name="naira_donation" id="NairaDonation_donation_self" class="form-control block w-full rounded">
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
                        <div class="col-span-12 md:col-span-6 amount_select_wrapper" data-src="USD_donation_self">
                            <label for="USDDonation_donation_self" class="block mb-2 cursor-pointer required">Your Donation (USD)</label>
                            <select name="usd_donation" id="USDDonation_donation_self" class="form-control block w-full rounded">
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

        <!--  -->


        <div class="card mb-8 shadow">
            <div class="card-body">
                <div class="flex items-center" id="accept_refund_policy_wrapper">
                    <input type="checkbox" name="accept-refund-policy" id="accept_refund_policy">
                    <div class="flex items-center">
                        <label for="accept_refund_policy" class="ml-4">Accept</label>
                        &nbsp;
                        <span class="read-refund-policy-btn | text-secondary fw-bold cursor-pointer">refund policy</span>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->

        <aside class="my-4">
            <p>For private donation, <a href="./donation-contact-us.php" class="text-secondary fw-bold">Contact us.</a></p>
        </aside>



        <div class="my-4">
            <button class="submit-btn secondary-button" disabled>Continue to Payment</button>
        </div>
    </form>




    <!-- Refund Policy -->
    <section class="refund_policy_doc">
        <div class="card">
            <div class="card-body relative">
                <div class="content p-2">
                    <?php include "refund-policy-content.php"; ?>
                    <div class="mt-8" id="wrap">
                        <input type="checkbox" name="refund-policy" id="donation_self_refund_policy_checkbox">
                        <label for="donation_self_refund_policy_checkbox" class="ml-4 font-bold">Accept refund policy</label>
                    </div>
                </div>

                <button type="button" class="close_popup_widget_btn | close-btn mr-8 mt-4">
                    <span class="sr-only">Close</span>
                    <svg class="close h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

</div>


<script>
    function handle_donation_self_refund_policy_consent() {

        const donation_self_form = document.querySelector("#donation_self_form");
        const donation_self_refund_policy_checkbox = donation_self_form.querySelector("#donation_self_refund_policy_checkbox");
        const read_refund_policy_btn = donation_self_form.querySelector(".read-refund-policy-btn");
        const refund_policy_doc = donation_self_form.querySelector(".refund_policy_doc");
        const wrap = donation_self_form?.querySelector("#wrap");

        const close_popup_widget_btn = donation_self_form.querySelector(".close_popup_widget_btn");

        const accept_refund_policy_wrapper = donation_self_form.querySelector("#accept_refund_policy_wrapper");
        const submit_btn = donation_self_form.querySelector(".submit-btn");

        console.log("read_refund_policy_btn: ", read_refund_policy_btn);

        wrap.addEventListener("click", () => {
            if (donation_self_refund_policy_checkbox.checked) {
                submit_btn?.hasAttribute("disabled") ? submit_btn.removeAttribute("disabled") : null;
                accept_refund_policy.checked = true;
                refund_policy_doc.classList.contains("show") ? refund_policy_doc.classList.remove("show") : null;
            } else {
                !submit_btn?.hasAttribute("disabled") ? submit_btn.setAttribute("disabled", true) : null;
                accept_refund_policy.checked = false;
                !refund_policy_doc.classList.contains("show") ? refund_policy_doc.classList.add("show") : null;
            }
        });

        read_refund_policy_btn?.addEventListener("click", () => {
            refund_policy_doc.classList.add("show");
        });
        close_popup_widget_btn.addEventListener("click", () => {
            refund_policy_doc.classList.contains("show") ? refund_policy_doc.classList.remove("show") : null;
        });

        accept_refund_policy_wrapper.addEventListener("click", () => {
            if (accept_refund_policy.checked) {
                submit_btn?.hasAttribute("disabled") ? submit_btn.removeAttribute("disabled") : null;
                donation_self_refund_policy_checkbox.checked = true;
            } else {
                !submit_btn?.hasAttribute("disabled") ? submit_btn.setAttribute("disabled", true) : null;
                donation_self_refund_policy_checkbox.checked = false;
            }
        });
    }
    handle_donation_self_refund_policy_consent();

    /** */
    // const donation_self_form = document.getElementById("donation_self_form");
    // const donation_self_refund_policy_checkbox = document.getElementById("donation_self_refund_policy_checkbox");
    // const wrap = document.getElementById("wrap");
    // const submit_btn = document.querySelector(".submit-btn");
    // const accept_refund_policy_wrapper = document.querySelector("#accept_refund_policy_wrapper");
    // const accept_refund_policy = document.querySelector("#accept_refund_policy");
    // const read_refund_policy_btn = document.querySelector(".read-refund-policy-btn");
    // const refund_policy_doc = document.querySelector(".refund_policy_doc");
    // const close_popup_widget_btn = document.querySelector(".close_popup_widget_btn");

    // wrap.addEventListener("click", () => {
    //     if (donation_self_refund_policy_checkbox.checked) {
    //         submit_btn?.hasAttribute("disabled") ? submit_btn.removeAttribute("disabled") : null;
    //         accept_refund_policy.checked = true;
    //         refund_policy_doc.classList.contains("show") ? refund_policy_doc.classList.remove("show") : null;
    //     } else {
    //         !submit_btn?.hasAttribute("disabled") ? submit_btn.setAttribute("disabled", true) : null;
    //         accept_refund_policy.checked = false;
    //         !refund_policy_doc.classList.contains("show") ? refund_policy_doc.classList.add("show") : null;
    //     }
    // });

    // read_refund_policy_btn.addEventListener("click", () => {
    //     refund_policy_doc.classList.add("show");
    // });

    // accept_refund_policy_wrapper.addEventListener("click", () => {
    //     if (accept_refund_policy.checked) {
    //         submit_btn?.hasAttribute("disabled") ? submit_btn.removeAttribute("disabled") : null;
    //         donation_self_refund_policy_checkbox.checked = true;
    //     } else {
    //         !submit_btn?.hasAttribute("disabled") ? submit_btn.setAttribute("disabled", true) : null;
    //         donation_self_refund_policy_checkbox.checked = false;
    //     }
    // });

    // close_popup_widget_btn.addEventListener("click", () => {
    //     refund_policy_doc.classList.contains("show") ? refund_policy_doc.classList.remove("show") : null;
    // })
</script>