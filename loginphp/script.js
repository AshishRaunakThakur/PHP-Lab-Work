(function() {
    "use strict";

    // ----- DOM refs -----
    const form = document.getElementById('loginForm');
    const emailInput = document.getElementById('loginEmail');
    const passwordInput = document.getElementById('loginPassword');
    const rememberCheck = document.getElementById('rememberMe');
    const feedback = document.getElementById('loginFeedback');
    const toggleBtn = document.getElementById('togglePassBtn');
    const eyeIcon = document.getElementById('eyeIcon');
    const loginBtn = document.getElementById('loginBtn');

    // ----- toggle password visibility -----
    toggleBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        eyeIcon.classList.toggle('fa-eye');
        eyeIcon.classList.toggle('fa-eye-slash');
    });

    // ----- helper: set feedback -----
    function setFeedback(message, type) {
        feedback.textContent = message;
        feedback.className = '';
        if (type) {
            feedback.classList.add(type);
        }
        if (!message) {
            feedback.style.borderColor = 'transparent';
        } else {
            feedback.style.borderColor = '';
        }
    }

    // ----- simulate PHP backend (project-based) -----
    async function simulatePhpLogin(email, password, remember) {
        // Simulate network delay
        await new Promise(resolve => setTimeout(resolve, 700));

        const cleanEmail = email.trim().toLowerCase();
        const cleanPass = password.trim();

        // Hardcoded demo credentials
        const validEmail = 'demo@project.com';
        const validPass = 'password123';

        // backend-like validation
        if (!cleanEmail || !cleanPass) {
            return { success: false, message: 'Email and password are required.' };
        }
        if (!cleanEmail.includes('@') || !cleanEmail.includes('.')) {
            return { success: false, message: 'Please enter a valid email address.' };
        }
        if (cleanPass.length < 4) {
            return { success: false, message: 'Password must be at least 4 characters.' };
        }

        if (cleanEmail === validEmail && cleanPass === validPass) {
            return {
                success: true,
                message: '✅ Login successful! Redirecting … (PHP demo)',
                user: { email: validEmail, name: 'Project Learner' }
            };
        } else {
            return {
                success: false,
                message: '❌ Invalid email or password. (try demo@project.com / password123)'
            };
        }
    }

    // ----- handle form submit -----
    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        setFeedback('', '');
        loginBtn.disabled = true;
        loginBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Verifying…';

        const email = emailInput.value;
        const password = passwordInput.value;
        const remember = rememberCheck.checked;

        try {
            const result = await simulatePhpLogin(email, password, remember);
            if (result.success) {
                setFeedback(result.message, 'success');
                if (remember) {
                    localStorage.setItem('demo_remember_email', email);
                } else {
                    localStorage.removeItem('demo_remember_email');
                }
                console.log('✅ Login OK (simulated PHP)', result.user);
            } else {
                setFeedback(result.message, 'error');
            }
        } catch (err) {
            setFeedback('⚠️ Connection error. Please try again.', 'error');
            console.error(err);
        } finally {
            loginBtn.disabled = false;
            loginBtn.innerHTML = '<span>Log In</span> <i class="fas fa-arrow-right"></i>';
        }
    });

    // ----- restore "remember me" on load -----
    (function loadRemembered() {
        const saved = localStorage.getItem('demo_remember_email');
        if (saved) {
            emailInput.value = saved;
            rememberCheck.checked = true;
            setFeedback('👋 Welcome back!', '');
            setTimeout(() => {
                if (feedback.textContent.includes('Welcome back')) {
                    setFeedback('', '');
                }
            }, 2800);
        }
    })();

    // ----- clear feedback on input -----
    emailInput.addEventListener('input', () => {
        if (feedback.className) setFeedback('', '');
    });
    passwordInput.addEventListener('input', () => {
        if (feedback.className) setFeedback('', '');
    });

    // ----- forgot password link -----
    document.getElementById('forgotLink').addEventListener('click', function(e) {
        e.preventDefault();
        alert('🔐 Password reset link sent to your email (demo).');
    });

})();