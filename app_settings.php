<?php
// Email (SMTP) settings, the authorized reveal account, and send_mail().
/* ---- Email settings ----
   Works with ANY SMTP provider: Gmail, Brevo, Mailjet, SMTP2GO, Outlook, Yahoo…
   Port 465 = implicit SSL.  Port 587 / 2525 = STARTTLS. Both are supported.
   The SMTP password is NOT stored in this file — it is read from the
   environment variable SMTP_PASS at runtime, so this file can be shared safely. */


// Only this account can reveal the nabunot
const ADMIN_EMAIL = 'siarabenitez43@gmail.com';

/* Reads the SMTP password from the environment variable SMTP_PASS.
   Set it in Apache with:   SetEnv SMTP_PASS "your-smtp-key-here"
   (or via your OS environment / XAMPP setenv.bat), then restart Apache. */


   

   
