<?php
/**
 * Contact form handler for voxinnov.com
 * Receives the POST from application/views/contact.php and emails the
 * inquiry to the company inbox, then redirects back to /contact with a
 * status flag so the page can show a success/error message.
 */

$to = 'info@voxinnov.com';
$redirect_base = '/contact';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $redirect_base);
    exit;
}

// Strip header-injection attempts (newlines) from any field used in headers
function sanitize_header_field($value)
{
    return trim(str_replace(array("\r", "\n", "%0a", "%0d", "%0A", "%0D"), '', $value));
}

$name    = isset($_POST['name']) ? sanitize_header_field($_POST['name']) : '';
$email   = isset($_POST['email']) ? sanitize_header_field($_POST['email']) : '';
$phone   = isset($_POST['phone']) ? sanitize_header_field($_POST['phone']) : '';
$subject = isset($_POST['subject']) ? sanitize_header_field($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if ($name === '' || $subject === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . $redirect_base . '?status=error');
    exit;
}

$mail_subject = 'VOXINNOV website inquiry: ' . $subject;

$body  = "New message from the voxinnov.com contact form:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: " . ($phone !== '' ? $phone : '-') . "\n";
$body .= "Subject: $subject\n\n";
$body .= "Message:\n$message\n";

$headers   = array();
$headers[] = 'From: VOXINNOV Website <no-reply@voxinnov.com>';
$headers[] = "Reply-To: $name <$email>";
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$sent = mail($to, $mail_subject, $body, implode("\r\n", $headers));

header('Location: ' . $redirect_base . '?status=' . ($sent ? 'success' : 'error'));
exit;
