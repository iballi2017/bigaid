<?php
include_once("../components/header.php");
?>

<section class="page-header title-bg-one">
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h1 class="title">Become A Volunteer</h1>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto py-8 md:py-16">
        <div class="wrap-container">
            <h2 class="fw-bold fs-300 mb-2 md:mb-6 text-primary">Join the BIGAiD App Expert Community</h2>
            <p class=" mb-2 md:mb-6">Professionals like you volunteering and sacrificing their time and expertise, making a difference in people's lives globally are the reason many lives are been saved and the energy behind organizations fuelling community ideas and ambitious vision to meet global goals of a united and equitable world where health is accessible to all.
                By joining the BIGAiD Volunteer and Partner Community, you have become a part of our journey: the building of a global community and movement for quality global health, wellness, nutrition, education, community development, and social good.
            </p>

            <div class="flex">
                <a href="#" class="primary-button">Sign Up As a Volunteer</a>
                <div class="mx-2"></div>
                <a href="#" class="secondary-button">Sign Up As a Partner</a>
            </div>

            <!-- VOlunteer Form -->
            <form action="" class="my-4">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 md:col-span-4">
                        <label for="FirstName" class="block mb-2 cursor-pointer">First Name</label>
                        <input type="text" class="form-control block w-full rounded" id="FirstName">
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <label for="MiddleName" class="block mb-2 cursor-pointer">Middle Name</label>
                        <input type="text" class="form-control block w-full rounded" id="MiddleName">
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <label for="LastName" class="block mb-2 cursor-pointer">Last Name</label>
                        <input type="text" class="form-control block w-full rounded" id="LastName">
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <label for="Email" class="block mb-2 cursor-pointer">Email Address</label>
                        <input type="text" class="form-control block w-full rounded" id="Email">
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <label for="PhoneNumber" class="block mb-2 cursor-pointer">Phone Number</label>
                        <input type="text" class="form-control block w-full rounded" id="PhoneNumber">
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <label for="DateOfBirth" class="block mb-2 cursor-pointer">Date Of Birth</label>
                        <input type="date" class="form-control block w-full rounded" id="DateOfBirth">
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <label for="AgeRange" class="block mb-2 cursor-pointer">Age Range</label>
                        <select name="AgeRange" id="AgeRange" class="form-control block w-full rounded">
                            <option value="" selected>--Select Generation--</option>
                            <option value="1946-1964">The Baby Boomer – born 1946-1964</option>
                            <option value="1965-1979">Generation X – born 1965-1979</option>
                            <option value="1980-1994">Millennials – born 1980-1994</option>
                            <option value="1995-2012">Generation Z – born 1995-2012</option>
                        </select>
                    </div>
                    <!-- <div class="col-span-12 md:col-span-4">
                        <label for="TypeOfMedicalProfession" class="block mb-2 cursor-pointer">Type Of Medical Profession</label>
                        <select name="TypeOfMedicalProfession" id="TypeOfMedicalProfession" class="form-control block w-full rounded">
                            <option value="" selected>--Select Medical Profession--</option>
                            <option value="1">Health professional</option>
                            <option value="2">Pharmacist</option>
                            <option value="3">Physician Associate</option>
                            <option value="4">Dentist</option>
                        </select>
                    </div> -->
                    <div class="col-span-12 md:col-span-4">
                        <label for="TypeOfMedicalProfession" class="block mb-2 cursor-pointer">Type Of Medical Profession</label>
                        <input list="TypeOfMedicalProfessions" id="TypeOfMedicalProfession" class="form-control block w-full rounded">
                        <datalist name="TypeOfMedicalProfession" id="TypeOfMedicalProfessions">
                            <!-- <option value="" selected>--Select Medical Profession--</option> -->
                            <option value="Health professional" />
                            <option value="Pharmacist" />
                            <option value="Physician Associate" />
                            <option value="Dentist" />
                        </datalist>
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <label for="AreaOfSpecialization " class="block mb-2 cursor-pointer">Area of Specialization </label>
                        <input type="text" class="form-control block w-full rounded" id="AreaOfSpecialization ">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>



<?php
include_once("../components/footer.php");
?>