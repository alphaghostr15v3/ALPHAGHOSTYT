<div>
    <h1>Student Information</h1>



    <form action="user-form" method="POST">
        @csrf
        <div>
            <h2>Student Skill Checkbox</h2>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="JAVA" id="java">
            <label for="java">JAVA</label>
            <input type="checkbox" name="skill[]" value="Python" id="python">
            <label for="python">PYTHON</label>
            <input type="checkbox" name="skill[]" value="Javascript" id="javascript">
            <label for="javascript">JAVASCRIPT</label>
        </div>
        <div>
            <h2>Gender Radio</h2>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" value="other" id="other">
            <label for="other">Other</label>
        </div>
        <div>
            <h2>State Drop-Down Menu</h2>
            <select name="state">
                <option value="Kanpur">Kanpur</option>
                <option value="Lunknow">Lucknow</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
            </select>
        </div>
        <div>
            <h2>Age</h2>
            <input type="range" name="age" min="18" max="100">
        </div>
        <br>
        <button>Submit Now</button>
    </form>
</div>
