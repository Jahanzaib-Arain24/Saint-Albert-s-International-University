<?php
/**
 * processes.php - Handles form submissions for Contact and Application forms
 * Saves data to local text files in a clean format and sends email notifications.
 * Based on the established patterns from previous university projects.
 */

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Recipient Email
    $to_email = "info@saiu.education";
    $from_email = "noreply@saiu.education";

    // 2. Determine form type
    $form_type = isset($_POST['form_type']) ? $_POST['form_type'] : 'unknown';

    // 3. CAPTCHA Verification (Numeric Result)
    $captcha_user = isset($_POST['captcha_result']) ? (int) $_POST['captcha_result'] : 0;

    // Note: We'll check which session variable is used based on the form
    $captcha_session_key = ($form_type === 'apply') ? 'apply_captcha_answer' : 'contact_captcha_answer';
    $captcha_answer = isset($_SESSION[$captcha_session_key]) ? (int) $_SESSION[$captcha_session_key] : -1;

    // Check if the user solved it correctly
    if ($captcha_user !== $captcha_answer) {
        $redirect_page = ($form_type === 'apply') ? 'apply' : 'contact';
        header("Location: $redirect_page?status=captcha_error");
        exit();
    }

    $timestamp = date("Y-m-d H:i:s");
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $headers = "From: $from_email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 4. Processing based on Form Type
    if ($form_type === 'contact') {
        $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
        $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
        $subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : 'No Subject';
        $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

        if (!empty($name) && !empty($email) && !empty($message)) {
            // Prepare Email Body
            $email_subject = "New Contact Message: $subject";
            $body = "Saint Albert's International University - Contact Form\n";
            $body .= "====================================================\n";
            $body .= "Date: $timestamp\n";
            $body .= "Name: $name\n";
            $body .= "Email: $email\n";
            $body .= "Subject: $subject\n";
            $body .= "Message:\n$message\n";
            $body .= "====================================================\n";

            // Send Email
            @mail($to_email, $email_subject, $body, $headers . "Reply-To: $email\r\n");

            // Save to Text File (Clean Format)
            if (!file_exists('submissions')) {
                mkdir('submissions', 0777, true);
            }
            $log_entry = "--- New Contact Submission: $timestamp ---\n";
            $log_entry .= $body . "\n\n";
            file_put_contents('submissions/contact_submissions.txt', $log_entry, FILE_APPEND);

            header("Location: contact?status=success");
            exit();
        } else {
            header("Location: contact?status=error");
            exit();
        }

    } elseif ($form_type === 'apply') {
        // Collect Application Data
        $first_name = isset($_POST['first_name']) ? htmlspecialchars(trim($_POST['first_name'])) : '';
        $last_name = isset($_POST['last_name']) ? htmlspecialchars(trim($_POST['last_name'])) : '';
        $dob = isset($_POST['dob']) ? htmlspecialchars(trim($_POST['dob'])) : '';
        $country = isset($_POST['country']) ? htmlspecialchars(trim($_POST['country'])) : '';
        $address = isset($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : '';
        $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
        $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
        $whatsapp = isset($_POST['whatsapp']) ? htmlspecialchars(trim($_POST['whatsapp'])) : '';
        $program = isset($_POST['program']) ? htmlspecialchars(trim($_POST['program'])) : '';
        $job = isset($_POST['job']) ? htmlspecialchars(trim($_POST['job'])) : '';
        $qualifications = isset($_POST['qualifications']) ? htmlspecialchars(trim($_POST['qualifications'])) : '';

        if (!empty($first_name) && !empty($email) && !empty($program)) {
            // Prepare Email Body
            $email_subject = "New Admission Application: $first_name $last_name";
            $body = "Saint Albert's International University - Online Application\n";
            $body .= "====================================================\n";
            $body .= "Date: $timestamp\n";
            $body .= "Name: $first_name $last_name\n";
            $body .= "DOB: $dob\n";
            $body .= "Country: $country\n";
            $body .= "Email: $email\n";
            $body .= "Phone: $phone\n";
            $body .= "WhatsApp: $whatsapp\n";
            $body .= "Program: $program\n";
            $body .= "Job: $job\n";
            $body .= "Address: $address\n";
            $body .= "Qualifications:\n$qualifications\n";
            $body .= "====================================================\n";

            // Send Email
            @mail($to_email, $email_subject, $body, $headers . "Reply-To: $email\r\n");

            // Save to Text File (Clean Format)
            if (!file_exists('submissions')) {
                mkdir('submissions', 0777, true);
            }
            $log_entry = "--- New Application Submission: $timestamp ---\n";
            $log_entry .= $body . "\n\n";
            file_put_contents('submissions/application_submissions.txt', $log_entry, FILE_APPEND);

            header("Location: apply?status=success");
            exit();
        } else {
            header("Location: apply?status=error");
            exit();
        }
    }
}

// Default redirect if missing POST or type
header("Location: index");
exit();
?>
