<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            animation: slideUp 0.6s ease-out;
            position: relative;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
            border-radius: 20px 20px 0 0;
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 40px;
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        input, select {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid transparent;
            border-radius: 15px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        input:focus, select:focus {
            outline: none;
            border: 2px solid #667eea;
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.2);
        }

        input:hover, select:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .grade-select {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23667eea' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6,9 12,15 18,9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 18px;
            appearance: none;
        }

        .status-group {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
            background: rgba(102, 126, 234, 0.1);
            border: 2px solid transparent;
        }

        .radio-option:hover {
            background: rgba(102, 126, 234, 0.2);
            transform: translateY(-1px);
        }

        .radio-option input[type="radio"] {
            width: auto;
            margin: 0;
            accent-color: #667eea;
        }

        .radio-option.active {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: 2px solid #667eea;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 40px;
        }

        .btn {
            flex: 1;
            padding: 15px 30px;
            border: none;
            border-radius: 15px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.9);
            color: #2c3e50;
            border: 2px solid #ddd;
        }

        .btn-secondary:hover {
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .success-message {
            background: linear-gradient(135deg, #56ab2f, #a8e6cf);
            color: #2d5016;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 600;
            transform: scale(0);
            animation: popIn 0.5s ease-out forwards;
        }

        @keyframes popIn {
            to {
                transform: scale(1);
            }
        }

        .error-message {
            background: linear-gradient(135deg, #fd79a8, #fdcb6e);
            color: #d63031;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 600;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 30px 20px;
            }

            h1 {
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .btn-group {
                flex-direction: column;
            }

            .status-group {
                flex-direction: column;
                gap: 10px;
            }
        }

        /* Loading state */
        .btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none !important;
        }

        .loading {
            position: relative;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin: -10px 0 0 -10px;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📝 Student Registration</h1>
        
        <form action="student" method="POST" id="studentForm">
            @csrf
            <div class="form-group">
                <label for="studentId">Student ID</label>
                <input type="text" id="studentId" name="studentId" required placeholder="e.g., STU001">
            </div>

            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required placeholder="Enter full name">
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" min="16" max="100" required placeholder="Enter age">
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <select id="course" name="course" required class="grade-select">
                    <option value="">Select Course</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Electronics Engineering">Electronics Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Business Administration">Business Administration</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                </select>
            </div>

            <div class="form-group">
                <label for="grade">Grade</label>
                <select id="grade" name="grade" required class="grade-select">
                    <option value="">Select Grade</option>
                    <option value="A+">A+</option>
                    <option value="A">A</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="B-">B-</option>
                    <option value="C+">C+</option>
                    <option value="C">C</option>
                    <option value="C-">C-</option>
                    <option value="D">D</option>
                    <option value="F">F</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="Enter email address">
            </div>

            <div class="form-group">
                <label>Status</label>
                <div class="status-group">
                    <label class="radio-option" for="statusActive">
                        <input type="radio" id="statusActive" name="status" value="Active" checked>
                        <span>Active</span>
                    </label>
                    <label class="radio-option" for="statusInactive">
                        <input type="radio" id="statusInactive" name="status" value="Inactive">
                        <span>Inactive</span>
                    </label>
                </div>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-secondary" onclick="clearForm()">Clear Form</button>
                <button type="submit" class="btn btn-primary">Register Student</button>
            </div>
        </form>
    </div>

    <script>
        // Form handling
        const form = document.getElementById('studentForm');
        const radioOptions = document.querySelectorAll('.radio-option');

        // Handle radio button styling
        radioOptions.forEach(option => {
            const radio = option.querySelector('input[type="radio"]');
            
            option.addEventListener('click', () => {
                radioOptions.forEach(opt => opt.classList.remove('active'));
                option.classList.add('active');
                radio.checked = true;
            });
        });

        // Set initial active state
        document.querySelector('input[name="status"]:checked').parentElement.classList.add('active');

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = e.target.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            // Show loading state
            submitBtn.disabled = true;
            submitBtn.classList.add('loading');
            submitBtn.textContent = '';
            
            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                const formData = new FormData(form);
                const studentData = Object.fromEntries(formData.entries());
                
                console.log('Student Data:', studentData);
                
                // Show success message
                showMessage('Student registered successfully!', 'success');
                
                // Reset form
                clearForm();
                
                // Reset button
                submitBtn.disabled = false;
                submitBtn.classList.remove('loading');
                submitBtn.textContent = originalText;
                
            }, 2000);
        });

        function clearForm() {
            form.reset();
            radioOptions.forEach(opt => opt.classList.remove('active'));
            document.querySelector('input[name="status"]:checked').parentElement.classList.add('active');
            
            // Clear any messages
            const existingMessages = document.querySelectorAll('.success-message, .error-message');
            existingMessages.forEach(msg => msg.remove());
        }

        function showMessage(text, type) {
            // Remove existing messages
            const existingMessages = document.querySelectorAll('.success-message, .error-message');
            existingMessages.forEach(msg => msg.remove());
            
            // Create new message
            const messageDiv = document.createElement('div');
            messageDiv.className = type === 'success' ? 'success-message' : 'error-message';
            messageDiv.textContent = text;
            
            // Insert before form
            form.parentNode.insertBefore(messageDiv, form);
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                messageDiv.remove();
            }, 5000);
        }

        // Auto-generate student ID
        document.getElementById('studentId').addEventListener('focus', function() {
            if (!this.value) {
                const timestamp = Date.now().toString().slice(-6);
                this.value = 'STU' + timestamp;
            }
        });

        // Email validation enhancement
        document.getElementById('email').addEventListener('blur', function() {
            const email = this.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                showMessage('Please enter a valid email address', 'error');
                this.focus();
            }
        });

        // Form field animations
        const inputs = document.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>