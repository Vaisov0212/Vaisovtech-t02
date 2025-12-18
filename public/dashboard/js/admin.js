// Admin Panel JavaScript
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

    // Sidebar Toggle
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.querySelector('.main-content');

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('show');
        });
    }

    // Menu Navigation
    const menuLinks = document.querySelectorAll('.menu-link');
    const contentSections = document.querySelectorAll('.content-section');

    menuLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all menu items
            menuLinks.forEach(l => l.parentElement.classList.remove('active'));
            
            // Add active class to clicked menu item
            this.parentElement.classList.add('active');
            
            // Hide all content sections
            contentSections.forEach(section => {
                section.classList.remove('active');
            });
            
            // Show target section
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.classList.add('active');
            }
        });
    });

    // Form Handling
    const forms = document.querySelectorAll('.admin-form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> Saving...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                // Show success message
                showNotification('Changes saved successfully!', 'success');
                
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
    });

    // File Upload Preview
    const fileInputs = document.querySelectorAll('input[type="file"]');
    
    fileInputs.forEach(input => {
        input.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                // Show file name
                const fileName = file.name;
                const formText = this.parentElement.querySelector('.form-text');
                if (formText) {
                    formText.textContent = `Selected: ${fileName}`;
                }
                
                // Preview image if it's an image file
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        // Create preview
                        let preview = input.parentElement.querySelector('.image-preview');
                        if (!preview) {
                            preview = document.createElement('div');
                            preview.className = 'image-preview mt-2';
                            input.parentElement.appendChild(preview);
                        }
                        preview.innerHTML = `
                            <img src="${e.target.result}" alt="Preview" 
                                 style="max-width: 200px; max-height: 200px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                        `;
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
    });

    // Table Actions
    const editButtons = document.querySelectorAll('.btn-outline-primary');
    const deleteButtons = document.querySelectorAll('.btn-outline-danger');
    
    editButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            showNotification('Edit functionality coming soon!', 'info');
        });
    });
    
    deleteButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            if (confirm('Are you sure you want to delete this item?')) {
                // Simulate deletion
                const row = this.closest('tr');
                row.style.opacity = '0.5';
                row.style.transform = 'translateX(-100px)';
                
                setTimeout(() => {
                    row.remove();
                    showNotification('Item deleted successfully!', 'success');
                }, 300);
            }
        });
    });

    // Message Actions
    const replyButtons = document.querySelectorAll('.message-actions .btn-primary');
    const markReadButtons = document.querySelectorAll('.message-actions .btn-outline-secondary');
    
    replyButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            showNotification('Reply functionality coming soon!', 'info');
        });
    });
    
    markReadButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const messageItem = this.closest('.message-item');
            messageItem.style.opacity = '0.7';
            messageItem.style.backgroundColor = '#f8fafc';
            this.textContent = 'Marked as Read';
            this.disabled = true;
            showNotification('Message marked as read!', 'success');
        });
    });

    // Modal Handling
    const addPortfolioModal = document.getElementById('addPortfolioModal');
    if (addPortfolioModal) {
        const modal = new bootstrap.Modal(addPortfolioModal);
        
        // Handle form submission in modal
        const modalForm = addPortfolioModal.querySelector('form');
        const addButton = addPortfolioModal.querySelector('.btn-primary');
        
        addButton.addEventListener('click', function() {
            const formData = new FormData(modalForm);
            const title = formData.get('portfolioTitle') || modalForm.querySelector('#portfolioTitle').value;
            const category = formData.get('portfolioCategory') || modalForm.querySelector('#portfolioCategory').value;
            
            if (!title || !category) {
                showNotification('Please fill in all required fields!', 'error');
                return;
            }
            
            // Simulate adding item
            this.innerHTML = '<i class="bi bi-hourglass-split"></i> Adding...';
            this.disabled = true;
            
            setTimeout(() => {
                showNotification('Portfolio item added successfully!', 'success');
                modal.hide();
                modalForm.reset();
                this.innerHTML = 'Add Item';
                this.disabled = false;
            }, 1500);
        });
    }

    // Search Functionality
    const searchInput = document.querySelector('.search-box input');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            // Search in current active section
            const activeSection = document.querySelector('.content-section.active');
            if (activeSection) {
                const searchableElements = activeSection.querySelectorAll('h1, h2, h3, h4, h5, h6, p, td, th');
                
                searchableElements.forEach(element => {
                    const text = element.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        element.style.backgroundColor = 'rgba(99, 102, 241, 0.1)';
                        element.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    } else {
                        element.style.backgroundColor = '';
                    }
                });
            }
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

    // Stats Animation
    const statsNumbers = document.querySelectorAll('.stats-content h3');
    statsNumbers.forEach(stat => {
        const finalNumber = parseInt(stat.textContent.replace(/,/g, ''));
        if (!isNaN(finalNumber)) {
            animateNumber(stat, 0, finalNumber, 2000);
        }
    });
    
    function animateNumber(element, start, end, duration) {
        const startTime = performance.now();
        
        function updateNumber(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            const current = Math.floor(start + (end - start) * progress);
            element.textContent = current.toLocaleString();
            
            if (progress < 1) {
                requestAnimationFrame(updateNumber);
            }
        }
        
        requestAnimationFrame(updateNumber);
    }

    // Auto-save functionality
    let autoSaveTimeout;
    const autoSaveInputs = document.querySelectorAll('.admin-form input, .admin-form textarea, .admin-form select');
    
    autoSaveInputs.forEach(input => {
        input.addEventListener('input', function() {
            clearTimeout(autoSaveTimeout);
            autoSaveTimeout = setTimeout(() => {
                // Simulate auto-save
                const indicator = document.querySelector('.auto-save-indicator');
                if (indicator) {
                    indicator.textContent = 'Auto-saving...';
                    indicator.style.color = '#f59e0b';
                    
                    setTimeout(() => {
                        indicator.textContent = 'Auto-saved';
                        indicator.style.color = '#10b981';
                        
                        setTimeout(() => {
                            indicator.textContent = '';
                        }, 2000);
                    }, 1000);
                }
            }, 2000);
        });
    });

    // Add auto-save indicator
    const autoSaveIndicator = document.createElement('div');
    autoSaveIndicator.className = 'auto-save-indicator';
    autoSaveIndicator.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        font-size: 0.9rem;
        font-weight: 600;
        z-index: 999;
    `;
    document.body.appendChild(autoSaveIndicator);

    // Keyboard shortcuts
    document.addEventListener('keydown', function(e) {
        // Ctrl + S to save
        if (e.ctrlKey && e.key === 's') {
            e.preventDefault();
            const activeForm = document.querySelector('.content-section.active .admin-form');
            if (activeForm) {
                activeForm.dispatchEvent(new Event('submit'));
            }
        }
        
        // Ctrl + K to focus search
        if (e.ctrlKey && e.key === 'k') {
            e.preventDefault();
            const searchInput = document.querySelector('.search-box input');
            if (searchInput) {
                searchInput.focus();
            }
        }
    });

    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Initialize popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });

    console.log('Admin panel initialized successfully!');
});

