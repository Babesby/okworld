 
        // Popup Management System
        class PopupManager {
            constructor() {
                this.storageKeys = {
                    visited: 'okworldtravel_visited',
                    submitted: 'okworldtravel_submitted',
                    dismissed: 'okworldtravel_dismissed',
                    lastShown: 'okworldtravel_last_shown'
                };
                this.init();
            }

            init() {
                // Check if popup should be shown
                if (this.shouldShowPopup()) {
                    this.showPopup();
                } else {
                    this.hidePopup();
                }
            }

            shouldShowPopup() {
                // Check if user has submitted form
                if (this.getStorage(this.storageKeys.submitted)) {
                    return false;
                }

                // Check if user dismissed and it's been less than a month
                const dismissed = this.getStorage(this.storageKeys.dismissed);
                if (dismissed) {
                    const dismissedDate = new Date(dismissed);
                    const now = new Date();
                    const daysDiff = (now - dismissedDate) / (1000 * 60 * 60 * 24);
                    if (daysDiff < 30) {
                        return false;
                    }
                }

                // Check if this is first visit
                const visited = this.getStorage(this.storageKeys.visited);
                if (!visited) {
                    this.setStorage(this.storageKeys.visited, new Date().toISOString());
                    return true;
                }

                return false;
            }

            showPopup() {
                document.getElementById('popupOverlay').style.display = 'flex';
                this.setStorage(this.storageKeys.lastShown, new Date().toISOString());
                document.body.style.overflow = 'hidden';
            }

            hidePopup() {
                document.getElementById('popupOverlay').style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            closePopup(isDismissal = true) {
                const overlay = document.getElementById('popupOverlay');
                overlay.style.animation = 'fadeOut 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                
                setTimeout(() => {
                    this.hidePopup();
                    if (isDismissal) {
                        this.setStorage(this.storageKeys.dismissed, new Date().toISOString());
                    }
                }, 400);
            }

            markAsSubmitted() {
                this.setStorage(this.storageKeys.submitted, new Date().toISOString());
            }

            // Storage helpers with localStorage + fallback
            getStorage(key) {
                try {
                    // Try localStorage first
                    return localStorage.getItem(key);
                } catch (e) {
                    // Fallback to memory storage for environments that don't support localStorage
                    if (!window.okWorldStorage) {
                        window.okWorldStorage = {};
                    }
                    return window.okWorldStorage[key];
                }
            }

            setStorage(key, value) {
                try {
                    // Try localStorage first
                    localStorage.setItem(key, value);
                } catch (e) {
                    // Fallback to memory storage
                    if (!window.okWorldStorage) {
                        window.okWorldStorage = {};
                    }
                    window.okWorldStorage[key] = value;
                }
            }
        }

        // Form submission handler
        class FormHandler {
            constructor(popupManager) {
                this.popupManager = popupManager;
                this.initForm();
            }

            initForm() {
                const form = document.getElementById('subscribeForm');
                form.addEventListener('submit', (e) => this.handleSubmit(e));
            }

            async handleSubmit(e) {
                e.preventDefault();
                
                const submitBtn = document.getElementById('submitBtn');
                const successDiv = document.getElementById('successMessage');
                const nameInput = document.getElementById('name');
                const emailInput = document.getElementById('email');
                
                const name = nameInput.value.trim();
                const email = emailInput.value.trim();
                
                if (!name || !email) {
                    this.showError('Please fill in all fields.');
                    return;
                }

                // Show loading state
                submitBtn.classList.add('loading');
                submitBtn.textContent = 'Processing...';
                
                try {
                    // Show loading state
                    await new Promise(resolve => setTimeout(resolve, 800));
                    
                    // Submit to Google Sheets
                    await this.submitToGoogleSheets(name, email);
                    
                    // Show success message
                    successDiv.innerHTML = `
                        <div class="success-message">
                            🎉 Welcome aboard, ${name}! Your journey begins now. 
                            We'll contact you at ${email} with exclusive travel offers.
                        </div>
                    `;
                    successDiv.style.display = 'block';
                    
                    // Mark as submitted
                    this.popupManager.markAsSubmitted();
                    
                    // Auto-close after success
                    setTimeout(() => {
                        this.popupManager.closePopup(false);
                    }, 3000);
                    
                } catch (error) {
                    console.error('Submission error:', error);
                    this.showError('Something went wrong. Please try again.');
                } finally {
                    submitBtn.classList.remove('loading');
                    submitBtn.textContent = 'Start Your Journey';
                }
            }

            showError(message) {
                const successDiv = document.getElementById('successMessage');
                successDiv.innerHTML = `
                    <div style="background: #f44336; color: white; padding: 15px; border-radius: 10px; margin-top: 15px; text-align: center;">
                        ${message}
                    </div>
                `;
                successDiv.style.display = 'block';
                
                setTimeout(() => {
                    successDiv.style.display = 'none';
                }, 3000);
            }

            async submitToGoogleSheets(name, email) {
                // Replace 'YOUR_GOOGLE_SHEETS_WEB_APP_URL' with your actual Web App URL
                const GOOGLE_SHEETS_URL = 'https://script.google.com/macros/s/AKfycbzUuNgY2YaSrdrZj6BBCArrEYN-k8IHXcq6vLGdluMOpxm3Iokcjt2xkENm5uP2jHKDyA/exec';
                
                try {
                    const response = await fetch(GOOGLE_SHEETS_URL, {
                        method: 'POST',
                        mode: 'no-cors', // Important for Google Apps Script
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            name: name,
                            email: email,
                            timestamp: new Date().toISOString(),
                            source: 'popup',
                            userAgent: navigator.userAgent,
                            referrer: document.referrer || 'Direct'
                        })
                    });
                    
                    // Note: With no-cors mode, we can't read the response
                    // We'll assume success if no error is thrown
                    console.log('Data sent to Google Sheets');
                    return true;
                    
                } catch (error) {
                    console.error('Google Sheets submission error:', error);
                    throw error;
                }
            }
        }

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            const popupManager = new PopupManager();
            const formHandler = new FormHandler(popupManager);
            
            // Global functions for HTML onclick events
            window.closePopup = () => popupManager.closePopup();
            
            // Close popup when clicking outside
            document.getElementById('popupOverlay').addEventListener('click', function(e) {
                if (e.target === this) {
                    popupManager.closePopup();
                }
            });

            // Close popup with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    popupManager.closePopup();
                }
            });
        });
  