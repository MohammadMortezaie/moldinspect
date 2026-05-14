(function () {
  const navbar = document.querySelector(".navbar");
  const params = new URLSearchParams(window.location.search);

  if (navbar) {
    const updateNavbar = () => navbar.classList.toggle("scrolled", window.scrollY > 12);
    updateNavbar();
    window.addEventListener("scroll", updateNavbar, { passive: true });
  }

  const forms = document.querySelectorAll("form.contact-form");
  if (!forms.length) {
    return;
  }

  const showFormSuccess = (form, message) => {
    const existing = form.querySelector(".form-status-success");
    if (existing) {
      existing.textContent = message;
      return;
    }

    const status = document.createElement("div");
    status.className = "form-status form-status-success form-status-inline";
    status.setAttribute("role", "status");
    status.textContent = message;
    form.prepend(status);
  };

  const showFormError = (form, message) => {
    const existing = form.querySelector(".form-status-error");
    if (existing) {
      existing.textContent = message;
      return;
    }

    const status = document.createElement("div");
    status.className = "form-status form-status-error form-status-inline";
    status.setAttribute("role", "alert");
    status.textContent = message;
    form.prepend(status);
  };

  forms.forEach((form) => {
    if (params.get("sent") === "1") {
      showFormSuccess(form, "Thanks for contacting us. We will contact you as soon as possible.");
    }

    if (params.get("error") === "1") {
      showFormError(form, "Sorry, your message could not be sent. Please check the form and try again, or call 604-800-3900.");
    }

    if (!form.querySelector('input[name="recaptcha_token"]')) {
      const token = document.createElement("input");
      token.type = "hidden";
      token.name = "recaptcha_token";
      form.appendChild(token);
    }

    if (!form.querySelector('input[name="website"]')) {
      const honeypot = document.createElement("input");
      honeypot.type = "text";
      honeypot.name = "website";
      honeypot.tabIndex = -1;
      honeypot.autocomplete = "off";
      honeypot.setAttribute("aria-hidden", "true");
      honeypot.className = "hp-field";
      form.appendChild(honeypot);
    }

    if (!form.querySelector('input[name="redirect_to"]')) {
      const redirect = document.createElement("input");
      redirect.type = "hidden";
      redirect.name = "redirect_to";
      redirect.value = window.location.pathname || "/contact";
      form.appendChild(redirect);
    }
  });

  if (params.get("sent") === "1" || params.get("error") === "1") {
    forms[0].scrollIntoView({ behavior: "smooth", block: "center" });
  }

  const siteKey = window.RECAPTCHA_SITE_KEY || "";
  if (!siteKey) {
    return;
  }

  const recaptchaScript = document.createElement("script");
  recaptchaScript.src = "https://www.google.com/recaptcha/api.js?render=" + encodeURIComponent(siteKey);
  recaptchaScript.async = true;
  document.head.appendChild(recaptchaScript);

  forms.forEach((form) => {
    form.addEventListener("submit", function (event) {
      const tokenInput = form.querySelector('input[name="recaptcha_token"]');
      if (!tokenInput || tokenInput.value) {
        return;
      }

      event.preventDefault();

      if (!window.grecaptcha) {
        showFormError(form, "Sorry, reCAPTCHA could not load. Please refresh the page or call 604-800-3900.");
        return;
      }

      window.grecaptcha.ready(function () {
        window.grecaptcha.execute(siteKey, { action: "contact_form_submit" }).then(function (token) {
          tokenInput.value = token;
          form.submit();
        });
      });
    });
  });
})();
