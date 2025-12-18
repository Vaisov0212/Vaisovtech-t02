// Login Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    }

    // Form Elements
    const loginForm = document.getElementById('loginForm');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const togglePasswordBtn = document.getElementById('togglePassword');
    const rememberMeCheckbox = document.getElementById('rememberMe');
    const loginBtn = document.querySelector('.btn-login');

    // Password Toggle
    if (togglePasswordBtn) {
        togglePasswordBtn.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            const icon = this.querySelector('i');
            icon.classList.toggle('bi-eye');
            icon.classList.toggle('bi-eye-slash');
        });
    }

    // Form Validation
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function validatePassword(password) {
        return password.length >= 6;
    }

    function showFieldError(field, message) {
        const formGroup = field.closest('.form-group');
        formGroup.classList.add('error');
        formGroup.classList.remove('success');
        
        let errorElement = formGroup.querySelector('.error-message');
        if (!errorElement) {
            errorElement = document.createElement('div');
            errorElement.className = 'error-message';
            formGroup.appendChild(errorElement);
        }
        errorElement.textContent = message;
    }

    function showFieldSuccess(field) {
        const formGroup = field.closest('.form-group');
        formGroup.classList.add('success');
        formGroup.classList.remove('error');
        
        const errorElement = formGroup.querySelector('.error-message');
        if (errorElement) {
            errorElement.remove();
        }
    }

    function clearFieldState(field) {
        const formGroup = field.closest('.form-group');
        formGroup.classList.remove('error', 'success', 'loading');
        
        const errorElement = formGroup.querySelector('.error-message');
        if (errorElement) {
            errorElement.remove();
        }
    }

    // Real-time Validation
    emailInput.addEventListener('input', function() {
        const email = this.value.trim();
        if (email === '') {
            clearFieldState(this);
        } else if (validateEmail(email)) {
            showFieldSuccess(this);
        } else {
            showFieldError(this, 'Please enter a valid email address');
        }
    });

    passwordInput.addEventListener('input', function() {
        const password = this.value;
        if (password === '') {
            clearFieldState(this);
        } else if (validatePassword(password)) {
            showFieldSuccess(this);
        } else {
            showFieldError(this, 'Password must be at least 6 characters long');
        }
    });

    // Form Submission
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = emailInput.value.trim();
            const password = passwordInput.value;
            
            // Clear previous states
            clearFieldState(emailInput);
            clearFieldState(passwordInput);
            
            // Validate form
            let isValid = true;
            
            if (!email) {
                showFieldError(emailInput, 'Email is required');
                isValid = false;
            } else if (!validateEmail(email)) {
                showFieldError(emailInput, 'Please enter a valid email address');
                isValid = false;
            }
            
            if (!password) {
                showFieldError(passwordInput, 'Password is required');
                isValid = false;
            } else if (!validatePassword(password)) {
                showFieldError(passwordInput, 'Password must be at least 6 characters long');
                isValid = false;
            }
            
            if (!isValid) {
                showNotification('Please fix the errors above', 'error');
                return;
            }
            
            // Show loading state
            loginBtn.classList.add('loading');
            loginBtn.disabled = true;
            
            // Simulate login process
            setTimeout(() => {
                // Check credentials (in real app, this would be an API call)
                if (email === 'admin@example.com' && password === 'admin123') {
                    // Success
                    showNotification('Login successful! Redirecting...', 'success');
                    
                    // Store login state
                    if (rememberMeCheckbox.checked) {
                        localStorage.setItem('rememberMe', 'true');
                        localStorage.setItem('userEmail', email);
                    } else {
                        sessionStorage.setItem('userEmail', email);
                    }
                    
                    // Redirect to admin panel
                    setTimeout(() => {
                        window.location.href = 'index.html';
                    }, 1500);
                } else {
                    // Error
                    showNotification('Invalid email or password', 'error');
                    loginBtn.classList.remove('loading');
                    loginBtn.disabled = false;
                }
            }, 2000);
        });
    }

    // Check for remembered login
    function checkRememberedLogin() {
        const rememberMe = localStorage.getItem('rememberMe');
        const userEmail = localStorage.getItem('userEmail') || sessionStorage.getItem('userEmail');
        
        if (rememberMe === 'true' && userEmail) {
            emailInput.value = userEmail;
            rememberMeCheckbox.checked = true;
            showFieldSuccess(emailInput);
        }
    }

    // Initialize remembered login
    checkRememberedLogin();

    // Forgot Password
    const forgotPasswordLink = document.querySelector('.forgot-password');
    if (forgotPasswordLink) {
        forgotPasswordLink.addEventListener('click', function(e) {
            e.preventDefault();
            showForgotPasswordModal();
        });
    }

    function showForgotPasswordModal() {
        const modal = document.createElement('div');
        modal.className = 'modal fade';
        modal.innerHTML = `
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Reset Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Enter your email address and we'll send you a link to reset your password.</p>
                        <form id="forgotPasswordForm">
                            <div class="form-group">
                                <label for="resetEmail">Email Address</label>
                                <input type="email" id="resetEmail" class="form-control" placeholder="Enter your email" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="sendResetEmail">Send Reset Link</button>
                    </div>
                </div>
            </div>
        `;
        
        document.body.appendChild(modal);
        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();
        
        // Handle reset email
        const sendResetBtn = modal.querySelector('#sendResetEmail');
        const resetEmailInput = modal.querySelector('#resetEmail');
        
        sendResetBtn.addEventListener('click', function() {
            const email = resetEmailInput.value.trim();
            if (!email) {
                showNotification('Please enter your email address', 'error');
                return;
            }
            
            if (!validateEmail(email)) {
                showNotification('Please enter a valid email address', 'error');
                return;
            }
            
            // Simulate sending reset email
            this.innerHTML = '<i class="bi bi-hourglass-split"></i> Sending...';
            this.disabled = true;
            
            setTimeout(() => {
                showNotification('Password reset link sent to your email', 'success');
                bootstrapModal.hide();
                modal.remove();
            }, 2000);
        });
        
        // Remove modal when hidden
        modal.addEventListener('hidden.bs.modal', function() {
            modal.remove();
        });
    }

    // Notification System
    function showNotification(message, type = 'info') {
        // Remove existing notifications
        const existingNotifications = document.querySelectorAll('.notification-toast');
        existingNotifications.forEach(notification => notification.remove());
        
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification-toast notification-${type}`;
        notification.innerHTML = `
            <div class="notification-content">
                <i class="bi bi-${getNotificationIcon(type)}"></i>
                <span>${message}</span>
                <button class="notification-close">&times;</button>
            </div>
        `;
        
        // Add styles
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            padding: 1rem 1.5rem;
            z-index: 9999;
            min-width: 300px;
            border-left: 4px solid ${getNotificationColor(type)};
            animation: slideInRight 0.3s ease;
        `;
        
        // Add to page
        document.body.appendChild(notification);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            notification.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 5000);
        
        // Close button functionality
        const closeBtn = notification.querySelector('.notification-close');
        closeBtn.addEventListener('click', () => {
            notification.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        });
    }
    
    function getNotificationIcon(type) {
        const icons = {
            success: 'check-circle-fill',
            error: 'exclamation-triangle-fill',
            warning: 'exclamation-circle-fill',
            info: 'info-circle-fill'
        };
        return icons[type] || 'info-circle-fill';
    }
    
    function getNotificationColor(type) {
        const colors = {
            success: '#10b981',
            error: '#ef4444',
            warning: '#f59e0b',
            info: '#6366f1'
        };
        return colors[type] || '#6366f1';
    }

    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
        
        .notification-content {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .notification-close {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            margin-left: auto;
            color: #64748b;
        }
        
        .notification-close:hover {
            color: #1e293b;
        }
    `;
    document.head.appendChild(style);

    // Keyboard shortcuts
    document.addEventListener('keydown', function(e) {
        // Enter key to submit form
        if (e.key === 'Enter' && !loginBtn.disabled) {
            loginForm.dispatchEvent(new Event('submit'));
        }
        
        // Escape key to clear form
        if (e.key === 'Escape') {
            loginForm.reset();
            clearFieldState(emailInput);
            clearFieldState(passwordInput);
        }
    });

    // Auto-focus email input
    emailInput.focus();

    // Demo credentials hint (remove in production)
    const demoHint = document.createElement('div');
    demoHint.className = 'demo-hint';
    demoHint.innerHTML = `
        <div style="
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 1rem;
            border-radius: 8px;
            font-size: 0.9rem;
            z-index: 1000;
            max-width: 300px;
        ">
            <strong>Demo Credentials:</strong><br>
            Email: admin@example.com<br>
            Password: admin123
        </div>
    `;
    document.body.appendChild(demoHint);

    // Remove demo hint after 10 seconds
    setTimeout(() => {
        demoHint.style.opacity = '0';
        demoHint.style.transition = 'opacity 0.5s ease';
        setTimeout(() => demoHint.remove(), 500);
    }, 10000);

    console.log('Login page initialized successfully!');
});

