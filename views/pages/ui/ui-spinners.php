<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Spinner')); ?>

    <?php include 'partials/head-css.php'; ?>

</head>

<?php include 'partials/body.php'; ?>

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">

    <?php include 'partials/menu.php'; ?>

    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <?php include 'partials/page-wrapper.php'; ?>
        
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'UI Elements', 'title' => 'Spinner')); ?>

                <div class="grid grid-cols-1 gap-x-4 xl:grid-cols-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4 text-15">Default Spinner</h5>
                            <div class="flex flex-wrap items-center gap-2">
                                <div class="inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-custom-500"></div>
                                <div class="inline-block size-8 border-2 border-green-500 rounded-full animate-spin border-l-transparent"></div>
                                <div class="inline-block size-8 border-2 border-orange-500 rounded-full animate-spin border-l-transparent"></div>
                                <div class="inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-sky-500"></div>
                                <div class="inline-block size-8 border-2 border-yellow-500 rounded-full animate-spin border-l-transparent"></div>
                                <div class="inline-block size-8 border-2 border-red-500 rounded-full animate-spin border-l-transparent"></div>
                                <div class="inline-block size-8 border-2 border-purple-500 rounded-full animate-spin border-l-transparent"></div>
                                <div class="inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-slate-400 dark:border-zink-500 dark:border-l-transparent"></div>
                                <div class="inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-slate-900 dark:border-zink-200 dark:border-l-transparent"></div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
        
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4 text-15">Ping Animation</h5>
                            <div class="flex flex-wrap items-center gap-5 px-3 py-2">
                                <div class="inline-flex size-4 rounded-full opacity-75 animate-ping bg-custom-500"></div>
                                <div class="inline-flex size-4 bg-green-400 rounded-full opacity-75 animate-ping"></div>
                                <div class="inline-flex size-4 bg-orange-400 rounded-full opacity-75 animate-ping"></div>
                                <div class="inline-flex size-4 rounded-full opacity-75 animate-ping bg-sky-400"></div>
                                <div class="inline-flex size-4 bg-yellow-400 rounded-full opacity-75 animate-ping"></div>
                                <div class="inline-flex size-4 bg-red-400 rounded-full opacity-75 animate-ping"></div>
                                <div class="inline-flex size-4 bg-purple-400 rounded-full opacity-75 animate-ping"></div>
                                <div class="inline-flex size-4 rounded-full opacity-75 animate-ping bg-slate-400"></div>
                                <div class="inline-flex size-4 rounded-full opacity-75 animate-ping bg-slate-900 dark:bg-zink-300"></div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-4 text-gray-800 text-15 dark:text-white">Bounce Animation</h5>
                        <div class="flex flex-wrap items-center gap-5">
                            <div class="inline-flex size-6 rounded-full opacity-75 animate-bounce bg-custom-500"></div>
                            <div class="inline-flex size-6 bg-green-400 rounded-full opacity-75 animate-bounce"></div>
                            <div class="inline-flex size-6 bg-orange-400 rounded-full opacity-75 animate-bounce"></div>
                            <div class="inline-flex size-6 rounded-full opacity-75 animate-bounce bg-sky-400"></div>
                            <div class="inline-flex size-6 bg-yellow-400 rounded-full opacity-75 animate-bounce"></div>
                            <div class="inline-flex size-6 bg-red-400 rounded-full opacity-75 animate-bounce"></div>
                            <div class="inline-flex size-6 bg-purple-400 rounded-full opacity-75 animate-bounce"></div>
                            <div class="inline-flex size-6 rounded-full opacity-75 animate-bounce bg-slate-400"></div>
                            <div class="inline-flex size-6 rounded-full opacity-75 animate-bounce bg-slate-900 dark:bg-zink-300"></div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-4 text-gray-800 text-15 dark:text-white">Sizes Animation</h5>
                        <div class="grid grid-cols-1 gap-5 xl:grid-cols-3">
                            <div class="flex flex-wrap items-center gap-5">
                                <div class="inline-block size-4 border-2 rounded-full animate-spin border-l-transparent border-custom-500"></div>
                                <div class="inline-block size-6 border-2 rounded-full animate-spin border-l-transparent border-custom-500"></div>
                                <div class="inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-custom-500"></div>
                                <div class="inline-block w-10 h-10 border-2 rounded-full animate-spin border-l-transparent border-custom-500"></div>
                            </div>
                            <div class="flex flex-wrap items-center gap-6">
                                <div class="inline-flex size-4 rounded-full opacity-75 animate-bounce bg-custom-500"></div>
                                <div class="inline-flex size-6 rounded-full opacity-75 animate-bounce bg-custom-500"></div>
                                <div class="inline-flex size-8 rounded-full opacity-75 animate-bounce bg-custom-500"></div>
                                <div class="inline-flex w-10 h-10 rounded-full opacity-75 animate-bounce bg-custom-500"></div>
                            </div>
                            <div class="flex flex-wrap items-center gap-6">
                                <div class="inline-flex size-2 rounded-full opacity-75 animate-ping bg-custom-500"></div>
                                <div class="inline-flex size-4 rounded-full opacity-75 animate-ping bg-custom-500"></div>
                                <div class="inline-flex size-6 rounded-full opacity-75 animate-ping bg-custom-500"></div>
                                <div class="inline-flex size-8 rounded-full opacity-75 animate-ping bg-custom-500"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'partials/footer.php'; ?>

    </div>
        
</div>
<!-- end main content -->

<?php include 'partials/customizer.php'; ?>

<?php include 'partials/vendor-scripts.php'; ?>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>