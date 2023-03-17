<?php
session_start();
include_once '../../model/BlogDetailsModel.php';
include_once '../../model/CommentDetailsModel.php';
include_once '../../model/DbConnection.php';
$created_by=(isset($_SESSION['adm_uid']))?$_SESSION['adm_uid']:"N/A";
$creation_ip=$_SERVER['REMOTE_ADDR'];
$response=array();
if (isset($_POST['action'])) {
	switch ($_POST['action']) {
        /*Save Blog details*/
		case 'saveblogDetailsAction':
			if (isset($_POST['blog_title']) && $_POST['blog_title']!="" && isset($_POST['blog_description']) && $_POST['blog_description']!="" && isset($_POST['file_type']) && $_POST['file_type']!="" ) {
				$blog_title=addslashes($_POST['blog_title']);
				$blog_description=addslashes($_POST['blog_description']);
				$file_type=$_POST['file_type'];
				$checkIfExist=$blogObj->checkBlogNameAlreadyExist($blog_title);
				if ($checkIfExist==false) {
					if($file_type == "image"){
						$image_file=$_FILES['image_file']['name'];
						if($image_file!=""){
							$extension  = pathinfo($_FILES["image_file"]["name"], PATHINFO_EXTENSION ); 
							$ext=array("jpeg","png","jpg","gif");
							if(in_array($extension, $ext)){
								if($_FILES["image_file"]["size"]>5242880){
									$response['statusCode']=201;
									$response['message']="The File size is greater than 5 mb. Please select less than 5 mb file.";
								}else{
									$basename = basename($_FILES["image_file"]["name"]);
									$source     = $_FILES["image_file"]["tmp_name"];
									$destination = "../dist/blog_img/{$basename}";
									$imgpath ="dist/blog_img/{$basename}";
									if(!file_exists($destination)){
										if (move_uploaded_file( $source, $destination )) {
											$insertStatus=$blogObj->saveBlogDetails('blog_title,blog_description,file_type,image_file,image_file_path,blog_status,created_by,creation_ip',"'$blog_title','$blog_description','image','$basename','$imgpath','Active','$created_by','$creation_ip'");
											if ($insertStatus==true) {
												
												$response['statusCode']=200;
												$response['message']="Blog Information Saved successfully.";
											}else{
												$response['statusCode']=201;
												$response['message']="Something went wrong to Save blog info. Please try after sometime.";
											}
										}else{
											$response['statusCode']=201;
											$response['message']="Error to uploading image.";
										}
									}else{
										$response['statusCode']=201;
										$response['message']="This File already exist.";
									}
									
								}
							}else{
								$response['statusCode']=201;
								$response['message']="Invalid file formate. Please select gif,png,jpg Or jpeg.";
							}
							
						}else{
							$response['statusCode']=201;
							$response['message']="Please Select image";
						}
					}elseif($file_type == "video"){
						$video_file=$_FILES['video_file']['name'];
						if($video_file!=""){
							$extension  = pathinfo($_FILES["video_file"]["name"], PATHINFO_EXTENSION ); 
							$ext=array("mp4","ogg","3gp");
							if(in_array($extension, $ext)){
								$basename = basename($_FILES["video_file"]["name"]);
								$source     = $_FILES["video_file"]["tmp_name"];
								$destination = "../dist/blog_video/{$basename}";
								$videopath ="dist/blog_video/{$basename}";
								if(!file_exists($destination)){
									if (move_uploaded_file( $source, $destination )) {
										$insertStatus=$blogObj->saveBlogDetails('blog_title,blog_description,file_type,video_file,video_file_path,blog_status,created_by,creation_ip',"'$blog_title','$blog_description','video','$basename','$videopath','Active','$created_by','$creation_ip'");
										if ($insertStatus==true) {
											$response['statusCode']=200;
											$response['message']="Blog Information Saved successfully.";
										}else{
											$response['statusCode']=201;
											$response['message']="Something went wrong to Save blog info. Please try after sometime.";
										}
									}else{
										$response['statusCode']=201;
										$response['message']="Error to uploading Video.";
									}
								}else{
									$response['statusCode']=201;
									$response['message']="This File already exist.";
								}
							}else{
								$response['statusCode']=201;
								$response['message']="Invalid file formate. Please select mp4,ogg Or 3gp.";
							}
						}else{
							$response['statusCode']=201;
							$response['message']="Please Select Video";
						}
					}else{
						$response['statusCode']=201;
						$response['message']="Please select Image/Video";
					}
				}else{
					$response['statusCode']=201;
					$response['message']="This Blog details already exist";
				}
					
			}else{
				$response['statusCode']=201;
				$response['message']="Please Fill all the data.";
			}
			echo json_encode($response);
		break;
		case 'loadDataForUpdate':
			if (isset($_POST['bid']) && $_POST['bid']!=""){
				$id=$_POST['bid'];
				$BlogDetails=$blogObj->getBlogDetailsAsPerId($id);
				if($BlogDetails == false){

				}else{
				?>
					<form id="addUpdateBlogFrm" name="addUpdateBlogFrm" method="post" enctype="multipart/form-data">
						<div class="card-body">
							<input type="hidden" name="oldfiletype" id="oldfiletype" value="<?=($BlogDetails[0]['file_type']);?>">
							<input type="hidden" name="blog_id" id="blog_id" value="<?=$BlogDetails[0]['blog_id'];?>">
							<input type="hidden" name="oldfile" id="oldfile"
								value="<?=($BlogDetails[0]['file_type']=="image")?$BlogDetails[0]['image_file']:$BlogDetails[0]['video_file'];?>">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="blog_title">Title</label>
										<input type="text" class="form-control" name="blog_title" id="blog_title"
											value="<?=$BlogDetails[0]['blog_title']?>" placeholder="Enter blog title">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>&emsp;Select For Upload:</label>&emsp;
										<input type="radio" id="image" name="file_type" value="image">
										<label for="image">Image</label>&emsp;
										<input type="radio" id="video" name="file_type" value="video">
										<label for="video">Video</label><br>
										<div class="input-group" id="input_image">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="image_file" id="image_file">
												<label class="custom-file-label" for="image_file">Choose
													Image</label>
											</div>
											<div class="input-group-append">
												<span class="input-group-text">Upload</span>
											</div>
										</div>
										<div class="input-group d-none" id="input_video">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="video_file" id="video_file">
												<label class="custom-file-label" for="video_file">Choose
													Video</label>
											</div>
											<div class="input-group-append">
												<span class="input-group-text">Upload</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="exampleInputEmail1">Description</label>
										<textarea rows="5" name="blog_description" class="summernote" id="blog_description">
											<?=$BlogDetails[0]['blog_description']?>
										</textarea>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" id="addUpdateBlogBtn" onclick="UpdateBlogDetailAction()" name="addUpdateBlogBtn"
								class="btn btn-primary">Submit</button>
						</div>
					</form>
					<script>
						$(function () {
							$('.summernote').summernote();
						})
						$('input[type=radio][name=file_type]').change(function () {
							if (this.value == 'image') {
								// alert("image");
								$("#input_image").removeClass("d-none");
								$("#input_video").addClass("d-none");
							} else if (this.value == 'video') {
								// alert("video");
								$("#input_video").removeClass("d-none");
								$("#input_image").addClass("d-none");
							}
						});
					</script>
				<?php
					}
				}
		break;
		case 'updateblogDetailsAction':
			if(isset($_POST['blog_id']) && $_POST['blog_id']!=""){
				if (isset($_POST['blog_title']) && $_POST['blog_title']!="" && isset($_POST['blog_description']) && $_POST['blog_description']!="") {
					$blog_id=(int)$_POST['blog_id'];
					$blog_title=addslashes($_POST['blog_title']);
					$blog_description=addslashes($_POST['blog_description']);
					//$file_type=$_POST['file_type'];
					if(isset($_POST['file_type'])){
						$file_type=$_POST['file_type'];
						$oldfiletype=$_POST['oldfiletype'];
						$oldfile=$_POST['oldfile'];
						if($file_type == "image"){
							$image_file=$_FILES['image_file']['name'];
							if($image_file!=""){
								$extension  = pathinfo($_FILES["image_file"]["name"], PATHINFO_EXTENSION ); 
								$ext=array("jpeg","png","jpg","gif");
								if(in_array($extension, $ext)){
									if($_FILES["image_file"]["size"]>5242880){
										$response['statusCode']=201;
										$response['message']="The File size is greater than 5 mb. Please select less than 5 mb file.";
									}else{
										$basename = basename($_FILES["image_file"]["name"]);
										$source     = $_FILES["image_file"]["tmp_name"];
										$destination = "../dist/blog_img/{$basename}";
										$imgpath ="dist/blog_img/{$basename}";
										if(!file_exists($destination)){
											if($oldfiletype=='image'){
												$delete=(file_exists("../dist/blog_img/".$oldfile))?unlink("../dist/blog_img/".$oldfile):"";													
											}elseif($oldfiletype=='video'){
												$delete=(file_exists("../dist/blog_video/".$oldfile))?unlink("../dist/blog_video/".$oldfile):"";
													
											}
											if (move_uploaded_file( $source, $destination )) {
												$updatestatus=$blogObj->changeBlogDetailsAsPerParameter($blog_id,"blog_title='$blog_title',blog_description='$blog_description',file_type='image',image_file='$basename',image_file_path='$imgpath',modified_by='$created_by',modified_ip='$creation_ip'","id");
												if ($updatestatus==true) {
												
													$response['statusCode']=200;
													$response['message']="Blog Information updated successfully.";
												}else{
													$response['statusCode']=201;
													$response['message']="Something went wrong to update blog info. Please try after sometime.";
												}
											}else{
												$response['statusCode']=201;
												$response['message']="Error to update image.";
											}
										}else{
											$response['statusCode']=201;
											$response['message']="This File already exist.";
										}
									}
								}else{
									$response['statusCode']=201;
									$response['message']="Invalid file formate. Please select gif,png,jpg Or jpeg.";
								}
							}else{
								$response['statusCode']=201;
								$response['message']="Please Select image";
							}
						
					 	}elseif($file_type == "video"){
							$video_file=$_FILES['video_file']['name'];
							if($video_file!=""){
								$extension  = pathinfo($_FILES["video_file"]["name"], PATHINFO_EXTENSION ); 
								$ext=array("mp4","ogg","3gp");
								if(in_array($extension, $ext)){
									if(in_array($extension, $ext)){
										$basename = basename($_FILES["video_file"]["name"]);
										$source     = $_FILES["video_file"]["tmp_name"];
										$destination = "../dist/blog_video/{$basename}";
										$videopath ="dist/blog_video/{$basename}";
										if(!file_exists($destination)){
											if($oldfiletype=='image'){
												$delete=(file_exists("../dist/blog_img/".$oldfile))?unlink("../dist/blog_img/".$oldfile):"";													
											}elseif($oldfiletype=='video'){
												$delete=(file_exists("../dist/blog_video/".$oldfile))?unlink("../dist/blog_video/".$oldfile):"";
													
											}
											if (move_uploaded_file( $source, $destination )) {
												$updatestatus=$blogObj->changeBlogDetailsAsPerParameter($blog_id,"blog_title='$blog_title',blog_description='$blog_description',file_type='video',video_file='$basename',video_file_path='$videopath',modified_by='$created_by',modified_ip='$creation_ip'","id");
												if ($updatestatus==true) {
												
													$response['statusCode']=200;
													$response['message']="Blog Information updated successfully.";
												}else{
													$response['statusCode']=201;
													$response['message']="Something went wrong to update blog info. Please try after sometime.";
												}
											}else{
												$response['statusCode']=201;
												$response['message']="Error to update Video.";
											}
										}else{
											$response['statusCode']=201;
											$response['message']="This File already exist.";
										}
									}
								}else{
									$response['statusCode']=201;
									$response['message']="Invalid file formate. Please select mp4,ogg Or 3gp.";
								}
							}else{
								$response['statusCode']=201;
								$response['message']="Please Select video";
							}
						}else{
							$updatestatus=$blogObj->changeBlogDetailsAsPerParameter($blog_id,"blog_title='$blog_title',blog_description='$blog_description',modified_by='$created_by',modified_ip='$creation_ip'","id");
							if ($updatestatus==true) {
												
								$response['statusCode']=200;
								$response['message']="Blog Information updated successfully.";
							}else{
								$response['statusCode']=201;
								$response['message']="Something went wrong to update blog info. Please try after sometime.";
							}
						}
					}else{
						$updatestatus=$blogObj->changeBlogDetailsAsPerParameter($blog_id,"blog_title='$blog_title',blog_description='$blog_description',modified_by='$created_by',modified_ip='$creation_ip'","id");
							if ($updatestatus==true) {
												
								$response['statusCode']=200;
								$response['message']="Blog Information updated successfully.";
							}else{
								$response['statusCode']=201;
								$response['message']="Something went wrong to update blog info. Please try after sometime.";
							}
					}
				}	

			}else{
				$response['statusCode']=201;
				$response['message']="Please Fill all the data.";
			}
			echo json_encode($response);
		break;
		/* Delete Blog details */
		case 'deleteBlogDetails':
			if (isset($_POST['id']) && $_POST['id']!="") {
				$id=$_POST['id'];
				$blog_details=$blogObj->getBlogDetailsAsPerId($id);
				if($blog_details[0]['file_type']=="image"){
					// echo $blog_details[0]['image_file'];
					$image_file=$blog_details[0]['image_file'];
					if (file_exists("../dist/blog_img/".basename($image_file))) {
						unlink("../dist/blog_img/".$image_file);
					}
				}elseif($blog_details[0]['file_type']=="video"){
					// echo $blog_details[0]['video_file'];
					$video_file=$blog_details[0]['video_file'];
					if (file_exists("../dist/blog_video/".basename($video_file))) {
								unlink("../dist/blog_video/".$video_file);
					}
				}
			
				$status=$blogObj->deleteBlogDetails($id);
				if ($status==true) {
					$response['statusCode']=200;
					$response['message']="Selected Blog Details deleted successfully.";
				}else{
					$response['statusCode']=201;
					$response['message']="Something went wrong to delete Blog details.";
				}			
			}
			echo json_encode($response);
		break;
		/* view comment details */
		case 'ViewommentData':
			if (isset($_POST['cid']) && $_POST['cid']!=""){
				$id=$_POST['cid'];
				$CommentDetails=$commentObj->getAllCommentDetailsById($id);
				if($CommentDetails == false){

				}else{					
				?>
					<div class="card-body">
						<table id="example2" class="table table-bordered table-hover table-responsive">
							<thead>
								<tr>
									<th>Sr.No.</th>
									<th>Name</th>
									<th>email</th>
									<th>Message</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$i=1;
									foreach($CommentDetails as $key => $value){
										?>
								
								<tr>
									<td><?=$i;?>.</td>
									<td><?=$value['comment_by'];?></td>
									<td><?=$value['email'];?></td>
									<td><?=$value['comment_message'];?></td>
									<td>
                                                    <?php
                                                    if($value['comment_status']=="Active"){
                                                    ?>
                                                    <div class="form-group">
                                                        <div
                                                            class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger">
                                                            <input type="checkbox" data-id="<?=$value['comment_id'];?>"
                                                                data-status="InActive"
                                                                onclick="changeStatus(this); return false;"
                                                                class="custom-control-input" id="customSwitch<?=$key;?>"
                                                                checked>
                                                            <label class="custom-control-label"
                                                                style="cursor:pointer !important;font-size:11px;"
                                                                title="De-Activate This Course"
                                                                for="customSwitch<?=$key;?>"></label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <div class="form-group">
                                                        <div
                                                            class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger">
                                                            <input type="checkbox" data-id="<?=$value['comment_id'];?>"
                                                                data-status="Active"
                                                                onclick="changeStatus(this);return false;"
                                                                class="custom-control-input"
                                                                id="customSwitch<?=$key;?>">
                                                            <label class="custom-control-label"
                                                                style="cursor:pointer !important;"
                                                                title="Activate This Course"
                                                                for="customSwitch<?=$key;?>"></label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
									<td>
										<button class="btn btn-xs btn-danger mt-1" data-Id="<?=$value['comment_id'];?>"
											title="Delete Comment Details" onclick="deleteCommentDetails(this);"><i
												class="fas fa-trash-alt"></i></button>
									</td>
								</tr>
								<?php
								
									$i++;
									}
								?>
							</tbody>
						</table>
					</div>
				<?php
					}
					}
		break;
    }
}
?>