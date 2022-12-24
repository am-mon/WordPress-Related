/*Article Archive Page Post Limit to show only 3 Posts*/
function custom_type_archive_display($query) {
    if (is_post_type_archive('article')) {
         $query->set('posts_per_page',3);
         $query->set('orderby', 'date' );
         $query->set('order', 'DESC' );
        return;
    }     
}
add_action('pre_get_posts', 'custom_type_archive_display');
