<?php
include_once("../components/header.php");
?>

<section class="page-header title-bg-one">
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h1 class="title">Your Receipt</h1>
        </div>
    </div>
</section>

<div class="container mx-auto py-8">
    <div class="wrap-container mb-4">
        <!-- Donation successful -->
        <div class="card">
            <div class="card-body">
                <table class="table mb-4 bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Donation Number:</th>
                            <td>1344</td>
                        </tr>
                        <tr>
                            <th scope="row">Date:</th>
                            <td>September 18, 2023</td>
                        </tr>
                        <tr>
                            <th scope="row">Total:</th>
                            <td>$566</td>
                        </tr>
                        <tr>
                            <th scope="row">Payment Method:</th>
                            <td>Offline Donation</td>
                        </tr>
                    </tbody>
                </table>
                <p> Thank you for your donation. We will contact you shortly for payment.</p>
                

                <div style="max-width: 400px">
                    <table class="table my-4">
                        <thead>
                            <tr>
                                <th scope="row">Campaign</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Access to quality Healthcare</th>
                                <td>$599</td>
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <td>$599</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once("../components/footer.php");
?>