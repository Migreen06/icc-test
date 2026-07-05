<?php 
    // Set a dynamic page title before including the header
    $pageTitle = "ICC Cable Corp."; 
    
    // Include the translucent navigation and document head
    include('components/header.php'); 
?>

    <header class="video-header">
        <video autoplay loop muted playsinline>
            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="video-overlay"></div>
        
        <div class="header-content">
            <h1>setting the global standard for world class wire and cable</h1>
        </div>
    </header>

    <main class="main-content">
        
        <div class="search-container">
            <form class="search-form" action="search.php" method="GET">
                <input type="text" name="query" class="search-input" placeholder="Search products, specifications, or industries..." aria-label="Search">
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>

        <p class="lorem-paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        
    </main>

<?php 
    // Include the footer file to close the document tags properly
    include('components/footer.php'); 
?>