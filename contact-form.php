<form class="lab-form" action="#" method="post">
    <h1 class="heading-2 text-center">Book Your Test Now</h1>

    <!-- Name + Age (2 Columns) -->
    <div class="row mb-3">
        <div class="col-md-8">
            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
        </div>

        <div class="col-md-4">
            <input type="number" class="form-control" name="age" placeholder="Age" min="1" max="120" required>
        </div>
    </div>

    <!-- Mobile Number -->
    <div class="form-group mb-3">
        <input type="tel" class="form-control" name="mobile" placeholder="Mobile Number" pattern="[0-9]{10}"
            maxlength="10" required>
    </div>

    <!-- Address -->
    <div class="form-group mb-3">
        <textarea class="form-control" name="address" rows="3" placeholder="Full Address" required></textarea>
    </div>

    <!-- Blood Test Dropdown -->
    <div class="form-group mb-4">
        <select class="form-control" name="test" required>
            <option value="">Select Blood Test</option>
            <option value="CBC">CBC (Complete Blood Count)</option>
            <option value="Blood Sugar">Blood Sugar (Fasting / PP)</option>
            <option value="HbA1c">HbA1c</option>
            <option value="Lipid Profile">Lipid Profile</option>
            <option value="Liver Function Test">Liver Function Test (LFT)</option>
            <option value="Kidney Function Test">Kidney Function Test (KFT)</option>
            <option value="Thyroid Profile">Thyroid Profile (T3, T4, TSH)</option>
            <option value="Vitamin D">Vitamin D</option>
            <option value="Vitamin B12">Vitamin B12</option>
            <option value="Urine Routine">Urine Routine</option>
        </select>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn button-primary w-100">
        Book Test
    </button>
</form>