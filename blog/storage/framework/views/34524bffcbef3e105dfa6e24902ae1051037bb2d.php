<div>
    
    Showing All Posts
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="w-full m-auto">
            <div class="w-1/5 m-3 p-2 border-2 border-indigo-600 rounded-lg  inline-block" >
                <?php if($post->imagefile == ""): ?>
                    <img src="<?php echo e(url('/images/no-image.jpeg')); ?>" class="w-80 h-70">
                <?php else: ?>
                    <img src="<?php echo e(url('/images/'.$post->imagefile)); ?>" class="w-80 h-70">
                <?php endif; ?>
            </div>
            <div class="w-2/5 m-3 p-2 border-2 border-indigo-600 rounded-lg  inline-block ">
                <span class="text-green-500">Post ID </span><?php echo e($post->id); ?>

                <br>
                <span class="text-green-500">User ID </span><?php echo e($post->user_id); ?>

                <br>
                <span class="text-green-500">User Name </span><?php echo e($post->user->name); ?>

                <br>
                <span class="text-green-500">Title of the Post </span>
                <br>
                <span class="text-red-500 border-2 rounded-lg">
                <?php echo e($post->title); ?>

                </span>
                <br>
                <span class="text-green-500">Body of the Post</span>
                <br>
                <span class="text-red-500 border-2 rounded-lg">
                <?php echo e($post->body); ?>

                </span>
                <br>
                <span class="text-green-500">Comments</span>
                <span class="text-red-500 border-2 rounded-lg">
                    <ul class="list-inside md:list-decimal">
                    <?php $__currentLoopData = $post->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($comment->ucomment); ?> </li>
                        <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </span>

                <span class="text-green-500">Tags</span>
                <span>
                        <ul >
                        <?php $__currentLoopData = $post->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tags): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <button  class="myTag py-2 px-2 bg-blue-500 text-white
                        rounded-lg shadow-md hover:bg-green-900 focus:outline-none focus:ring-2
                        focus:ring-green-400 focus:ring-opacity-75">
                        <?php echo e($tags->name); ?>

                        </button>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                </span>
                <br>

                <button class="py-2 px-4 bg-red-500 text-white font-semibold
                rounded-lg shadow-md hover:bg-green-700 focus:outline-none
                focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" id="editPost"
                data-id="<?php echo e($post->id); ?>" data-title="<?php echo e($post->title); ?>"
                data-body="<?php echo e($post->body); ?>" data-target="#editPostModal" data-toggle="modal">
                   Edit Post
                 </button>
                 <button  class="deleteRecord py-2 px-4 bg-red-900 text-white font-semibold
                 rounded-lg shadow-md hover:bg-green-900 focus:outline-none focus:ring-2
                 focus:ring-green-400 focus:ring-opacity-75" data-target="#deleteModal"
                  data-toggle="modal" data-id="<?php echo e($post->id); ?>" >
                   Delete Post
                 </button>

            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class=" m-auto">
        <?php echo e($posts->links()); ?>

    </div>
</div>
<?php /**PATH E:\Laravel_Projects Git\Laravel_tailwind_Livewire\trunk\blog\resources\views/livewire/show-all-post.blade.php ENDPATH**/ ?>