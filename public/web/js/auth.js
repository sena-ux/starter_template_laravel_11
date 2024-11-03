function togglePassword() {
    const passwordInput = document.getElementById("passwordInput");
    const toggleIcon = document.getElementById("toggleIcon");

    // Toggle between password and text
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}


(() => {
    'use strict'
    
    const forms = document.querySelectorAll('.needs-validation')

    Array.from(forms).forEach(form => {
        const submitButton = form.querySelector('button[type="submit"]')
        submitButton.disabled = true

        form.addEventListener('input', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                submitButton.disabled = true
            } else {
                submitButton.disabled = false
            }
            form.classList.add('was-validated')
        }, false)
    })
})()