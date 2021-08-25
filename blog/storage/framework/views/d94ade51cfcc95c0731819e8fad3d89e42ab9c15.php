<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>
            <?php echo \Livewire\Livewire::styles(); ?>

        <!-- Fonts -->

        <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">

        <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <?php echo e($header); ?>

                </div>
            </header>

            <!-- Page Content -->
            <main>
                <?php echo e($slot); ?>

            </main>
        </div>
        <?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-modal')->html();
} elseif ($_instance->childHasBeenRendered('2ipquxr')) {
    $componentId = $_instance->getRenderedChildComponentId('2ipquxr');
    $componentTag = $_instance->getRenderedChildComponentTagName('2ipquxr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2ipquxr');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('2ipquxr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH E:\Laravel_Projects Git\Laravel_tailwind_Livewire\trunk\blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>