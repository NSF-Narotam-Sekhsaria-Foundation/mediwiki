<?php 
	add_action( 'wp_ajax_ajax_archive_operations', 'ajax_archive_operations' );
	add_action( 'wp_ajax_nopriv_ajax_archive_operations', 'ajax_archive_operations' );

    function ajax_archive_operations() {

        // Search hack: instead of 's' parameter we have added '_meta_or_title' parameter
        add_action( 'pre_get_posts', function( $q )
        {
            if( $title = $q->get( '_meta_or_title' ) )
            {
                add_filter( 'get_meta_sql', function( $sql ) use ( $title )
                {
                    global $wpdb;

                    // Only run once:
                    static $nr = 0; 
                    if( 0 != $nr++ ) return $sql;

                    // Modified WHERE
                    $sql['where'] = sprintf(
                        " AND ( %s OR %s ) ",
                        $wpdb->prepare( "{$wpdb->posts}.post_title like '%%%s%%'", $title),
                        mb_substr( $sql['where'], 5, mb_strlen( $sql['where'] ) )
                    );

                    return $sql;
                });
            } 
        });

        $post_type = sanitize_text_field( $_POST['post_type'] );
        $offset = (int) sanitize_text_field( $_POST['offset'] );
        $posts_per_page = get_field( 'ajax_posts_per_page', 'option' ) ? get_field( 'ajax_posts_per_page', 'option' ) : 10;
        $search_term = sanitize_text_field( $_POST['search_term'] );
        $filters = $_POST['filters'];

        $display_filter_arr = array();

        // Pagination query
        $page_args = array(
            'post_type' => $post_type,
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        // Results query
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => $posts_per_page,
            'order' => 'ASC'
        );

        // Pagination paremeter
        if ( !empty( $offset ) ) {
            $args['offset'] = $offset;
        }

        // Search
        if ( !empty( $search_term ) ) {
            $page_args['_meta_or_title'] = $search_term;
            $args['_meta_or_title'] = $search_term;
            $meta_query = array(
                'relation' => 'OR'
            );

            $meta_query[] = array(
                'key'     => 'address',
                'value'   => $search_term,                    
                'compare' => 'LIKE',
            );

            $meta_query[] = array(
                'key'     => 'editor',
                'value'   => $search_term,                    
                'compare' => 'LIKE',
            );

            $meta_query[] = array(
                'key'     => 'phone_numbers_one',
                'value'   => $search_term,                    
                'compare' => 'LIKE',
            );

            $meta_query[] = array(
                'key'     => 'phone_numbers_two',
                'value'   => $search_term,                    
                'compare' => 'LIKE',
            );

            $meta_query[] = array(
                'key'     => 'phone_numbers_three',
                'value'   => $search_term,                    
                'compare' => 'LIKE',
            );

            $page_args['meta_query'] = $meta_query;
            $args['meta_query'] = $meta_query;

            $display_filter_arr['Search Keyword'][] = $search_term;
        }

        // Filters
        parse_str($filters, $filters);

        $tax_query = array();

        if ( !empty( $filters ) ) {

            $tax_query['relation'] = 'OR';
            $tax = array();


            foreach ($filters as $key => $value) {
                $tax['taxonomy'] = $key;
                $tax['field'] = 'term_id';
                $tax['terms'] = $value;
                array_push($tax_query, $tax);


                $filter_name = ucwords(str_replace('_',' ', $key));
                foreach($value as $single_val){
                    $term_arr = get_term_by('id', $single_val, $key);
                    $display_filter_arr[$filter_name][] = $term_arr->name;
                }
            }

            $page_args['tax_query'] = $tax_query;
            $args['tax_query'] = $tax_query;
        }


        //echo '<pre>';
       // print_r($display_filter_arr);
        //echo '</pre>';
        $display_str = '';
        $page_query = new WP_Query( $page_args );
        $query = new WP_Query( $args );
        $count = $page_query->post_count;

        if(!empty($display_filter_arr)){
            $display_str = '<div class="filter_block">Result For ';
            foreach ($display_filter_arr as $display_filter_key => $display_filter_value){
                foreach ($display_filter_value as $single_display_value){
                    $all_value_arr[$display_filter_key][] = '"'.$single_display_value.'"';
                }
                if(!empty($all_value_arr[$display_filter_key])){
                    $single_string = implode(',',array_flatten($all_value_arr[$display_filter_key]));
                }
                if(!empty($display_filter_key) && !empty($all_value_arr[$display_filter_key])){
                    $display_str .= '<span class=filter_heading>'.$display_filter_key.'</span> in '.$single_string.' , ';
                }
            }
            if(!empty($count)){
                $display_str .= ' Showing '.$count.' results';
            }
            $display_str .= '</div><hr>';
            echo $display_str;
        }else{
            $display_str = '<div class="filter_block">Result For "All" , Showing '.$count.' results</div><hr>';
            echo $display_str;
        }


        if ($query->have_posts()) {
            while ($query->have_posts()) { 
                $query->the_post();
                ?>

                <div class="item">
                    <div class="flip">
                        <h3>
                            <a href="<?php the_permalink(); ?> " class="title-link" id="title-link_<?php echo get_the_ID(); ?>"><?php the_title(); ?></a>
                            <div class="clearfix"></div>
                            <div class="pull-right icon-list">
                                <span>
                                    <a id="copy-title-link" href="javascript:void(0);" data-href="<?php the_permalink(); ?>" onclick="copyToClipboard(this)">Copy Link</a>
                                </span>
                                <span>
                                    <a id="whatsAppIcon" href="https://wa.me/?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                </span>
                                <span>
                                    <a id="printIcon" href="javascript:vloid(0)" onclick="window.print();return false;"><i class="fa fa-print"></i></a>
                                </span>
                            </div> 
                        </h3>                              
                        <a href="javascript:void(0)" class="expand_more">Read More</a>
                    </div>
                    <div class="panel">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 mobile-left">
                                <h3><?php the_field('address'); ?></h3>
                                <div class="phone-section-in-mobile">                                
                                    <ul class="phone-list padding-left-0">
                                        <?php
                                            if( have_rows('phone_numbers') ) {
                                                while ( have_rows('phone_numbers') ) {
                                                    the_row(); 

                                                    $phoneNumber = get_sub_field('phone_number');

                                                    if ($phoneNumber!="") {
                                                        ?>
                                                        <li><i class="fa fa-phone padding-left-0"></i><?php echo $phoneNumber; ?></li>
                                                        <div class="clearfix"></div>
                                                        <?php 
                                                    }                                            
                                                }
                                            }                                    

                                            if (!$phoneNumber) { 
                                                ?>
                                                <p class="single-card-listing-paragraph"><?php echo "Not available"; ?></p>
                                                <?php    
                                            } 
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 mobile-right">
                                <?php the_field('google_map'); ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row custom_font_size">
                            <div class="col-md-12 theme-content">
                                <div class="custom_width">
                                    <?php 
                                        $conditionalField = get_field('editor'); 
                                        if ($conditionalField!="") {
                                            the_field('editor');
                                            ?>
                                            <hr class="notForMobile">
                                            <?php 
                                        }
                                    ?>
                                </div>
                            </div>                            
                        </div>
                        <hr class="for-mobile">
                        <div class="clearfix"></div> 
                        <div class="row custom_font_size">
                            <div class="col-md-12 cards">
                                <?php 
                                    $current_post_type = get_post_type( get_the_ID() );

                                    // Get all the taxonomies for this post type
                                    $taxonomies = get_object_taxonomies($current_post_type, 'objects' );
                                    // print_r($taxonomies);
                                ?>
                                
                                <?php 
                                    foreach( $taxonomies as $taxonomy )  { 
                                        ?>
                                        <?php 
                                            $terms = get_the_terms( get_the_ID(), $taxonomy->name ); 
                                            if ( $terms ) {
                                                ?>
                                                <div class="col-sm-4 mb-20 card-align">
                                                    <h4 class="heading-uppercase">
                                                        <?php 
                                                            echo '' . $taxonomy->labels->name . ''; 
                                                        ?>                                      
                                                    </h4>
                                                    <ul class="card">
                                                        <?php
                                                            foreach( $terms as $term ){
                                                                ?>  
                                                                <li class="right_icon"><?php echo $term->name; ?></li>
                                                                <?php 
                                                            }
                                                        ?>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <?php
                                            }
                                        ?>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
            }

            $count = $page_query->post_count;
            if ( $count > $offset + $posts_per_page ) {
                ?>
                <div class="ajax-pagination text-center">
                    <a href="javascript:void(0)" class="load-more" data-post="<?php echo $offset + $posts_per_page; ?>">Load More<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/loader.gif" style="display: none; width:20px;margin-left: 5px;" class="loader"></a>
                </div>
                <?php
            }
            wp_reset_postdata();
            }
        else {
            ?>
            No results found
            <?php
        }
        wp_die();
    }
?>