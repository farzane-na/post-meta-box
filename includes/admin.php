<?php
add_action( "add_meta_boxes",function(){
    add_meta_box(
        "post-extra-meta-box",
        "post extra meta box",
        function(){
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