<div>
    <h1>Registration Form</h1>
</div>
<div>
    <form action="registration" method="POST">
        @csrf
        <div>
            <label>
            <label for="student">Name:</label>
            <input type="text" placeholder="Enter Your Name" name="student" id="student">
        </div>
        <br>
        <div>
            <label>
            <label for="father">Father Name:</label>
            <input type="text" placeholder="Enter Your Father Name" name="father" id="father">
        </div>
        <br>
        <div>
            <label>
            <label for="mother">Mother Name:</label>
            <input type="text" placeholder="Enter Your Mother Name" name="mother" id="mother">
        </div>
        <br>
        <div>
            <label>
            <label for="address">Address</label>
            <input type="text" placeholder="Enter Your Address " name="address" id="address">
        </div>
        <br>
        <div>
            <label>
            <label for="mob">Mobile Number:</label>
            <input type="number" placeholder="Enter Your Mobile Number" name="mob" id="mob">
        </div>
        <br>
        <div>
            <label for="city">City:</label>
            <select name="city" id="city">
                <option value="">Select Your City</option>
                <option value="Kanpur">Kanpur</option>
                <option value="Lucknow">Lucknow</option>
                <option value="Delhi">Delhi</option>
            </select>
        </div>
        <br>
        <h3>Gender</h3>
        <div>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="male">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="female">
            <label for="other">Other</label>
            <input type="radio" name="gender" id="other">
        </div>
        <br>
        <button>Submit</button>
    </form>
</div>
