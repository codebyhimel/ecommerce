<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-toggle d-none d-md-flex" data-toggle-class="sidebar-left-collapsed"
            data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="dashboard.php">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-parent nav-active nav-expanded">
                        <a class="nav-link" href="#">
                            <i class="fa fa-sliders" aria-hidden="true"></i>
                            <span>Slider</span>
                        </a>
                        <ul class="nav nav-children">

                            <li>
                                <a class="nav-link" href="createSlider.php">- Create Slider</a>
                            </li>
                            <li>
                                <a class="nav-link" href="sliderIndex.php">- Slider List</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-parent nav-active nav-expanded">
                        <a class="nav-link" href="#">
                            <i class="fas fa-cogs" aria-hidden="true"></i>
                            <span>Featured</span>
                        </a>
                        <ul class="nav nav-children">

                            <li>
                                <a class="nav-link" href="fetureCreate.php">- Create Feature</a>
                            </li>
                            <li>
                                <a class="nav-link" href="fetureIndex.php">- Feature List</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-parent nav-active nav-expanded">
                        <a class="nav-link" href="#">
                            <i class="fas fa-gift" aria-hidden="true"></i>
                            <span>Offer</span>
                        </a>
                        <ul class="nav nav-children">

                            <li>
                                <a class="nav-link" href="createOffer.php">- Create Offer</a>
                            </li>
                            <li>
                                <a class="nav-link" href="offerIndex.php">- Offer List</a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-parent nav-active nav-expanded">
                        <a class="nav-link" href="#">
                            <i class="fab fa-apple" aria-hidden="true"></i>
                            <span>Brand</span>
                        </a>
                        <ul class="nav nav-children">

                            <li>
                                <a class="nav-link" href="brandCreate.php">- Create Brand</a>
                            </li>
                            <li>
                                <a class="nav-link" href="brandIndex.php">- Brand List</a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-parent nav-active nav-expanded">
                        <a class="nav-link" href="#">
                            <i class="fa fa-folder" aria-hidden="true"></i>
                            <span>Category</span>
                        </a>
                        <ul class="nav nav-children">

                            <li>
                                <a class="nav-link" href="createCategory.php">- Create Category</a>
                            </li>
                            <li>
                                <a class="nav-link" href="categoryIndex.php">- Category List</a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-parent nav-active nav-expanded">
                        <a class="nav-link" href="#">
                            <i class="fa fa-tag" aria-hidden="true"></i>
                            <span>attribute</span>
                        </a>
                        <ul class="nav nav-children">

                            <li>
                                <a class="nav-link" href="attributeCreate.php">- Create Attribute</a>
                            </li>
                            <li>
                                <a class="nav-link" href="attributeindex.php">- Attribute List</a>
                            </li>

                        </ul>
                    </li>


                </ul>
            </nav>

            <script>
                // Maintain Scroll Position
                if (typeof localStorage !== 'undefined') {
                    if (localStorage.getItem('sidebar-left-position') !== null) {
                        var initialPosition = localStorage.getItem('sidebar-left-position'),
                            sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                        sidebarLeft.scrollTop = initialPosition;
                    }
                }
            </script>
        </div>
    </div>
</aside>
<!-- end: sidebar -->