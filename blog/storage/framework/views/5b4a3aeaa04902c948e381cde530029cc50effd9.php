<div>
    
    

    

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('hello-world')->html();
} elseif ($_instance->childHasBeenRendered('zw6nJco')) {
    $componentId = $_instance->getRenderedChildComponentId('zw6nJco');
    $componentTag = $_instance->getRenderedChildComponentTagName('zw6nJco');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zw6nJco');
} else {
    $response = \Livewire\Livewire::mount('hello-world');
    $html = $response->html();
    $_instance->logRenderedChild('zw6nJco', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


    


</div>
<?php /**PATH E:\Laravel_Projects Git\Laravel_tailwind_Livewire\trunk\blog\resources\views/livewire/create-post.blade.php ENDPATH**/ ?>