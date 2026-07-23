<?php
/**
 * Template Name: Court Directory
 */
?>
<?php get_header(); ?>

<style>
/* Court Directory Styles */


/* 2. Hero Section */
.cd-hero {
    position: relative;
    padding: 100px 0;
    color: var(--white, #fff);
    display: flex;
    align-items: center;
    min-height: 50vh;
}
.cd-hero__bg {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background-size: cover;
    background-position: center;
    z-index: 1;
}
.cd-hero__bg::after {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background: linear-gradient(to right, rgba(11, 25, 44, 0.9) 0%, rgba(11, 25, 44, 0.5) 100%);
}
.cd-hero__container {
    position: relative;
    z-index: 2;
    max-width: 800px;
}
.cd-hero h1 {
    font-size: clamp(2.5rem, 5vw, 4rem);
    margin-bottom: 10px;
    text-transform: uppercase;
    font-family: var(--font-heading, sans-serif);
}
.cd-hero h2 {
    color: var(--green-bright, #00FF87);
    font-size: clamp(1.5rem, 3vw, 2rem);
    margin-bottom: 20px;
    font-family: var(--font-heading, sans-serif);
}
.cd-hero p {
    font-size: 1.2rem;
    line-height: 1.6;
    font-family: var(--font-body, sans-serif);
}

/* 3. Stats & Search Panel */
.cd-stats-search {
    padding: 60px 0;
    background-color: var(--gray-bg, #f4f5f7);
}
.cd-stats-search .container {
    display: grid;
    gap: 40px;
    align-items: center;
}
.cd-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}
.cd-stat-item {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.cd-stat-item svg {
    width: 32px;
    height: 32px;
    stroke: var(--green, #00D06C);
    margin-bottom: 10px;
}
.cd-stat-num {
    font-size: 2.5rem;
    font-weight: 800;
    font-family: var(--font-heading, sans-serif);
    color: var(--navy, #0B192C);
    line-height: 1;
    margin-bottom: 5px;
}
.cd-stat-label {
    font-size: 1rem;
    color: var(--gray-text, #666);
    font-family: var(--font-body, sans-serif);
}
.cd-search-card {
    background: var(--white, #fff);
    padding: 30px;
    border-radius: var(--radius, 8px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}
.cd-search-card h3 {
    margin-bottom: 20px;
    color: var(--navy, #0B192C);
    font-family: var(--font-heading, sans-serif);
}
.cd-search-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.cd-search-form select {
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-family: var(--font-body, sans-serif);
    font-size: 1rem;
    width: 100%;
}
.cd-search-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}
.cd-search-actions a {
    display: flex;
    align-items: center;
    gap: 5px;
    color: var(--navy, #0B192C);
    text-decoration: none;
    font-weight: 600;
    font-family: var(--font-body, sans-serif);
}
.cd-search-actions a svg {
    width: 20px; height: 20px;
    stroke: var(--green, #00D06C);
}

/* 4. Directory Section */
.cd-directory-section {
    padding: 80px 0;
}
.cd-filter-tabs {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 40px;
}
.cd-filter-tab {
    background: var(--gray-bg, #f4f5f7);
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    font-family: var(--font-heading, sans-serif);
    font-weight: 600;
    color: var(--navy, #0B192C);
    cursor: pointer;
    transition: all 0.3s ease;
}
.cd-filter-tab.active, .cd-filter-tab:hover {
    background: var(--navy, #0B192C);
    color: var(--white, #fff);
}
.cd-directory-split {
    display: grid;
    grid-template-columns: 70% 28%;
    gap: 2%;
}
.cd-directory-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}
.cd-featured-card {
    background: var(--white, #fff);
    border-radius: var(--radius, 8px);
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
}
.cd-fc-img {
    height: 200px;
    background-size: cover;
    background-position: center;
    position: relative;
}
.cd-fc-badge {
    position: absolute;
    top: 15px; left: 15px;
    background: var(--green, #00D06C);
    color: var(--navy, #0B192C);
    padding: 5px 10px;
    font-size: 0.8rem;
    font-weight: bold;
    border-radius: 4px;
    text-transform: uppercase;
    font-family: var(--font-body, sans-serif);
}
.cd-fc-content {
    padding: 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.cd-fc-content h4 {
    font-size: 1.3rem;
    color: var(--navy, #0B192C);
    margin-bottom: 5px;
    font-family: var(--font-heading, sans-serif);
}
.cd-fc-city {
    color: var(--gray-text, #666);
    font-size: 0.9rem;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 5px;
    font-family: var(--font-body, sans-serif);
}
.cd-fc-city svg {
    width: 16px; height: 16px; stroke: currentColor; fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
}
.cd-fc-details {
    list-style: none;
    padding: 0; margin: 0 0 20px 0;
    flex-grow: 1;
    font-family: var(--font-body, sans-serif);
}
.cd-fc-details li {
    font-size: 0.9rem;
    padding: 8px 0;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
}
.cd-fc-details li:last-child {
    border-bottom: none;
}
.cd-fc-details li span {
    font-weight: 600;
    color: var(--navy, #0B192C);
}
.cd-info-sidebar {
    background: var(--gray-bg, #f4f5f7);
    padding: 30px;
    border-radius: var(--radius, 8px);
    position: sticky;
    top: 80px;
}
.cd-info-sidebar h3 {
    margin-bottom: 20px;
    color: var(--navy, #0B192C);
    font-family: var(--font-heading, sans-serif);
}
.cd-info-list {
    list-style: none;
    padding: 0; margin: 0;
    font-family: var(--font-body, sans-serif);
}
.cd-info-list li {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
    font-size: 1rem;
    color: var(--gray-text, #666);
}
.cd-info-list svg {
    width: 20px; height: 20px;
    stroke: var(--green, #00D06C);
    flex-shrink: 0;
    fill: none; stroke-width: 3; stroke-linecap: round; stroke-linejoin: round;
}

/* Secondary CTA Strip */
.cd-cta-strip {
    background: var(--green, #00D06C);
    padding: 60px 0;
    margin-top: 80px;
}
.cd-cta-strip .container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}
.cd-cta-box {
    background: var(--white, #fff);
    padding: 40px;
    border-radius: var(--radius, 8px);
    text-align: center;
}
.cd-cta-box h3 {
    color: var(--navy, #0B192C);
    margin-bottom: 20px;
    font-family: var(--font-heading, sans-serif);
}

/* 5. Court Surfaces Guide */
.cd-surfaces-guide {
    padding: 80px 0;
    background: var(--white, #fff);
}
.cd-surfaces-header {
    text-align: center;
    margin-bottom: 50px;
    max-width: 800px;
    margin-left: auto; margin-right: auto;
}
.cd-surfaces-header h2 {
    color: var(--navy, #0B192C);
    font-family: var(--font-heading, sans-serif);
    margin-bottom: 10px;
}
.cd-surfaces-header p {
    color: var(--gray-text, #666);
    font-family: var(--font-body, sans-serif);
    font-size: 1.1rem;
}
.cd-surface-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 60px;
}
.cd-scard {
    background: var(--gray-bg, #f4f5f7);
    border-radius: var(--radius, 8px);
    overflow: hidden;
}
.cd-scard-img {
    height: 150px;
    background-size: cover;
    background-position: center;
}
.cd-scard-body {
    padding: 20px;
    font-family: var(--font-body, sans-serif);
}
.cd-scard-body h4 {
    color: var(--navy, #0B192C);
    margin-bottom: 10px;
    font-size: 1.2rem;
    font-family: var(--font-heading, sans-serif);
}
.cd-scard-body p {
    font-size: 0.9rem;
    margin-bottom: 15px;
    color: var(--gray-text, #666);
}
.cd-scard-body h5 {
    font-size: 0.95rem;
    margin-bottom: 5px;
    color: var(--navy, #0B192C);
    font-weight: 600;
}
.cd-scard-list {
    list-style: disc;
    padding-left: 20px;
    margin-bottom: 15px;
    font-size: 0.85rem;
    color: var(--gray-text, #666);
}
.cd-scard-note {
    background: rgba(0, 208, 108, 0.1);
    border-left: 3px solid var(--green, #00D06C);
    padding: 10px;
    font-size: 0.85rem;
    color: var(--navy, #0B192C);
    font-weight: 500;
}
.cd-quick-tips {
    background: var(--navy, #0B192C);
    color: var(--white, #fff);
    padding: 40px;
    border-radius: var(--radius, 8px);
    margin-bottom: 60px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
.cd-qt-col h5 {
    color: var(--green-bright, #00FF87);
    margin-bottom: 10px;
    font-size: 1.1rem;
    font-family: var(--font-heading, sans-serif);
}
.cd-qt-col p {
    font-size: 0.9rem;
    line-height: 1.5;
    font-family: var(--font-body, sans-serif);
}
.cd-surfaces-bottom {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
}
.cd-comparison-table {
    width: 100%;
    border-collapse: collapse;
    font-family: var(--font-body, sans-serif);
}
.cd-comparison-table th, .cd-comparison-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #eee;
}
.cd-comparison-table th {
    background: var(--gray-bg, #f4f5f7);
    color: var(--navy, #0B192C);
    font-family: var(--font-heading, sans-serif);
}
.cd-stars {
    display: flex;
    gap: 2px;
}
.cd-stars svg {
    width: 16px; height: 16px;
    fill: var(--green, #00D06C);
    stroke: none;
}
.cd-stars svg.empty {
    fill: #ddd;
}
.cd-surface-sidebar {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.cd-ss-card {
    background: var(--gray-bg, #f4f5f7);
    padding: 25px;
    border-radius: var(--radius, 8px);
    font-family: var(--font-body, sans-serif);
}
.cd-ss-card h4 {
    display: flex; align-items: center; gap: 10px;
    margin-bottom: 15px;
    color: var(--navy, #0B192C);
    font-family: var(--font-heading, sans-serif);
}
.cd-ss-card h4 svg {
    width: 24px; height: 24px; stroke: var(--green, #00D06C); fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
}
.cd-ss-card ul {
    list-style: disc;
    padding-left: 20px;
    color: var(--gray-text, #666);
    font-size: 0.9rem;
}
.cd-ss-card p {
    color: var(--gray-text, #666);
    font-size: 0.9rem;
}

/* 6. Closing Banner */
.cd-closing-banner {
    position: relative;
    padding: 100px 0;
    color: var(--white, #fff);
    text-align: center;
}
.cd-closing__bg {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background-size: cover;
    background-position: center;
    z-index: 1;
}
.cd-closing__bg::after {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background: rgba(11, 25, 44, 0.85); /* heavy navy */
}
.cd-closing__content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    margin: 0 auto;
}
.cd-cb-props {
    display: flex;
    justify-content: center;
    gap: 50px;
    margin-bottom: 40px;
}
.cd-cb-prop {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}
.cd-cb-prop svg {
    width: 48px; height: 48px; stroke: var(--green-bright, #00FF87); fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
}
.cd-cb-prop span {
    font-weight: 600;
    font-size: 1.1rem;
    text-transform: uppercase;
    font-family: var(--font-heading, sans-serif);
}
.cd-closing__content h2 {
    font-size: clamp(1.8rem, 4vw, 2.5rem);
    margin-bottom: 20px;
    color: var(--green-bright, #00FF87);
    font-family: var(--font-heading, sans-serif);
}
.cd-closing__content blockquote {
    font-size: 1.2rem;
    font-style: italic;
    opacity: 0.9;
    font-family: var(--font-body, sans-serif);
}

/* Responsive */
@media (max-width: 992px) {
    .cd-stats-search .container,
    .cd-directory-split,
    .cd-cta-strip .container,
    .cd-surfaces-bottom {
        grid-template-columns: 1fr;
    }
    .cd-info-sidebar {
        position: static;
        margin-top: 40px;
    }
    .cd-surface-cards, .cd-quick-tips {
        grid-template-columns: 1fr 1fr;
    }
}
@media (max-width: 768px) {
    .cd-stats-grid,
    .cd-directory-grid {
        grid-template-columns: 1fr;
    }
    .cd-cb-props {
        flex-direction: column;
        gap: 30px;
    }
    .cd-comparison-table {
        display: block;
        overflow-x: auto;
    }
}
@media (max-width: 576px) {
    .cd-surface-cards, .cd-quick-tips {
        grid-template-columns: 1fr;
    }
}
</style>

<main class="court-directory-page">


    <!-- 2. Hero Section -->
    <section class="cd-hero anim-fade-up">
        <div class="cd-hero__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/hero-court-directory.jpg');"></div>
        <div class="container cd-hero__container">
            <h1>PICKLEBALL COURT DIRECTORY</h1>
            <h2>Find. Play. Enjoy.</h2>
            <p>Discover the best pickleball courts in your area. Whether you're looking for public parks, premium indoor facilities, or exclusive private clubs, our directory helps you find exactly where you want to play.</p>
        </div>
    </section>

    <!-- 3. Stats & Search Panel -->
    <section class="cd-stats-search">
        <div class="container">
            <!-- Stats -->
            <div class="cd-stats-grid anim-fade-up">
                <!-- TODO: Verify actual stat numbers with client -->
                <div class="cd-stat-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <span class="cd-stat-num">200+</span>
                    <span class="cd-stat-label">Court Locations</span>
                </div>
                <div class="cd-stat-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    <span class="cd-stat-num">150+</span>
                    <span class="cd-stat-label">Outdoor Courts</span>
                </div>
                <div class="cd-stat-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path><path d="M12 10h.01"></path><path d="M12 14h.01"></path><path d="M16 10h.01"></path><path d="M16 14h.01"></path><path d="M8 10h.01"></path><path d="M8 14h.01"></path></svg>
                    <span class="cd-stat-num">40+</span>
                    <span class="cd-stat-label">Indoor Facilities</span>
                </div>
                <div class="cd-stat-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <span class="cd-stat-num">60+</span>
                    <span class="cd-stat-label">Private Clubs</span>
                </div>
            </div>


        </div>
    </section>

    <!-- 4. Directory Section -->
    <section id="find-a-court" class="cd-directory-section">
        <div class="container">
            <div class="cd-filter-tabs anim-fade-up">
                <button class="cd-filter-tab active">All Courts</button>
                <button class="cd-filter-tab">Public Outdoor</button>
                <button class="cd-filter-tab">Public Indoor</button>
                <button class="cd-filter-tab">Private Clubs</button>
                <button class="cd-filter-tab">Reservation Required</button>
                <button class="cd-filter-tab">Lighted Courts</button>
            </div>

            <div class="cd-directory-split">
                <!-- Main Grid -->
                <div class="cd-directory-grid anim-fade-up">
                    
                    <!-- Card 1 -->
                    <article class="cd-featured-card">
                        <div class="cd-fc-img" style="background-image: url('https://images.unsplash.com/photo-1526413232644-8a40f4110320?q=80&w=800&auto=format&fit=crop');">
                            <span class="cd-fc-badge">Public Outdoor</span>
                        </div>
                        <div class="cd-fc-content">
                            <h4>Palm Beach Gardens Regional Park</h4>
                            <div class="cd-fc-city">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                Palm Beach Gardens
                            </div>
                            <ul class="cd-fc-details">
                                <li>Courts: <span>12</span></li>
                                <li>Lighting: <span>Yes</span></li>
                                <li>Fee: <span>Free</span></li>
                                <li>Reservation: <span>No</span></li>
                            </ul>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article class="cd-featured-card">
                        <div class="cd-fc-img" style="background-image: url('https://images.unsplash.com/photo-1554068865-24cecd4e34b8?q=80&w=800&auto=format&fit=crop');">
                            <span class="cd-fc-badge">Public Indoor</span>
                        </div>
                        <div class="cd-fc-content">
                            <h4>Jupiter Community Center</h4>
                            <div class="cd-fc-city">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                Jupiter
                            </div>
                            <ul class="cd-fc-details">
                                <li>Courts: <span>4</span></li>
                                <li>Lighting: <span>Yes</span></li>
                                <li>Fee: <span>$5 Drop-in</span></li>
                                <li>Reservation: <span>No</span></li>
                            </ul>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </article>

                    <!-- Card 3 -->
                    <article class="cd-featured-card">
                        <div class="cd-fc-img" style="background-image: url('https://images.unsplash.com/photo-1595435934249-5df7ed86e1c0?q=80&w=800&auto=format&fit=crop');">
                            <span class="cd-fc-badge">Private Club</span>
                        </div>
                        <div class="cd-fc-content">
                            <h4>The Pickleball Club at Boca</h4>
                            <div class="cd-fc-city">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                Boca Raton
                            </div>
                            <ul class="cd-fc-details">
                                <li>Courts: <span>24</span></li>
                                <li>Lighting: <span>Yes</span></li>
                                <li>Fee: <span>Members Only</span></li>
                                <li>Reservation: <span>Required</span></li>
                            </ul>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </article>

                </div>

                <!-- Sidebar -->
                <aside class="cd-info-sidebar anim-fade-left">
                    <h3>Court Information Includes</h3>
                    <ul class="cd-info-list">
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Location & Directions</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Court Surface Type</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Indoor vs Outdoor</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Number of Courts</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Lighting Availability</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Public vs Private Access</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Cost / Drop-in Fees</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Reservation Requirements</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> On-site Amenities</li>
                    </ul>
                </aside>
            </div>
        </div>
    </section>

    <!-- Secondary CTA Strip -->
    <div class="cd-cta-strip anim-fade-up">
        <div class="container">
            <div class="cd-cta-box">
                <h3>Don't See Your Favorite Court?</h3>
                <a href="<?php echo esc_url(site_url('/contact')); ?>" class="btn btn-navy">Submit a Court</a>
            </div>
            <div class="cd-cta-box">
                <h3>Traveling to Palm Beach County?</h3>
                <a href="<?php echo esc_url(site_url('/retreats')); ?>" class="btn btn-navy">Plan Your Trip</a>
            </div>
        </div>
    </div>

    <!-- 5. Court Surfaces Guide -->
    <section id="surfaces-guide" class="cd-surfaces-guide">
        <div class="container">
            <div class="cd-surfaces-header anim-fade-up">
                <h2>Types of Pickleball Court Surfaces</h2>
                <p>Every Surface Plays Different – Know the Court. Adjust Your Game.</p>
            </div>

            <!-- Cards -->
            <div class="cd-surface-cards anim-fade-up">
                <div class="cd-scard">
                    <div class="cd-scard-img" style="background-image: url('https://images.unsplash.com/photo-1526413232644-8a40f4110320?q=80&w=600&auto=format&fit=crop');"></div>
                    <div class="cd-scard-body">
                        <h4>Hard Court</h4>
                        <p>Standard tennis court surface, usually asphalt or concrete coated with acrylic.</p>
                        <h5>Advantages:</h5>
                        <ul class="cd-scard-list">
                            <li>True, consistent bounce</li>
                            <li>Low maintenance</li>
                        </ul>
                        <h5>Ideal For:</h5>
                        <ul class="cd-scard-list">
                            <li>Most players</li>
                            <li>Consistent play</li>
                        </ul>
                        <div class="cd-scard-note">Things to Know: High impact on joints.</div>
                    </div>
                </div>

                <div class="cd-scard">
                    <div class="cd-scard-img" style="background-image: url('https://images.unsplash.com/photo-1554068865-24cecd4e34b8?q=80&w=600&auto=format&fit=crop');"></div>
                    <div class="cd-scard-body">
                        <h4>Indoor Court</h4>
                        <p>Typically wood or synthetic gym floor, common in rec centers.</p>
                        <h5>Advantages:</h5>
                        <ul class="cd-scard-list">
                            <li>Climate controlled</li>
                            <li>Fast-paced play</li>
                        </ul>
                        <h5>Ideal For:</h5>
                        <ul class="cd-scard-list">
                            <li>Bad weather days</li>
                            <li>Fast reflex games</li>
                        </ul>
                        <div class="cd-scard-note">Things to Know: Ball skips more, can be slippery.</div>
                    </div>
                </div>

                <div class="cd-scard">
                    <div class="cd-scard-img" style="background-image: url('https://images.unsplash.com/photo-1595435934249-5df7ed86e1c0?q=80&w=600&auto=format&fit=crop');"></div>
                    <div class="cd-scard-body">
                        <h4>Clay Court</h4>
                        <p>Crushed stone or brick. Very rare for pickleball but exists at some clubs.</p>
                        <h5>Advantages:</h5>
                        <ul class="cd-scard-list">
                            <li>Softest on joints</li>
                            <li>Slower play</li>
                        </ul>
                        <h5>Ideal For:</h5>
                        <ul class="cd-scard-list">
                            <li>Older players</li>
                            <li>Strategic games</li>
                        </ul>
                        <div class="cd-scard-note">Things to Know: Irregular bounce, requires specific shoes.</div>
                    </div>
                </div>

                <div class="cd-scard">
                    <div class="cd-scard-img" style="background-image: url('https://images.unsplash.com/photo-1589801258579-18e091f4ca26?q=80&w=600&auto=format&fit=crop');"></div>
                    <div class="cd-scard-body">
                        <h4>Grass/Turf</h4>
                        <p>Synthetic turf or real grass, usually temporary backyard setups.</p>
                        <h5>Advantages:</h5>
                        <ul class="cd-scard-list">
                            <li>Extremely soft impact</li>
                            <li>Fun and casual</li>
                        </ul>
                        <h5>Ideal For:</h5>
                        <ul class="cd-scard-list">
                            <li>Casual backyard play</li>
                            <li>Social events</li>
                        </ul>
                        <div class="cd-scard-note">Things to Know: Very low bounce, requires a special ball.</div>
                    </div>
                </div>
            </div>

            <!-- Quick Tips Banner -->
            <div class="cd-quick-tips anim-fade-up">
                <div class="cd-qt-col">
                    <h5>Hard Court Tips</h5>
                    <p>Bend your knees more. Prepare for fast, high bounces and a solid grip.</p>
                </div>
                <div class="cd-qt-col">
                    <h5>Indoor Tips</h5>
                    <p>Stay low and expect the ball to skid and stay low after the bounce.</p>
                </div>
                <div class="cd-qt-col">
                    <h5>Clay Tips</h5>
                    <p>Be patient. Points last longer. Prepare for irregular, unpredictable bounces.</p>
                </div>
                <div class="cd-qt-col">
                    <h5>Turf Tips</h5>
                    <p>Attack the net quickly. Hard drives and baseline games are less effective.</p>
                </div>
            </div>

            <!-- Bottom Grid -->
            <div class="cd-surfaces-bottom anim-fade-up">
                <!-- Comparison Table -->
                <div class="cd-table-container">
                    <table class="cd-comparison-table">
                        <thead>
                            <tr>
                                <th>Surface</th>
                                <th>Speed</th>
                                <th>Bounce</th>
                                <th>Traction</th>
                                <th>Impact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Hard Court</strong></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                            </tr>
                            <tr>
                                <td><strong>Indoor</strong></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                            </tr>
                            <tr>
                                <td><strong>Clay Court</strong></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                            </tr>
                            <tr>
                                <td><strong>Turf</strong></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                                <td><div class="cd-stars"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg class="empty" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Sidebar Grid -->
                <div class="cd-surface-sidebar">
                    <div class="cd-ss-card">
                        <h4><svg viewBox="0 0 24 24"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg> Shoe Matters!</h4>
                        <ul>
                            <li><strong>Court Shoes:</strong> Designed for lateral movement, essential for hard and indoor courts.</li>
                            <li><strong>Running Shoes:</strong> Avoid these. The tread can catch on hard courts and cause injuries.</li>
                        </ul>
                    </div>
                    <div class="cd-ss-card">
                        <h4><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> General Tips</h4>
                        <p>Always inspect the surface before playing. Look for dead spots, slick areas, or moisture that can drastically alter how the ball bounces and how your shoes grip.</p>
                    </div>
                    <div class="cd-ss-card">
                        <h4><svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg> Maintenance Matters</h4>
                        <p>A well-maintained public court plays better than a neglected private one. Let the facility managers know if you notice significant cracks or dead spots.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 6. Consolidated Closing Banner -->
    <section class="cd-closing-banner anim-fade-up">
        <div class="cd-closing__bg" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1920&auto=format&fit=crop');"></div>
        <div class="container cd-closing__content">
            <div class="cd-cb-props">
                <div class="cd-cb-prop">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <span>Local Knowledge</span>
                </div>
                <div class="cd-cb-prop">
                    <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span>Trusted Info</span>
                </div>
                <div class="cd-cb-prop">
                    <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    <span>Play More</span>
                </div>
            </div>
            <h2>Great Players Adapt to Any Surface. Know the Court. Trust Your Game.</h2>
            <blockquote>"Great courts. Great people. Better together. – PBPA Team"</blockquote>
        </div>
    </section>

    <!-- Filter Tabs JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterTabs = document.querySelectorAll('.cd-filter-tab');
            const cards = document.querySelectorAll('.cd-featured-card');

            filterTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    filterTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    const filterText = this.textContent.trim();

                    cards.forEach(card => {
                        if (filterText === 'All Courts') {
                            card.style.display = 'flex';
                        } else {
                            const badgeText = card.querySelector('.cd-fc-badge').textContent.trim();
                            if (badgeText === filterText) {
                                card.style.display = 'flex';
                            } else {
                                card.style.display = 'none';
                            }
                        }
                    });
                });
            });
        });
    </script>
</main>

<?php get_footer(); ?>
