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
                <p class="fs-300 fw-bolder mb-4 lh-100">Support BIGAiD’s work of <br class="hidden md:block" />advocating, Educating & providing <br class="hidden md:block" />Health & Wellness Solutions</p>
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
                <p>BIGAiD Sponsorship/Donation is one method of support that is a kind of individual voluntary giving. It is a design where you make regular one-off, Monthly/Annual donations in a structured way in support of BIGAiD’s work of advocating and providing health care education, pre-diagnosis knowledge, accidental/emergency life-saving and intervention aid to the low/mid-income earners, the impoverished, and excluded communities across the country due to poverty, economic and social challenges.
                </p>
                <div class="my-2 md:ml-4 rounded-lg overflow-hidden md:float-right" style="max-width: 500px">
                    <img src="../assets/images/medium-shot-black-family-posing-studio.jpg" alt="">
                </div>
                <br class="hidden md:block" />
                <p>With the current life expectancy for Nigeria in 2023 as 55.75 years, a 0.57% increase from 2022, and nearly 50% of the estimated Nigerian population living within the poverty margin, access to needed quality health care and wellness education with prompt intervention has been a huge challenge.
                </p>
                <br />
                <p>Supporting the work, we do at BIGAiD by clicking the DONATE Button below will ensure another one step to saving a life.</p>
                <br />
                <p>
                    The BIGAiD Foundation’s focus on promoting health, nutrition, and well-being in both rural and urban communities is crucial for creating a healthier society. Your dedication to providing knowledge and tools to help individuals make informed decisions about their health and well-being through your giving is commendable.
                </p>

                <br />
                <p>We are also reaching out to public individuals, private companies, and organizations, including NGOs, for donations and support as a measure to ensure the sustainability and impact of our programs. Collaborative efforts can indeed lead to positive changes and improvements in the communities and societies we serve</p>

                <br />


                <p>
                    <strong class="block fs-250">Your Donation</strong>
                    Make a difference by Donating and funding vital advocacy, education, and prompt intervention structures through the BIGAiD App and development programs that will help save human lives and give rights to accessing primary and quality healthcare across Nigeria and Africa.
                </p>

            </div>
        </section>
    </article>

    <section>
        <div class="wrap-container">
            <h2 class="fw-bolder text-5xl md:text-7xl text-center text-secondary">DONATE NOW!</h2>
            <p class="fw-bold text-center text-2xl md:text-4xl mb-4">Your Donation, Our <br class="hidden md:block" />Mission</p>
            <p class="mb-4 md:text-2xl text-center">We welcome you to Join Hands in Transforming the way we access Wellness <br class="hidden md:block" />
                Information and Healthcare Intervention.<br />
                Together, let's pave the way to a healthier and more equitable future.
            </p>

            <h3 class="fw-bolder fs-200 mb-2">Kindly Please Fill In Your Information</h3>
            <form action="" class="mb-4">
                <!-- <fieldset>
                    <legend class="sr-only">Introduction</legend> -->
                <div class="md:grid grid-cols-12 gap-8">
                    <div class="col-span-12 md:col-span-6">
                        <div>
                            <div class="grid grid-cols-12 gap-y-4">
                                <div class="col-span-12">
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
                                    <label for="Country" class="block mb-2 cursor-pointer fw-bold">Country</label>

                                    <select name="Country" id="Country" class="Country form-control block w-full rounded">
                                        <option value="" selected>--Select Country--</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Angola">Angola</option>
                                    </select>
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

                                <div class="col-span-12 hidden" id="nairaSelect">
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
                                <div class="col-span-12" id="usdSelect">
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
                            <aside class="my-4">
                                <p>For private donation, <a href="./donation-contact-us.php" class="text-secondary fw-bold">Contact us.</a></p>
                            </aside>
                            <div class="my-4">
                                <button class="secondary-button">Continue to Payment</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 fade-in">
                        <fieldset>
                            <legend class="sr-only">Introduction</legend>
                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-12">
                                    <label for="name" class="block mb-2 cursor-pointer fw-bold required">Your Name</label>
                                    <input type="text" id="name" class="form-control block w-full rounded">
                                </div>
                                <div class="col-span-12">
                                    <label for="email" class="block mb-2 cursor-pointer fw-bold required">Your Email Address</label>
                                    <input type="text" id="email" class="form-control block w-full rounded">
                                </div>
                                <div class="col-span-12">
                                    <label for="phone_number" class="block mb-2 cursor-pointer fw-bold required">Your Phone Number</label>
                                    <input type="tel" id="phone_number" class="form-control block w-full rounded">
                                </div>
                            </div>
                        </fieldset>




                        <!-- <div class="rounded-lg overflow-hidden">
                                <img src="../assets/images/smiling-surprised-curly-haired-young-woman-stares-smartphone-holds-credit-card-does-online-shopping-provides-internet-payment-transfers-money-ebank-app-poses-indoor-against-yellow-wall.jpg" alt="">
                            </div> -->
                    </div>
                </div>
                <!-- </fieldset> -->
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