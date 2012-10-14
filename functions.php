<?php
/**
 * Get filename from attachment title.
 * 첨부파일 post_title을 기반으로 다운로드용 파일명을 만든다.
 * @param int $attchment_id
 */
function nlf_get_filename_for_download($attchment_id){
	$attachment = get_post($attchment_id);
	$file = get_attached_file($attchment_id);
	$extension = pathinfo($file, PATHINFO_EXTENSION);
	$post_title_extenstion = pathinfo($attachment->post_title, PATHINFO_EXTENSION);
	if($extension != $post_title_extenstion){
		$filename_for_download = sanitize_file_name($attachment->post_title) . '.' . $extension;
	}else{
		$filename_for_download = sanitize_file_name($attachment->post_title);
	}
	return $filename_for_download;
}