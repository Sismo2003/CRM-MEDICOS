<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Area Charts')); ?>

    <?php include 'partials/head-css.php'; ?>

</head>

<?php include 'partials/body.php'; ?>

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">

    <?php include 'partials/menu.php'; ?>

    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <?php include 'partials/page-wrapper.php'; ?>
        
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Apexcharts', 'title' => 'Area Charts')); ?>

                <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Basic</h6>
                            <div id="basicArea" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Spline Chart</h6>
                            <div id="splineChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-green-500"]' dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Datetime X-Axis</h6>
                            <div class="flex flex-wrap gap-2 toolbar align-items-start justify-content-center">
                                <button type="button" class="px-2 py-1.5 text-xs text-custom-500 btn bg-custom-100 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20 [&.active]:bg-custom-500 [&.active]:text-white" id="one_month">
                                    1M
                                </button>
                                <button type="button" class="px-2 py-1.5 text-xs text-custom-500 btn bg-custom-100 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20 [&.active]:bg-custom-500 [&.active]:text-white" id="six_months">
                                    6M
                                </button>
                                <button type="button" class="px-2 py-1.5 text-xs text-custom-500 btn bg-custom-100 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20 active [&.active]:bg-custom-500 [&.active]:text-white" id="one_year">
                                    1Y
                                </button>
                                <button type="button" class="px-2 py-1.5 text-xs text-custom-500 btn bg-custom-100 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20 [&.active]:bg-custom-500 [&.active]:text-white" id="ytd">
                                    YTD
                                </button>
                                <button type="button" class="px-2 py-1.5 text-xs text-custom-500 btn bg-custom-100 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20 [&.active]:bg-custom-500 [&.active]:text-white" id="all">
                                    ALL
                                </button>
                            </div>
                            <div id="dateTimeChart" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Area with Negative Values Chart</h6>
                            <div id="chartNegativeValues" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-green-500"]' dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Github Style</h6>
                            <div>
                                <div class="bg-slate-100 dark:bg-zink-600">
                                    <div id="areaMonthsChart" class="apex-charts" data-chart-colors='["bg-orange-500"]' dir="ltr"></div>
                                </div>
                            
                                <div class="flex items-center my-3 github-style">
                                    <div class="mr-2 shrink-0">
                                        <img class="size-10 rounded" src="assets/images/users/user-2.jpg" data-hovercard-user-id="634573" alt="">
                                    </div>
                                    <div class="grow">
                                        <a class="font-medium text-15 text-slate-800 dark:text-zink-50">Themesdesign</a>
                                        <div class="text-sm cmeta text-slate-500 dark:text-zink-200">
                                            <span class="font-medium commits text-slate-800 dark:text-zink-50"></span> commits
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="bg-slate-100 dark:bg-zink-600">
                                    <div id="areaYearsChart" class="apex-charts" data-chart-colors='["bg-custom-500"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Stacked Chart</h6>
                            <div id="chartStacked" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-yellow-500", "bg-slate-200"]' dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Irregular Timeseries Chart</h6>
                            <div id="chartIrregular" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-purple-500", "bg-green-500"]' dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Missing / Null Values</h6>
                            <div id="chartMissingNullValues" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

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

<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/libs/moment/moment.js"></script>
<!-- for basic area chart -->
<script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
<!-- for github style chart -->
<script src="https://apexcharts.com/samples/assets/github-data.js"></script>
<!-- for irregular timeseries chart -->
<script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>

<script src="assets/js/pages/apexcharts-area.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>