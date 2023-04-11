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
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-success">Demands:
        <br>
        <?php $__currentLoopData = json_decode($ticket->Demands, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Demands): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($Demands); ?><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-success">total expenses:
        <br>
        <?php
            
            $totalExpenses = 0;
            
        ?>


        <?php $__currentLoopData = json_decode($ticket->Demands, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Demands): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($Demands == 'روشویی 15 دقیقه = 25000 تومان'): ?>
                <?php $totalExpenses += 25000; ?>
            <?php endif; ?>
            <?php if($Demands == 'نظافت داخل 20 دقیقه = 30000 تومان'): ?>
                <?php $totalExpenses += 30000; ?>
            <?php endif; ?>
            <?php if($Demands == 'صفر شویی 60 دقیقه = 80000 هزار تومان'): ?>
                <?php $totalExpenses += 80000; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php echo e($totalExpenses); ?> تومان
    </p>
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
<?php /**PATH C:\Users\Ali\Documents\GitHub\Maktab86_hw19\resources\views/components/ticket.blade.php ENDPATH**/ ?>