function disable_rss_feeds() {
    if (is_feed()) {
        header('HTTP/1.1 404 Not Found');
        die;
    }
}

add_action('do_feed', 'disable_rss_feeds', 1);
add_action('do_feed_rdf', 'disable_rss_feeds', 1);
add_action('do_feed_rss', 'disable_rss_feeds', 1);
add_action('do_feed_rss2', 'disable_rss_feeds', 1);
add_action('do_feed_atom', 'disable_rss_feeds', 1);
add_action('do_feed_rss2_comments', 'disable_rss_feeds', 1);
add_action('do_feed_atom_comments', 'disable_rss_feeds', 1);
