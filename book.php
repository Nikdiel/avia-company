<?php include "header.html";?>
<link rel="stylesheet" href="css/book.css">

<main>
    <div class="booking-container">
        <h2>Book a Flight</h2>
        <form>
            <div class="form-group">
                <label for="name">Passenger Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="flight">Select Flight</label>
                <select id="flight" name="flight" required>
                    <option value="">-- Choose a Flight --</option>
                    <option value="flight1">Flight 101 - New York to London</option>
                    <option value="flight2">Flight 202 - Paris to Tokyo</option>
                    <option value="flight3">Flight 303 - Sydney to Los Angeles</option>
                </select>
            </div>
            <div class="form-group">
                <label for="seat">Choose Seat</label>
                <input type="text" id="seat" name="seat" placeholder="e.g., 12A" required>
            </div>
            <div class="form-group">
                <button type="submit">Book Now</button>
            </div>
        </form>
    </div>
</main>

<?php include "footer.html";?>