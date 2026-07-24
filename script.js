document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', validateContactForm);
    }

    autoSelectFormOptions();
});

// Pre-selects options in classSelect / membershipSelect from ?class= or ?plan= URL params
function autoSelectFormOptions() {
    const urlParams = new URLSearchParams(window.location.search);
    const selectedClass = urlParams.get('class');
    const selectedPlan = urlParams.get('plan');

    const classSelect = document.getElementById('classSelect');
    const membershipSelect = document.getElementById('membershipSelect');

    if (classSelect && selectedClass) {
        const queryVal = selectedClass.toLowerCase();
        for (let option of classSelect.options) {
            if (option.value.toLowerCase() === queryVal) {
                option.selected = true;
                break;
            }
        }
    }

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

function validateContactForm(event) {
    const nameInput = document.getElementById('fullName');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');

    let isValid = true;
    let errorMessage = '';

    const nameRegex = /^[a-zA-Z\s]{3,}$/;
    if (nameInput && !nameRegex.test(nameInput.value.trim())) {
        errorMessage +=
            '• Please enter a valid full name (letters and spaces only).\n';
        isValid = false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailInput && !emailRegex.test(emailInput.value.trim())) {
        errorMessage +=
            '• Please enter a valid email address (e.g., user@domain.com).\n';
        isValid = false;
    }

    // Accepts Malaysian numbers in +60 or 01x format
    const phoneRegex = /^(\+?60|0)1[0-9]{8,9}$/;
    if (
        phoneInput &&
        !phoneRegex.test(phoneInput.value.replace(/[-\s]/g, ''))
    ) {
        errorMessage +=
            '• Please enter a valid Malaysian phone number (e.g., 0123456789 or +60123456789).\n';
        isValid = false;
    }

    if (!isValid) {
        event.preventDefault();
        alert('Form Submission Errors:\n\n' + errorMessage);
    }
}

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

// Escapes HTML special characters to prevent XSS when inserting user input
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
