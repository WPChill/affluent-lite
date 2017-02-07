<?php


//Create the metadata fields for the metadata form.
if(!function_exists('cpotheme_taxonomy_meta_fields')){
	function cpotheme_taxonomy_meta_fields($title, $post, $metadata){
		wp_enqueue_style('cpotheme-admin');
		if($metadata == null || sizeof($metadata) == 0) return;
		$post_id = isset($_GET['tag_ID']) ? $_GET['tag_ID'] : false;
		$output = '';
		$field_prefix = 'cpotheme_taxonomy_meta_';
		
		$output .= '<h3>'.$title.'</h3>';
		$output .= '<table class="form-table">';
		$output .= '<tbody>';
		
		//Loop through all the data taxonomies and create the field associated to them.
		foreach($metadata as $current_meta){
			$field_name = $current_meta['name'];
			$field_title = $current_meta['label'];
			$field_desc = $current_meta['desc'];
			$field_type = $current_meta['type'];
			$field_value = get_term_meta($post_id, $field_name, true);

			$output .= '<tr>';
			$output .= '<th scope="row"><label for="'.$field_name.'" class="field_title">'.$field_title.'</label></th>';
			$output .= '<td>';
						
			// Print metaboxes here. Develop different cases for each type of field.
			if($field_type == 'text')
				$output .= cpotheme_form_text($field_name, $field_value, $current_meta);
			
			elseif($field_type == 'select')
				$output .= cpotheme_form_select($field_name, $field_value, $current_meta['option'], $current_meta);
			
			elseif($field_type == 'yesno')
				$output .= cpotheme_form_yesno($field_name, $field_value, $current_meta);
			
			elseif($field_type == 'imagelist')
				$output .= cpotheme_form_imagelist($field_name, $field_value, $current_meta['option'], $current_meta);

			elseif($field_type == 'iconlist')
				$output .= cpotheme_form_iconlist($field_name, $field_value, $current_meta);

				
			//Separators
			if($field_type != 'separator' && $field_type != 'divider'){
				$output .= '<br><span class="description">'.$field_desc.'</span>';
				$output .= '</td>';
				$output .= '</tr>';
			}
		}
		
		$output .= '</tbody>';
		$output .= '</table>';
		
		return $output;
	}
}

// Create the form to insert the metadata in the category list.
if(!function_exists('cpotheme_taxonomy_meta_form')){
	function cpotheme_taxonomy_meta_form($title, $post, $metadata = null){
		$output = '';
				
		//Call the field creator with the needed data.
		$output .= cpotheme_taxonomy_meta_fields($title, $post, $metadata);
		echo $output;
		
	}
}


// Check and save metadata to a given tag_ID and taxonomy
if(!function_exists('cpotheme_taxonomy_meta_save')){
	function cpotheme_taxonomy_meta_save($option_fields){
		$tax_meta = get_option('cpotheme_taxonomy');
		$post_id = $_POST['tag_ID'];		
		
		//Loop through all fields
		foreach($option_fields as $current_field){
			$field_name = $current_field['name'];
			if(isset($_POST[$field_name])){
				$field_value = trim($_POST[$field_name]);
				
				//Add metadata
				if($field_value != ''){
					update_term_meta($post_id, $field_name, sanitize_text_field($field_value));
				}else{ 
					//TODO: Delete metadata if it matches default value on option array
				}
			}
		}
	}
}


// Retrieve metadata field $key from the associated $tag_ID
if(!function_exists('cpotheme_tax_meta')){
	function cpotheme_tax_meta($id, $key){
		return get_term_meta($id, $key, true);
	}
}