<?php
add_action( "add_meta_boxes",function(){
    add_meta_box(
        "post-extra-meta-box",
        "post extra meta box",
        function($post){
            $post_extra_meta_box_title=get_post_meta( $post->ID, "post_extra_meta_box_title", true );
            $post_extra_meta_box_description=get_post_meta( $post->ID, "post_extra_meta_box_description", true );
            include PLUGIN_DIR_PATH."admin/meta-box-admin.php";
        },
        "post",
        "normal",
        "high"
    );
} );

add_action("admin_enqueue_scripts",function(){
    wp_enqueue_style( "post-meta-style", PLUGIN_DIR_URL."admin/asset/style.css", [], META_PLUGIN_VERSION, false );
});


add_action("save_post",function($post_id,$post,$update){
    if($_POST["post-extra-meta-box-title"]!= "" && $_POST["post-extra-meta-box-description"]!= "" && $update===true){
        update_post_meta($post_id, "post_extra_meta_box_title",$_POST["post-extra-meta-box-title"] );
        update_post_meta($post_id, "post_extra_meta_box_description",$_POST["post-extra-meta-box-description"] );
    }elseif($_POST["post-extra-meta-box-title"]!= "" && $_POST["post-extra-meta-box-description"]!= "" && $update!=true){
        add_post_meta( $post_id, "post_extra_meta_box_title",$_POST["post-extra-meta-box-title"] );
        add_post_meta( $post_id, "post_extra_meta_box_description",$_POST["post-extra-meta-box-description"] );
    };
},10,3);




