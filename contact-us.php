<?php
// 1. Set a unique title for this specific page
$pageTitle = "About Our Cable Company";

// 2. Pull in the same header and translucent navigation
include('components/header.php');
?>

    <main class="main-content" style="padding-top: 150px;"> <div style="max-width: 800px; text-align: left;">
            <h1 style="font-size: 2.5rem; margin-bottom: 20px;">About Our Global Standards</h1>
            
            <p class="lorem-paragraph">
                We have been manufacturing world-class wire and cable solutions for decades. This page utilizes the exact same header and footer files as your homepage, meaning if you ever change a link in `header.php`, it will update here instantly!
            </p>
        </div>
        
    </main>

<?php
// 3. Pull in the same footer
include('components/footer.php');
?>