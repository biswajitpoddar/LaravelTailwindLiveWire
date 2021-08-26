<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Post')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
                   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-post', [])->html();
} elseif ($_instance->childHasBeenRendered('A9abKyn')) {
    $componentId = $_instance->getRenderedChildComponentId('A9abKyn');
    $componentTag = $_instance->getRenderedChildComponentTagName('A9abKyn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('A9abKyn');
} else {
    $response = \Livewire\Livewire::mount('create-post', []);
    $html = $response->html();
    $_instance->logRenderedChild('A9abKyn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                   <div class="text-blue-800 p-4">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('show-all-post', [])->html();
} elseif ($_instance->childHasBeenRendered('tdMGEKu')) {
    $componentId = $_instance->getRenderedChildComponentId('tdMGEKu');
    $componentTag = $_instance->getRenderedChildComponentTagName('tdMGEKu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tdMGEKu');
} else {
    $response = \Livewire\Livewire::mount('show-all-post', []);
    $html = $response->html();
    $_instance->logRenderedChild('tdMGEKu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH E:\Laravel_Projects Git\Laravel_tailwind_Livewire\trunk\blog\resources\views/post.blade.php ENDPATH**/ ?>