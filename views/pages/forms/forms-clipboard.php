<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Clipboard')); ?>

    <?php include 'partials/head-css.php'; ?>

</head>

<?php include 'partials/body.php'; ?>

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">

    <?php include 'partials/menu.php'; ?>

    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <?php include 'partials/page-wrapper.php'; ?>

            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Forms', 'title' => 'Clipboard')); ?>

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Basic Clipboard Copy</h6>
                        <div class="flex">
                            <input type="text" id="clipboard" value="Welcome to Tailwick😊" aria-describedby="button-addon2" class="ltr:rounded-r-none rtl:rounded-l-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="">
                            <button type="button" id="copyButton" data-clipboard-action="copy" data-clipboard-target="#clipboard" class="flex items-center justify-center w-[39px] h-[39px] ltr:rounded-l-none rtl:rounded-r-none p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">
                                <i data-lucide="clipboard-list" class="inline-block size-4"></i>
                            </button>
                        </div>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Basic Clipboard Cut</h6>
                        <div class="flex">
                            <input type="text" id="clipboard1" value="Welcome to Tailwick😊" aria-describedby="button-addon" class="ltr:rounded-r-none rtl:rounded-l-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="">
                            <button type="button" id="cutButton" data-clipboard-action="cut" data-clipboard-target="#clipboard1" class="flex items-center justify-center w-[39px] h-[39px] ltr:rounded-l-none rtl:rounded-r-none p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">
                                <i data-lucide="scissors" class="inline-block size-4"></i>
                            </button>
                        </div>
                    </div>
                </div><!--end card-->
            

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

<script src="assets/libs/clipboard/clipboard.min.js"></script>
<script src="assets/js/pages/clipbord.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>