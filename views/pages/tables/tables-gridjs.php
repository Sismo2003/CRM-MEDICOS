<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Grid JS')); ?>

    <?php include 'partials/head-css.php'; ?>

</head>

<?php include 'partials/body.php'; ?>

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">

    <?php include 'partials/menu.php'; ?>

    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <?php include 'partials/page-wrapper.php'; ?>
        
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Tables', 'title' => 'Grid JS')); ?>

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Basic Table</h6>
                        <div id="basic_tables"></div>
                    </div>
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Pagination</h6>
                        <p class="mb-4 text-slate-400">Pagination can be enabled by setting <code class="text-xs text-pink-500 select-all">pagination: true</code>.</p>
                        <div id="pagination_tables"></div>
                    </div>
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Search</h6>
                        <p class="mb-4 text-slate-400">Grid.js supports global search on all rows and columns. Set <code class="text-xs text-pink-500 select-all">search: true</code> to enable the search plugin:</p>
                        <div id="search_tables"></div>
                    </div>
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Sorting</h6>
                        <p class="mb-4 text-slate-400">To enable sorting, simply add <code class="text-xs text-pink-500 select-all">sort: true</code> to your config:</p>
                        <div id="table_sorting"></div>
                    </div>
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Resizable Columns</h6>
                        <p class="mb-4 text-slate-400">Simply add <code class="text-xs text-pink-500 select-all">resizable: true</code> to your config to enable resizable columns:</p>
                        <div id="resizable_columns"></div>
                    </div>
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Loading State</h6>
                        <p class="mb-4 text-slate-400">Grid.js renders a loading bar automatically while it waits for the data to be fetched. Here we are using an async function to demonstrate this behaviour (e.g. an async function can be a XHR call to a server backend)</p>
                        <div id="table_loading_state"></div>
                    </div>
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Fixed Header</h6>
                        <p class="mb-4 text-slate-400">Simply add <code class="text-xs text-pink-500 select-all">height</code> and <code class="text-xs text-pink-500 select-all">fixedHeader</code> to your Grid.js config object to enable fixed header feature:</p>
                        <div id="table_fixed_header"></div>
                    </div>
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Hidden Columns</h6>
                        <p class="mb-4 text-slate-400">Add <code class="text-xs text-pink-500 select-all">hidden: true</code> to the columns definition to hide them.</p>
                        <div id="table_hidden_column"></div>
                    </div>
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Cell formatting</h6>
                        <p class="mb-4 text-slate-400">You can customize cells and format them at runtime using <code class="text-xs text-pink-500 select-all">formatter</code> property:</p>
                        <div id="cell_formatting"></div>
                    </div>
                </div><!--end card-->
                
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-wrapper -->

        <?php include 'partials/footer.php'; ?>

    </div>

</div>
<!-- end main content -->

<?php include 'partials/customizer.php'; ?>

<?php include 'partials/vendor-scripts.php'; ?>

<script src="assets/libs/gridjs/gridjs.umd.js"></script>

<script src="assets/js/pages/tables-grid.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>