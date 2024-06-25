<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('heading', null, []); ?> Edit Page <?php $__env->endSlot(); ?>

    <form action="<?php echo e(route('update',$users->id)); ?>" method="post">
      <?php echo csrf_field(); ?>
      <div>
        <div class="px-4 sm:px-0">
          <h3 class="text-base font-semibold leading-7 text-gray-900">User Information</h3>
          <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
          <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="pt-1 text-sm font-medium leading-6 text-gray-900">First name</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><input type="text" class="appearance-none border-none focus:outline-none pl-2 w-full h-[2rem] focus:border focus:rounded-lg focus:border-slate-900 focus:shadow-md hover:border hover:rounded-lg hover:border-slate-900 hover:shadow-md cursor-pointer" name="first_name" value="<?php echo e($users->first_name); ?>"></dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="pt-1 text-sm font-medium leading-6 text-gray-900">Last name</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><input type="text" class="pl-2 appearance-none border-none focus:outline-none pl-2 w-full h-[2rem] focus:border focus:rounded-lg focus:border-slate-900 focus:shadow-md hover:border hover:rounded-lg hover:border-slate-900 hover:shadow-md cursor-pointer" name="last_name" value="<?php echo e($users->last_name); ?>"></dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="pt-1 text-sm font-medium leading-6 text-gray-900">Email address</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><input type="email" class="pl-2 appearance-none border-none focus:outline-none pl-2 w-full h-[2rem] focus:border focus:rounded-lg focus:border-slate-900 focus:shadow-md hover:border hover:rounded-lg hover:border-slate-900 hover:shadow-md cursor-not-allowed" name="email" value="<?php echo e($users->email); ?>" readonly disabled></dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="pt-1 text-sm font-medium leading-6 text-gray-900">Password</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><input type="password" class="pl-2 appearance-none border-none focus:outline-none pl-2 w-full h-[2rem] focus:border focus:rounded-lg focus:border-slate-900 focus:shadow-md hover:border hover:rounded-lg hover:border-slate-900 hover:shadow-md cursor-not-allowed" name="password" value="<?php echo e($users->password); ?>" readonly disabled></dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="pt-1 text-sm font-medium leading-6 text-gray-900">About</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><input type="text" class="pl-2 appearance-none border-none focus:outline-none pl-2 w-full h-[2rem] focus:border focus:rounded-lg focus:border-slate-900 focus:shadow-md hover:border hover:rounded-lg hover:border-slate-900 hover:shadow-md cursor-pointer" name="about" value="<?php echo e($users->about); ?>" placeholder="Tell us about yourself!!"></dd>
            </div>
            <div >
            </div>
          </dl>
          <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" name="cancel" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <div class="vr"></div>
            <button type="submit" name="save" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save Changes</button>
          </div>
        </div>
      </div>
    </form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>

<?php /**PATH C:\VSCODE FILES\.vscode\php\laravel\Tasks\resources\views/edit.blade.php ENDPATH**/ ?>