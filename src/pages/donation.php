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
                <p><strong class="block fs-250">Over 600,000,000 (million)</strong>
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
                                    <input type="radio" name="Currency" id="USD" value="USD" class="cursor-pointer mr-2" checked>
                                    <label for="USD">USD</label>
                                </li>
                                <li class="px-4"></li>
                                <li class="flex items-center">
                                    <input type="radio" name="Currency" id="Naira" value="Naira" class="cursor-pointer mr-2">
                                    <label for="Naira">NAIRA</label>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-span-12 md:col-span-6 hidden" id="nairaSelect">
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
                        <!-- <div class="col-span-12 md:col-span-6">
                        </div> -->
                        <div class="col-span-12 md:col-span-6" id="usdSelect">
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
                    <p>For private donation, <a href="./donation-contact-us.php" class="text-secondary fw-bold">Contact us.</a></p>
                </aside>
                <div class="my-4">
                    <button class="secondary-button">Continue to Payment</button>
                </div>
            </form>
            <!-- <aside>
                <small class="fw-bold">Please add $0.00 to cover processing fees and other expenses associated with my donation.</small>
            </aside> -->
        </div>
    </section>
</div>

<?php
include_once("../components/footer.php");
?>