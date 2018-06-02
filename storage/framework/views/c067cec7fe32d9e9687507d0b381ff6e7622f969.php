
            
                <div class="top-right links">
                   <?php if(Auth::check()): ?> 
                            
                        <?php if(($a = Auth::user()->role_id)===1): ?>
                            <a href="#"> <?php echo e(Auth::user()->username); ?></a>
                        <?php else: ?>
                            <a href="/<?php echo e(Auth::user()->username); ?>/RegisterCorpse"><?php echo e(Auth::user()->username); ?></a>
                        <?php endif; ?>
                       
                        <a href="<?php echo e(url('/')); ?>">Home</a>
                        <a href="<?php echo e(url('/corpse')); ?>" >Search Corpse</a>
                            <?php if($a===1): ?>
                                <a href="<?php echo e(url('/search')); ?>" >Search Account</a>
                                <a href="<?php echo e(url('/statistics')); ?>" >Reports</a>
                                <a href="<?php echo e(url('/relationship')); ?>" >Add Relationship</a>
                                <a href="<?php echo e(url('/request')); ?>" >Approve Request</a>
                            <?php endif; ?>
                        <a href="/settings">Settings</a>
                        <a href="/logout">Logout</a>
                        
                    <?php else: ?>
                        <a href="<?php echo e(url('/corpse')); ?>" >Search Corpse</a>
                        <a href="<?php echo e(url('/login')); ?>" >Login</a>
                        <a href="<?php echo e(url('/register')); ?>" >Register</a>
                    <?php endif; ?>
                </div>
            

            
    