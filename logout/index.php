<?php
// End the session
session_start();
session_destroy();

// Redirect to the index page
header("Location: ../");
?>