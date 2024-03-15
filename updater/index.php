<?php

// Path to the local directory where you want to pull the code
$localDirectory = '/var/www/spawn';

// URL of the public GitHub repository
$githubRepoURL = 'https://github.com/delahee/spawn_web.git';

// Command to pull code from GitHub repository
$command = 'git -C ' . escapeshellarg($localDirectory) . ' pull ' . escapeshellarg($githubRepoURL) . ' 2>&1';

// Execute the command
exec($command, $output, $returnCode);

// Check for errors
if ($returnCode === 0) {
    // Command executed successfully
    echo "Code pulled successfully.<br>";
    
    // Display output if needed (optional)
    if (!empty($output)) {
        echo "Output:<br>";
        foreach ($output as $line) {
            echo $line . "<br>";
        }
    }
} else {
    // Command failed
    echo "Error pulling code:<br>";
    
    // Display error message
    foreach ($output as $line) {
        echo $line . "<br>";
    }
}

?>
