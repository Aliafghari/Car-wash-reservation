<div>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block">Ticket
        #<?php echo e($ticket->ticket_number); ?>

    </p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-success">Phone Number:
        <?php echo e($ticket->phone); ?></p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-success">Full Name:
        <?php echo e($ticket->full_name); ?></p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-success">Time of arrival:
        <?php echo e($ticket->time_of_arrival); ?></p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-danger text-dark">توجه:
        لطفا شماره قبض را برای مراحل بعدی ذخیره کنید.</p>
    <?php echo e($slot); ?>


    <div class="m-3 ">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link','data' => ['href' => '/ticket/'.e($ticket->id).'/edit','class' => 'btn btn-outline-info text-dark rounded-lg px-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/ticket/'.e($ticket->id).'/edit','class' => 'btn btn-outline-info text-dark rounded-lg px-3']); ?>
            Edit
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>
    <div class="m-3">
        <form action="/ticket/<?php echo e($ticket->id); ?>" method="POST" class="inline">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.submit','data' => ['class' => 'btn btn-outline-info text-dark rounded-lg px-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-outline-info text-dark rounded-lg px-3']); ?>
                Delete
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </form>
    </div>
<?php /**PATH C:\xampp3\htdocs\Ali\hw19_1\resources\views/components/ticket.blade.php ENDPATH**/ ?>