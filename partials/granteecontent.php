<?php
// dashboard.php

// Your PHP code goes here
// For example, you can include some PHP logic or fetch data from a database

?>

<!-- HTML content for the Dashboard page -->
<div>
  <h2>Welcome to the the grantee totality</h2>
  <!-- Add your Dashboard content here -->
</div>

<script>
  $(document).ready(function() {
    function loadDashboardContent() {
      $.ajax({
        url: './partials/granteecontent.php', // Updated to PHP file
        type: 'GET',
        success: function(data) {
          $('.div-main-content').php(data);
        },
        error: function() {
          alert('Error loading Dashboard content');
        }
      });
    }

    $('a[href="mainContent.html"]').on('click', function(e) {
      e.preventDefault();
      loadDashboardContent();
    });
  });
</script>