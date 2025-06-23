<div>
    <h1>User Form</h1>
    
    <form action="student-form" method="POST">
        @csrf
        <div>
            <label>
            <label for="student">Name:</label>
            <input type="text" placeholder="Enter Your Name" name="name" value="{{old('student')}}" id="student" 
            class="{{$errors->first('student')?'input-error':''}}">
            <span style="color: red">@error('student'){{$message}}@enderror</span>

        </div>
        <br>
        <div>
            <label>
            <label for="father">Father Name:</label>
            <input type="text" placeholder="Enter Your Father Name" name="father" value="{{old('father')}}" id="father"
            class="{{$errors->first('father')?'input-error':''}}">
            <span style="color: red">@error('father'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label>
            <label for="mother">Mother Name:</label>
            <input type="text" placeholder="Enter Your Mother Name" name="mother" value="{{old('mother')}}" id="mother"
            class="{{$errors->first('mother')?'input-error':''}}">
            <span style="color: red">@error('mother'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label>
            <label for="address">Address</label>
            <input type="text" placeholder="Enter Your Address " name="address" value="{{old('address')}}" id="address"
            class="{{$errors->first('address')?'input-error':''}}">
            <span style="color: red">@error('address'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label>
            <label for="mob">Mobile Number:</label>
            <input type="text" placeholder="Enter Your Mobile Number" name="mob" value="{{old('moob')}}" id="mob">
            <span style="color: red">@error('mob'){{$message}}@enderror</span>
        </div>
        <br>
         <div>
            <label>
            <label for="email">Email:</label>
            <input type="text" placeholder="Enter Your Email" name="email" value="{{old('email')}}" id="email" 
            class="{{$errors->first('email')?'input-error':''}}">
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
        <br>
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
            <span style="color: red">@error('skill'){{$message}}@enderror</span>
        </div>
        <div>
            <h2>Gender Radio</h2>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" value="other" id="other">
            <label for="other">Other</label>
            <span style="color: red">@error('gender'){{$message}}@enderror</span>
        </div>
        <div>
            <h2>State Drop-Down Menu</h2>
            <select name="state">
                <option value="Kanpur">Kanpur</option>
                <option value="Lunknow">Lucknow</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <span style="color: red">@error('state'){{$message}}@enderror</span>
            </select>
        </div>
        <div>
            <h2>Age</h2>
            <input type="range" name="age" min="18" max="100">
            <span style="color: red">@error('age'){{$message}}@enderror</span>
        </div>
        <br>
        <button>Submit Now</button>
    </form>
</div>
<style>
    .input-error{
        border: 1px solid red;
        color: red;
    }
</style>
