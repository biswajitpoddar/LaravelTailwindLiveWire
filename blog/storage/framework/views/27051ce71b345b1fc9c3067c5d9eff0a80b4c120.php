
    <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
        Insert New Post
      </button>
      <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
          <!--content-->
          <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
              <h3 class="text-3xl font-semibold">
               New Post
              </h3>
              <button class="p-1 ml-auto  float-right border-2   leading-none rounded-full font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                <span class="bg-red-400 text-white border-black border-2 rounded-full  h-8 w-8 text-2xl block outline-none focus:outline-none hover:bg-purple-700">
                  X
                </span>
              </button>
            </div>
            <!--body-->
            <div class="relative p-6 flex-auto">
                <form class="w-full max-w-sm" method="POST" action="<?php echo e(route("posts.store")); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="md:flex md:items-center mb-6">
                      <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                          Post Title
                        </label>
                      </div>
                      <div class="md:w-2/3">
                        <textarea rows="3" placeholder="Enter title" id="title" name="title"
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        ></textarea>
                        
                      </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                      <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                          Post Body
                        </label>
                      </div>
                      <div class="md:w-2/3">
                        <textarea rows="3" placeholder="Enter title" id="body" name="body"
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        ></textarea>
                        
                      </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                      <div class="md:w-1/3"></div>
                      <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                        <button class="text-red-500 bg-black font-bold uppercase px-6 py-3 rounded text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                          Close
                        </button>
                        <button class="bg-green-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit" onclick="toggleModal('modal-id')">
                          Save
                        </button>
                      </div>
                    </div>
                  </form>
            </div>
            <!--footer-->

          </div>
        </div>
      </div>
      <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
      <script type="text/javascript">
        function toggleModal(modalID){
          document.getElementById(modalID).classList.toggle("hidden");
          document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
          document.getElementById(modalID).classList.toggle("flex");
          document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
      </script>

<?php /**PATH E:\Laravel_Projects Git\Laravel_tailwind_Livewire\trunk\blog\resources\views/livewire/hello-world.blade.php ENDPATH**/ ?>