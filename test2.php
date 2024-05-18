<?php
include("includes/classautoloader.inc.php");

$user_support_tickets = new support_ticket;
$result = $user_support_tickets->get_all_tickets();


?>