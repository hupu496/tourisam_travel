<?php 
	if(!defined('BASEPATH')) exit('No direct script access allowed');
	if(!function_exists('upload_file')) {
  		function upload_file($name,$upload_path,$allowed_types,$file_name,$max_size=30000000,$replace=false) {
    		$CI = get_instance();
			if(!$CI->load->is_loaded('upload')){
				$CI->load->library('upload');
			} 
			$dirs=explode('/',$upload_path);
			$upload_path='';
			foreach($dirs as $dir){
				if($dir==''){ break; }
				$upload_path.=$dir.'/';
				if(!is_dir($upload_path)){
					mkdir($upload_path);
				}
			}

			$file_name=strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $file_name)));
    		$config['upload_path']   = $upload_path; 
			$config['allowed_types'] = $allowed_types; 
			$config['file_name'] = $file_name;
			$config['max_size'] = $max_size;  

			if($replace===true){
				$config['overwrite'] = TRUE;  
			}

			$CI->upload->initialize($config);

			$return = array('status'=>false,'msg'=>'Image Not Uploaded !!');
			if(is_uploaded_file($_FILES[$name]['tmp_name'])){
				 
				if ( ! $CI->upload->do_upload($name)) {

					$info=get_file_info($_FILES[$name]['tmp_name']);

					$error = $CI->upload->display_errors();
					$file=false;
					////////////////////
					$return['status'] = false;
					$return['msg'] = $error;
				}
				else { 
					$filedata = $CI->upload->data();
					$file=$filedata['raw_name'].$filedata['file_ext'];
					$src=$upload_path."$file";
					$result=substr($src,1);
					/////////////////////
					$return['status'] = true;
					$return['path'] = $result;
					
				}
			}
			return $return;
		}  
	}


	if(!function_exists('upload_files')) {
  		function upload_files($dir,$inputname,$allext,$pass_width,$pass_height,$pass_size,$newname){
  			$files['name']=$_FILES['photo']['name'];
			$files['type']=$_FILES['photo']['type'];
			$files['tmp_name']=$_FILES['photo']['tmp_name'];
			$files['error']=$_FILES['photo']['error'];
			$files['size']=$_FILES['photo']['size'];
			$file_count = count($files['name']);

			for ($j=0; $j < $file_count; $j++) { 
				$file = array('name'=>$files['name'][$j],'type'=>$files['type'][$j],'tmp_name'=>$files['tmp_name'][$j],'error'=>$files['error'][$j],'size'=>$files['size'][$j]);
				$final_files[]['photo']=$file;
			}
		$count = count($final_files);
		for ($i=0; $i < $count; $i++) { 
		if(file_exists($final_files[$i]["$inputname"]["tmp_name"])){
			$file_extension = strtolower( pathinfo($final_files[$i]["$inputname"]["name"], PATHINFO_EXTENSION));
			$error="";
		if(in_array($file_extension, $allext)){
			list($width, $height, $type, $attr) = getimagesize($final_files[$i]["$inputname"]["tmp_name"]);
			$image_weight = $final_files[$i]["$inputname"]["size"];
			if($width <= "$pass_width" && $height <= "$pass_height" && $image_weight <= "$pass_size"){
				$tmp = $final_files[$i]["$inputname"]["tmp_name"];
				$extension[1]="jpg";
				$name=$newname.".".$extension[1];
				if(move_uploaded_file($tmp,"$dir".$name)){
					return true;
						}
					}
					else{
						$error .="Please upload photo size of $pass_width X $pass_height !!!";
					}
				}
				else{
					$error .="Please upload an image !!!";
				}
			}
			else{
				// $error.="Please Select an image !!!";
			}
		}
			
			return $error;
		}
	}
?>
