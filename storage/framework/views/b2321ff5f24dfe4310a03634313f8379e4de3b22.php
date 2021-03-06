 <style>
.fileuploader-theme-thumbnails .fileuploader-items .fileuploader-items-list {
    margin: -30px 0 0 0px!important;
}
.fileuploader-theme-thumbnails .fileuploader-thumbnails-input, .fileuploader-theme-thumbnails .fileuploader-items-list .fileuploader-item {
    width: 250px!important;
    height: 250px!important;
    margin-left: 0!important;
        margin-right: 20px!important;
}
.fileuploader-theme-thumbnails .fileuploader-thumbnails-input-inner{
        cursor: pointer!important;
}
#portfolio-wrap {
    width:250px;
}
</style>

<div class="row form-row">
    <div class="col-12 required-key">
	    <label class="required-label">* - Required</label>
	</div>
    <input type="hidden" name="postal_code" id="postal_code" value="<?php if(isset($request)): ?><?php echo e($request->postal_code); ?><?php endif; ?>">
	<input type="hidden" name="city" id="city" value="<?php if(isset($request)): ?><?php echo e($request->city); ?><?php endif; ?>">
	<input type="hidden" name="state_id" id="state_id" value="<?php if(isset($request)): ?><?php echo e($request->state_id); ?><?php endif; ?>">
	<input type="hidden" name="state" id="state" value="<?php if(isset($request)): ?><?php echo e($request->state); ?><?php endif; ?>">
	<input type="hidden" name="latitude" id="latitude" value="<?php if(isset($request)): ?><?php echo e($request->latitude); ?><?php endif; ?>">
	<input type="hidden" name="longitude" id="longitude" value="<?php if(isset($request)): ?><?php echo e($request->longitude); ?><?php endif; ?>">
    <div class="col-12">
        <div class="form-group <?php echo e($errors->has('equipment_title') ? 'has-error' : ''); ?>">
            <label for="equipment_title" class="required">Equipment for Sale Title</label>
            <div class="">
                <input class="form-control" name="equipment_title" type="text" id="equipment_title" value="<?php echo e(old('equipment_title', optional($equipment)->equipment_title)); ?>" maxlength="100" placeholder="<?php echo e(trans('equipments.equipment_title__placeholder')); ?>" required>
                <?php echo $errors->first('equipment_title', '<p class="help-block">:message</p>'); ?>

            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group <?php echo e($errors->has('equipment_description') ? 'has-error' : ''); ?>">
            <label for="equipment_description" class="required">Description</label>
            <div class="">
                <textarea class="form-control" name="equipment_description" cols="50" rows="10" id="equipment_description" placeholder="Description" required><?php echo e(old('equipment_description', optional($equipment)->equipment_description)); ?></textarea>
                <?php echo $errors->first('equipment_description', '<p class="help-block">:message</p>'); ?>

            </div>
        </div>
    </div>
    
    <div class="col-12">
		<div class="form-group">
			<label for="preferred-contact" class="required">Preferred Method of Contact</label>
			<?php
			    $preferred_contacts = unserialize(old('preferred_contact', optional($equipment)->preferred_contact));
			    if($preferred_contacts !== false) {
    			    $phone = in_array('Phone',$preferred_contacts);
    			    $email = in_array('Email',$preferred_contacts);
			    }
			    
			?>
			<div class="row">
			    <div class="col-md-12">
        			<input type="checkbox" class="contact-options" name="preferred_contact[]" value="Phone" <?php echo e(isset($phone) && $phone !== false ? 'checked' : ''); ?>>
			        <label for="contact-phone">Phone</label>
        		</div>
        	</div>
        	<div class="row">
			    <div class="col-md-12">
        			<input type="checkbox" class="contact-options" name="preferred_contact[]" value="Email" <?php echo e(isset($email) && $email !== false ? 'checked' : ''); ?>>
        			<label for="contact-email">Email</label>
        		</div>
        	</div>
        	<div class="row">
			    <div class="col-md-12">
        			<span class="alert" style="display:none; float:left; color:red; padding-left:0!important; padding-bottom:0!important; margin-bottom:0!important;">You must select at least one preference.</span>
        		</div>
        	</div>
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="form-group">
			<label for="phone" class="">Phone Number</label>
			<input class="form-control" name="phone" type="tel" value="<?php echo e(old('phone', optional($equipment)->phone)); ?>">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="phone" class="required">Email</label>
			<input require class="form-control required" name="email" type="email" value="<?php echo e(old('email', optional($equipment)->email)); ?>">
		</div>
	</div>
    
</div>
<div class="row">
<div class="col-12">
    <h4>More information about your Equipment for Sale Ad</h4>
