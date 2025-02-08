<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Inline Editor')); ?>

    <?php include 'partials/head-css.php'; ?>

</head>

<?php include 'partials/body.php'; ?>

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">

    <?php include 'partials/menu.php'; ?>

    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <?php include 'partials/page-wrapper.php'; ?>

            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Forms', 'title' => 'Inline Editor')); ?>

                <div class="p-3 mb-4 text-sm text-red-500 border border-transparent rounded-md bg-red-50">
                    Notes: <a href="https://ckeditor.com/docs/ckeditor5/latest/examples/builds/inline-editor.php" class="font-medium underline">https://ckeditor.com/docs/ckeditor5/latest/examples/builds/inline-editor.php</a> more details
                </div>

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Classic Ckeditor</h6>
                        <div class="ckeditor-inline">
                            <p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.</p>
                            <p><br data-cke-filler="true"></p>

                            <h4>Appreciation of diversity</h4>
                            <p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about cultures online or from books, nothing comes close to experiencing cultural diversity in person. You learn to appreciate each and every single one of the differences while you become more culturally fluid.</p>
                            <p><br data-cke-filler="true"></p>
                            <p>Life doesn't allow us to execute every single plan perfectly. This especially seems to be the case when you travel. You plan it down to every minute with a big checklist. But when it comes to executing it, something always comes up and you’re left with your improvising skills. You learn to adapt as you go. Here’s how my travel checklist looks now:</p>
                            <p><br data-cke-filler="true"></p>
                            <ul>
                                <li>buy the ticket</li>
                                <li><i>start your adventure</i></li>
                            </ul>
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

<script src="assets/libs/@ckeditor/ckeditor5-build-inline/build/ckeditor.js"></script>

<script src="assets/js/pages/form-editor-inline.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>