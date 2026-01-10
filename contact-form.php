<form class="lab-form" action="#" method="post">
    <h1 class="heading-2 text-center">Book Your Test Now</h1>

    <!-- Name + Age (2 Columns) -->
    <div class="row mb-3">
        <div class="col-md-8">
            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
        </div>

        <div class="col-md-4 ">
            <input type="number" class="form-control" name="age" id="age-field" placeholder="Age" min="1" max="120" required>
        </div>
    </div>

    <!-- Mobile Number -->
    <div class="form-group mb-3">
        <input type="tel" class="form-control" name="mobile" placeholder="Mobile Number" pattern="[0-9]{10}"
            maxlength="10" required>
    </div>

    <div class="form-group mb-3">
        <input type="text" class="form-control" name="mobile" placeholder="Test Name" pattern="" maxlength="100"
            required>
    </div>

    <!-- Address -->
    <div class="form-group mb-3">
        <textarea class="form-control" name="address" rows="3" placeholder="Full Address" required></textarea>
    </div>




    <!-- Submit Button -->
    <button type="submit" class="btn button-primary w-100">
        Book Test
    </button>
</form>