</div>

    <div class="col-md-6">
        <div class="form-group <?php echo e($errors->has('equipment_cost') ? 'has-error' : ''); ?>">
            <label for="equipment_cost" class="required">What is your listing price? </label>
            <div class="">
                <input class="form-control" name="equipment_cost" type="number" min="0" step="any" id="equipment_cost" value="<?php echo e(old('equipment_cost', optional($equipment)->equipment_cost)); ?>" placeholder=" What is your listing price? " required>
                <?php echo $errors->first('equipment_cost', '<p class="help-block">:message</p>'); ?>

            </div>
        </div>
    </div>
    <div class="col-md-6">
		<div class="form-group <?php echo e($errors->has('category') ? 'has-error' : ''); ?>">
			<label for="category" class="required">Category</label>
			<div class="">
				<select class="form-control" id="category" name="category" required>
					<option value="">Category</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Insulation Blowing Machines' ? 'selected' : ''); ?> value="Insulation Blowing Machines">Insulation Blowing Machines</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Earth Moving Equipment' ? 'selected' : ''); ?> value="Earth Moving Equipment">Earth Moving Equipment</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Generators' ? 'selected' : ''); ?> value="Generators">Generators</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Compressors' ? 'selected' : ''); ?> value="Compressors"> Compressors</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Trucks' ? 'selected' : ''); ?> value="Trucks"> Trucks</option>
					
					
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Forklifts' ? 'selected' : ''); ?> value="Forklifts"> Forklifts</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Heaters' ? 'selected' : ''); ?> value="Heaters"> Heaters</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Lifts' ? 'selected' : ''); ?> value="Lifts"> Lifts</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Drills' ? 'selected' : ''); ?> value="Drills"> Drills</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Grinders' ? 'selected' : ''); ?> value="Grinders"> Grinders</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Hand Tools' ? 'selected' : ''); ?> value="Hand Tools"> Hand Tools</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Power tools' ? 'selected' : ''); ?> value="Power tools"> Power tools</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Implements' ? 'selected' : ''); ?> value="Implements"> Implements</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Specialty tools' ? 'selected' : ''); ?> value="Specialty tools"> Specialty tools</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Welders' ? 'selected' : ''); ?> value="Welders"> Welders </option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Welding equipment' ? 'selected' : ''); ?> value="Welding equipment">Welding equipment</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Miscellaneous equipment' ? 'selected' : ''); ?> value="Miscellaneous equipment"> Miscellaneous equipment</option>
					<option <?php echo e(isset($equipment->category) && $equipment->category == 'Miscellaneous tools' ? 'selected' : ''); ?> value="Miscellaneous tools">Miscellaneous tools</option>
				</select>
			</div>
		</div>
	</div>
 

    <!--<div class="col-md-6">-->
    <!--    <div class="form-group <?php echo e($errors->has('equipment_acres') ? 'has-error' : ''); ?>">-->
    <!--        <label for="equipment_acres" class="required"> How many acres of Equipment?</label>-->
    <!--        <div class="">-->
    <!--            <input class="form-control" name="equipment_acres" type="number" min="0" step="any" id="equipment_acres" value="<?php echo e(old('equipment_acres', optional($equipment)->equipment_acres)); ?>" maxlength="100" placeholder="How Many Acres" required>-->
    <!--            <?php echo $errors->first('equipment_acres', '<p class="help-block">:message</p>'); ?>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--<div class="col-md-6">-->
    <!--    <div class="form-group <?php echo e($errors->has('parcel_tax_number') ? 'has-error' : ''); ?>">-->
    <!--        <label for="parcel_tax_number" class="required"> Parcel / Tax ID </label>-->
    <!--        <div class="">-->
    <!--            <input class="form-control" name="parcel_tax_number" type="text" id="parcel_tax_number" value="<?php echo e(old('parcel_tax_number', optional($equipment)->parcel_tax_number)); ?>" placeholder="Parcel / Tax ID" required>-->
    <!--            <?php echo $errors->first('parcel_tax_number', '<p class="help-block">:message</p>'); ?>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="col-md-6">-->
    <!--    <div class="form-group <?php echo e($errors->has('equipment_annual_taxes') ? 'has-error' : ''); ?>">-->
    <!--        <label for="equipment_annual_taxes" class="required"> Annual Tax </label>-->
    <!--        <div class="">-->
    <!--            <input class="form-control" name="equipment_annual_taxes" type="text" id="equipment_annual_taxes" value="<?php echo e(old('equipment_annual_taxes', optional($equipment)->equipment_annual_taxes)); ?>" placeholder="Annual Taxes" required>-->
    <!--            <?php echo $errors->first('equipment_annual_taxes', '<p class="help-block">:message</p>'); ?>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="col-md-6">
        <div class="form-group">
            <label for="location" class="required">Post in Location</label>
            <div class="">
                <input class="form-control" name="location" type="text" id="location" value="<?php echo e(old('location', optional($equipment)->location)); ?>" maxlength="255" placeholder="Enter Location">
            </div>
        </div>
    </div>
    
    <div class="col-12" style="padding-left:0;">
                <div class="form-group">
                      <label for="file" class="col-12 required" style="display:inline-block;" >Featured Image:</label>
                      <div class="col-12" >
                            <?php
                            $no_image = '';
                            $has_image = 'display:none;';
                            if(!isset($equipment->equipment_image)){
                                $no_image = 'display:none;';
                                $has_image = '';
                            }
                            ?>
                            <div id="profile-upload" style="<?php echo e($has_image); ?>">    
                                <input class="form-control" name="file" type="file" value="" accept="image/*" required>
                            </div>
                            <div id="portfolio-wrap" style="<?php echo e($no_image); ?>">
                                <a id="hide-image" class="cfileuploader-action cfileuploader-action-remove" title="Remove"><i></i></a>
                                <img id="portfolio-image" src="<?php if(isset($equipment->equipment_image)): ?><?php echo e($equipment->equipment_image); ?><?php endif; ?>">
                            </div>    
                      </div>
                </div>
                    
          </div>
          
                <?php
                $max_photos = 0;
                if(Auth::user()->property == 2) {$max_photos = 10;}
                if(Auth::user()->property == 3) {$max_photos = 25;}
                if(Auth::user()->property == 4) {$max_photos = 50;}
                ?>
                <?php if(count($galeries) < $max_photos || Auth::user()->role_id == 8 || Auth::user()->role_id == 1): ?>
                <div class="col-12">
                		<div class="form-group <?php echo e($errors->has('galeries') ? 'has-error' : ''); ?>">
                			<label for="galeries" style="margin-bottom:15px;">Gallery Images: (Max 100 uploads per form submit)</label>
                			<input id="galeries-files" type="file" name="galeries[]" id="project_files" class="form-control"  accept="image/*" multiple>
                			<?php echo $errors->first('galeries', '<p class="help-block">:message</p>'); ?>

                		</div>
                </div>
                <?php else: ?>
                <div class="col-md-12" style="margin-bottom:20px;">
                    <div class="d-flex align-items-center">
                        <a href="/pricing" class="btn btn-info m-l-15" title="<?php echo e(trans('equipments.create')); ?>" style="margin-left:0;">
                            <i class="fa fa-plus-circle"></i>Upgrade Your Account to List More Gallery Images
                        </a></div>
                </div>
                <?php endif; ?>
                
                
	                    <?php if(!empty($galeries) && $galeries != '[]' && $galeries && isset($galeries)): ?>
	                        <div class="col-12">
	                        <label class="">Remove Gallery Images:</label>
	                        </div>
	                     <?php endif; ?>
	                     <div clas="row">
								<?php $__currentLoopData = $galeries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div id="<?php echo e($file->id); ?>" class="col-lg-2 col-md-4 col-sm-4 m-t-20" style="margin-top:10px;float: left;">
										<div class="row">
										    
										    <?php
										    if($file->file_type == 'pdf'){
										        $src = '/public/storage/equipments/images/PDF-icon-small-231x300.png';
										    } else {
										        $src = $file->file_path;
										    }
										    ?>
										    <div style="width:100%;padding:10px;"><img width="100%" src="<?php echo e($src); ?>"></div>
										    
											
											<div style="text-align: center;width: 100%;margin-top: 10px;"><a style="color:#fff;" data-id="<?php echo e($file->id); ?>" class="btn btn-red delete-galery" href="">Remove</a></div>
										
										</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
								</div>
    
    <div class="col-12" style="margin-top: 30px;">
		<div class="form-group <?php echo e($errors->has('files') ? 'has-error' : ''); ?>">
			<label for="files" style="margin-bottom:15px;">Add Project Files (50 Per Submission):</label>
			<input id="project-files" type="file" name="files[]" id="project_files" class="form-control" accept="image/*,application/pdf" multiple>
			<?php echo $errors->first('files', '<p class="help-block">:message</p>'); ?>

		</div>
	</div>
	                    <?php if(!empty($files) && $files != '[]' && $files && isset($files)): ?>
	                        <div class="col-12">
	                        <label class="">Remove Project Files:</label>
	                        </div>
	                     <?php endif; ?>
	                     
								<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div id="<?php echo e($file->id); ?>" class="col-lg-2 col-md-4 col-sm-4 m-t-20" style="margin-top:10px;">
										<div class="row">
										    
										    <?php
										    if($file->file_type == 'pdf'){
										        $src = '/public/storage/equipments/images/PDF-icon-small-231x300.png';
										    } else {
										        $src = $file->file_path;
										    }
										    ?>
										    <div style="width:100%;padding:10px;"><img width="100%" src=""></div>
										    
											<div style="width:100%;padding:10px;"><?php echo e($file->file_name); ?></div>
											<div style="text-align: center;width: 100%;margin-top: 10px;"><a style="color:#fff;" data-id="<?php echo e($file->id); ?>" class="btn btn-red delete-file" href="">Remove</a></div>
										
										</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php /**PATH /home/bidhub/bidhub/resources/views/equipment-for-sale/form.blade.php ENDPATH**/ ?>