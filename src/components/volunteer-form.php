<!-- Volunteer Form -->

<h3 class="fs-250 fw-bold mb-2">Sign Up As a Volunteer</h3>

<form action="" class="my-4">
    <fieldset>
        <legend class="fs-200 fw-bold">Personal Information</legend>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-4">
                <label for="FirstName" class="block mb-2 cursor-pointer required">First Name</label>
                <input type="text" class="form-control block w-full rounded invalid" id="FirstName" required>
                <small class="error-msg">This field is required</small>
            </div>
            <div class="col-span-12 md:col-span-4">
                <label for="MiddleName" class="block mb-2 cursor-pointer">Middle Name</label>
                <input type="text" class="form-control block w-full rounded" id="MiddleName">
            </div>
            <div class="col-span-12 md:col-span-4">
                <label for="LastName" class="block mb-2 cursor-pointer required">Last Name</label>
                <input type="text" class="form-control block w-full rounded" id="LastName" required>
            </div>
            <div class="col-span-12 md:col-span-4">
                <label for="Email" class="block mb-2 cursor-pointer required">Email Address</label>
                <input type="text" class="form-control block w-full rounded" id="Email" required autocomplete="email">
            </div>
            <div class="col-span-12 md:col-span-4">
                <label for="PhoneNumber" class="block mb-2 cursor-pointer required">Phone Number</label>
                <input type="text" class="form-control block w-full rounded" id="PhoneNumber" required>
            </div>
            <div class="col-span-12 md:col-span-4">
                <label for="DateOfBirth" class="block mb-2 cursor-pointer required">Date Of Birth</label>
                <input type="date" class="form-control block w-full rounded" id="DateOfBirth" required>
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
            <div class="col-span-12 md:col-span-4">
                <label for="TypeOfMedicalProfession" class="block mb-2 cursor-pointer required">Type Of Medical Profession</label>
                <input list="TypeOfMedicalProfessions" id="TypeOfMedicalProfession" class="form-control block w-full rounded" required>
                <datalist name="TypeOfMedicalProfession" id="TypeOfMedicalProfessions">
                    <!-- <option value="Health professional" />
                    <option value="Pharmacist" />
                    <option value="Physician Associate" />
                    <option value="Dentist" /> -->
                </datalist>
            </div>
            <div class="col-span-12 md:col-span-4">
                <label for="AreaOfSpecialization" class="block mb-2 cursor-pointer required">Area of Specialization</label>
                <input type="text" class="form-control block w-full rounded" id="AreaOfSpecialization" required>
            </div>
        </div>
    </fieldset>
    <hr class="my-8" />
    <fieldset>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <legend class="block mb-2 cursor-pointer required">Are you an are you an independent Medical Professional?</legend>
                <ul class="flex">
                    <li>
                        <input type="radio" name="are-you-an-independent-medical-professional" class="" id="are-you-an-independent-medical-professional-Yes" required>
                        <label for="are-you-an-independent-medical-professional-Yes" class="cursor-pointer">Yes</label>
                    </li>
                    <li class="mx-2"></li>
                    <li>
                        <input type="radio" name="are-you-an-independent-medical-professional" class="" id="are-you-an-independent-medical-professional-No" required>
                        <label for="are-you-an-independent-medical-professional-No" class="cursor-pointer">No</label>
                    </li>
                </ul>
            </div>
            <div class="col-span-12">
                <label for="idYesSTateHow" class="block mb-2 cursor-pointer">If Yes, State Clearly How </label>
                <input type="text" class="form-control block w-full rounded" id="idYesSTateHow">
            </div>
        </div>
    </fieldset>
    <hr class="my-8" />
    <fieldset>
        <legend class="fs-200 fw-bold">Healthcare Institution</legend>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <legend class="block mb-2 cursor-pointer required">Are you attached to a Healthcare Institution? </legend>
                <ul class="flex">
                    <li>
                        <input type="radio" name="attached-to-a-healthcare-institution" class="" id="attached-to-a-healthcare-institution-Yes">
                        <label for="attached-to-a-healthcare-institution-Yes" class="cursor-pointer">Yes</label>
                    </li>
                    <li class="mx-2"></li>
                    <li>
                        <input type="radio" name="attached-to-a-healthcare-institution" class="" id="attached-to-a-healthcare-institution-No">
                        <label for="attached-to-a-healthcare-institution-No" class="cursor-pointer">No</label>
                    </li>
                </ul>
            </div>
            <div class="col-span-12">
                <label for="healthcare-institution-name" class="block mb-2 cursor-pointer">If Yes – Name of Institution</label>
                <input type="text" class="form-control block w-full rounded" id="healthcare-institution-name">
            </div>

            <div class="col-span-12 md:col-span-4">
                <label for="healthcare-institution-ownership" class="block mb-2 cursor-pointer">Healthcare Institution Ownership</label>
                <select name="healthcare-institution-ownership" id="healthcare-institution-ownership" class="form-control block w-full rounded">
                    <option value="" selected>--Select Type--</option>
                    <option value="1">Public</option>
                    <option value="2">Private</option>
                    <option value="3">NGO</option>
                    <option value="4">Government Owned</option>
                </select>
            </div>
            <div class="col-span-12 md:col-span-8">
                <label for="address-of-institution" class="block mb-2 cursor-pointer">Address of institution</label>
                <input type="text" class="form-control block w-full rounded" id="address-of-institution">
            </div>
            <div class="col-span-12 md:col-span-4">
                <label for="designation" class="block mb-2 cursor-pointer">Designation</label>
                <input type="text" class="form-control block w-full rounded" id="designation">
            </div>
            <div class="col-span-12 md:col-span-8">
                <label for="department" class="block mb-2 cursor-pointer">Department</label>
                <input type="text" class="form-control block w-full rounded" id="department">
            </div>
            <div class="col-span-12">
                <div class="flex items-center">
                    <input type="checkbox" class="mr-2" id="currentlyWorkHere">
                    <label for="currentlyWorkHere" class="block cursor-pointer">I currently work here</label>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6" id="startDateContainer">
                <label for="startDate" class="block mb-2 cursor-pointer">Start date</label>
                <input type="date" class="form-control block w-full rounded" id="startDate">
            </div>
            <div class="col-span-12 md:col-span-6" id="endDateContainer">
                <label for="endDate" class="block mb-2 cursor-pointer">End date</label>
                <input type="date" class="form-control block w-full rounded" id="endDate">
            </div>
            <div class="col-span-12 md:col-span-6">
                <label for="socialMediaLink" class="block mb-2 cursor-pointer">Social media link <small>e.g LinkedIn, Facebook e.t.c</small></label>
                <input type="text" class="form-control block w-full rounded" id="socialMediaLink">
            </div>
            <div class="col-span-12 md:col-span-6">
                <label for="socialMediaName" class="block mb-2 cursor-pointer">Social media name</label>
                <input type="text" class="form-control block w-full rounded" id="socialMediaName">
            </div>
        </div>
    </fieldset>

    <hr class="my-8" />

    <fieldset>
        <legend class="fs-200 fw-bold">Address</legend>
        <div class="grid grid-cols-12 gap-4">
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
                <!-- <input type="text" class="form-control block w-full rounded" id="Country"> -->
                <select name="Country" id="Country" class="form-control block w-full rounded" autocomplete="address-level2">
                    <option value="" selected>--Select Country--</option>
                    <option value="afghanistan">Afghanistan</option>
                    <option value="argentina">Argentina</option>
                </select>
            </div>
        </div>
    </fieldset>
    <hr class="my-8" />
    <fieldset>
        <legend class="fs-200 fw-bold">Purpose</legend>
        <label for="why-would-you-want-to-volunteer-with-BIGAiD" class="block mb-2 cursor-pointer">Why would You Want To Volunteer With BIGAiD?</label>
        <textarea name="why-would-you-want-to-volunteer-with-BIGAiD" id="why-would-you-want-to-volunteer-with-BIGAiD" cols="30" rows="3" class="block w-full rounded"></textarea>
        <small class="text-sky-600 text-bold">State clearly What You hope to achieve as a volunteer</small>
    </fieldset>
    <hr class="my-8" />

    <div>
        <input type="checkbox" name="terms-and-condition" id="terms-and-condition" class="mr-2">
        <label for="terms-and-condition">I have read and agree the <a href="#" class="text-secondary fw-bold">terms and conditions</a>
            and <a href="#" class="text-secondary fw-bold">content policy</a>.</label>
    </div>


    <div class="my-4">
        <button class="primary-button">Submit</button>
    </div>
</form>