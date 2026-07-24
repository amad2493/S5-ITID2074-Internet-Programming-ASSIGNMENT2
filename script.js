/**
 * Serenity Yoga Centre - JavaScript Core Library
 * Handles Form Validation, Interactive Quiz, Membership Toggle,
 * Dynamic URL Parameter Auto-Selection, and Blog Functionality.
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Attach Event Listener for Form Validation on contact_us.php
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', validateContactForm);
    }

    // 2. Handle Dynamic URL Parameter Pre-selection on contact_us.php
    autoSelectFormOptions();
});

/**
 * Auto-selects options in 'classSelect' or 'membershipSelect'
 * based on URL query parameters (?class= or ?plan=)
 */
function autoSelectFormOptions() {
    const urlParams = new URLSearchParams(window.location.search);
    const selectedClass = urlParams.get('class');
    const selectedPlan = urlParams.get('plan');

    const classSelect = document.getElementById('classSelect');
    const membershipSelect = document.getElementById('membershipSelect');

    // Pre-select Yoga Class dropdown if ?class= is passed
    if (classSelect && selectedClass) {
        const queryVal = selectedClass.toLowerCase();
        for (let option of classSelect.options) {
            if (option.value.toLowerCase() === queryVal) {
                option.selected = true;
                break;
            }
        }
    }

    // Pre-select Membership dropdown if ?plan= is passed
    if (membershipSelect && selectedPlan) {
        const queryVal = selectedPlan.toLowerCase();
        for (let option of membershipSelect.options) {
            if (option.value.toLowerCase() === queryVal) {
                option.selected = true;
                break;
            }
        }
    }
}

/**
 * Client-Side Form Validation (Contact Form)
 */
function validateContactForm(event) {
    const nameInput = document.getElementById('fullName');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');

    let isValid = true;
    let errorMessage = '';

    // Full Name Validation (Letters and spaces only, min 3 chars)
    const nameRegex = /^[a-zA-Z\s]{3,}$/;
    if (nameInput && !nameRegex.test(nameInput.value.trim())) {
        errorMessage +=
            '• Please enter a valid full name (letters and spaces only).\n';
        isValid = false;
    }

    // Email Validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailInput && !emailRegex.test(emailInput.value.trim())) {
        errorMessage +=
            '• Please enter a valid email address (e.g., user@domain.com).\n';
        isValid = false;
    }

    // Malaysian Phone Validation (+60 or 01x)
    const phoneRegex = /^(\+?60|0)1[0-9]{8,9}$/;
    if (
        phoneInput &&
        !phoneRegex.test(phoneInput.value.replace(/[-\s]/g, ''))
    ) {
        errorMessage +=
            '• Please enter a valid Malaysian phone number (e.g., 0123456789 or +60123456789).\n';
        isValid = false;
    }

    // Stop submission if validation fails
    if (!isValid) {
        event.preventDefault();
        alert('Form Submission Errors:\n\n' + errorMessage);
    }
}

/**
 * Yoga Recommendation Quiz Logic
 */
function calculateQuizResult() {
    const goal = document.getElementById('goal').value;
    const experience = document.getElementById('experience').value;
    const resultDiv = document.getElementById('quizResult');
    const title = document.getElementById('recommendedClassTitle');
    const desc = document.getElementById('recommendedClassDesc');
    const bookBtn = document.getElementById('bookClassBtn');

    if (!goal || !experience) {
        alert('Please select answers for both questions!');
        return;
    }

    let recommended = '';
    let details = '';

    if (goal === 'relax') {
        recommended = 'Meditation & Breathing Yoga';
        details =
            'Focuses on deep relaxation, stress management, and mindful breathing techniques to restore inner peace.';
    } else if (goal === 'strength') {
        if (experience === 'beginner') {
            recommended = 'Hatha Yoga';
            details =
                'A classic posture-focused practice that builds baseline strength and flexibility at a steady pace.';
        } else {
            recommended = 'Power Yoga';
            details =
                'A dynamic, high-energy class structured to challenge physical endurance, core stability, and agility.';
        }
    } else if (goal === 'flexibility') {
        recommended = 'Iyengar Yoga';
        details =
            'Emphasizes precise anatomical alignment with the support of props to safely deepen your stretches.';
    } else if (goal === 'senior') {
        recommended = 'Senior Wellness Yoga';
        details =
            'Gentle joint mobility and balance-focused movements tailored for long-term health and stability.';
    }

    if (title) title.textContent = `Recommended for You: ${recommended}`;
    if (desc) desc.textContent = details;

    if (bookBtn) {
        bookBtn.href = `contact_us.php?class=${encodeURIComponent(recommended)}`;
    }

    if (resultDiv) resultDiv.style.display = 'block';
}

/**
 * Membership Pricing Toggle
 */
function toggleBilling(type) {
    const priceBasic = document.getElementById('priceBasic');
    const priceUnlimited = document.getElementById('priceUnlimited');
    const priceVIP = document.getElementById('priceVIP');
    const btnMonthly = document.getElementById('btnMonthly');
    const btnAnnual = document.getElementById('btnAnnual');

    if (type === 'annual') {
        if (priceBasic)
            priceBasic.textContent = 'RM 96 / month (Billed RM 1,152/yr)';
        if (priceUnlimited)
            priceUnlimited.textContent = 'RM 200 / month (Billed RM 2,400/yr)';
        if (priceVIP)
            priceVIP.textContent = 'RM 304 / month (Billed RM 3,648/yr)';
        if (btnAnnual) btnAnnual.classList.add('active');
        if (btnMonthly) btnMonthly.classList.remove('active');
    } else {
        if (priceBasic) priceBasic.textContent = 'RM 120 / month';
        if (priceUnlimited) priceUnlimited.textContent = 'RM 250 / month';
        if (priceVIP) priceVIP.textContent = 'RM 380 / month';
        if (btnMonthly) btnMonthly.classList.add('active');
        if (btnAnnual) btnAnnual.classList.remove('active');
    }
}

/**
 * Wellness Blog Filter
 */
function filterBlog(category) {
    const posts = document.querySelectorAll('.blog-post');

    posts.forEach((post) => {
        if (
            category === 'all' ||
            post.classList.contains(`category-${category}`)
        ) {
            post.style.display = 'block';
        } else {
            post.style.display = 'none';
        }
    });
}

/**
 * Dynamic Comment Addition on Blog Detail Page
 */
function addComment(event) {
    event.preventDefault();
    const nameInput = document.getElementById('commenterName');
    const commentInput = document.getElementById('commentText');
    const commentList = document.getElementById('commentList');

    if (!nameInput || !commentInput || !commentList) return;

    const commentElement = document.createElement('div');
    commentElement.style.borderBottom = '1px solid #ccc';
    commentElement.style.padding = '10px 0';
    commentElement.innerHTML = `<strong>${escapeHTML(nameInput.value)}</strong><p>${escapeHTML(commentInput.value)}</p>`;

    commentList.appendChild(commentElement);

    const commentForm = document.getElementById('commentForm');
    if (commentForm) commentForm.reset();
}

/**
 * XSS Prevention Helper Function
 */
function escapeHTML(str) {
    return str.replace(
        /[&<>'"]/g,
        (tag) =>
            ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                "'": '&#39;',
                '"': '&quot;'
            })[tag] || tag
    );
}
