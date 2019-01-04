<?php 
	add_action( 'wp_ajax_ajax_archive_resources_operations', 'ajax_archive_resources_operations' );
	add_action( 'wp_ajax_nopriv_ajax_archive_resources_operations', 'ajax_archive_resources_operations' );

    function ajax_archive_resources_operations() {

        // Results query
        $args = array(
            'post_type' => $_POST['post_type'],
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        // Search
        if ( !empty( $_POST['search_term'] ) ) {
            $page_args['s'] = $_POST['search_term'];
            $args['s'] = $_POST['search_term'];
        }

        // Filters
        $filters = $_POST['filters'];
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
            }

            $page_args['tax_query'] = $tax_query;
            $args['tax_query'] = $tax_query;
        }

        $query = new WP_Query( $args );
        if ($query->have_posts()) {

            // Get all the taxonomies for this post type
            $taxonomies = get_object_taxonomies('resource', 'objects' );
            // print_r($taxonomies);
        
            foreach( $taxonomies as $taxonomy )  { 

                // print_r($taxonomy);
                // echo $taxonomy->name;
                
                $terms = get_terms( $taxonomy->name, array( 'hide_empty' => true ) ); 
                if ( $terms ) {
                    
                    foreach( $terms as $term ) {

                        // print_r($term);
                        // echo $term->slug;
                        // print_r($filters);

                        if ( isset($filters) && in_array($term->term_id, $filters['services']) ) {
                            ?>
                            <div class="resource-block">
                                <h4 class="pdf-heading"><?php echo $term->name; ?></h4>
                                <div class="pdf-item">
                                    <div class="row"> 
                                        <?php
                                            while ($query->have_posts()) { 
                                                $query->the_post();
                                                if ( $term->slug == get_the_terms( get_the_ID(), $taxonomy->name )[0]->slug ) {
                                                    ?>
                                                    <div class="col-md-12 resource-item">
                                                        <a href="<?php echo get_field('attach_file'); ?>" target="_blank">
                                                            <h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pdf-icon.png" class="img-responsive" alt=""> <span><?php the_title(); ?></span></h3>
                                                            <hr class="custom">
                                                        </a>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        
                        if ( empty($filters) ) {
                            ?>
                            <div class="resource-block">
                                <h4 class="pdf-heading"><?php echo $term->name; ?></h4>
                                <div class="pdf-item">
                                    <div class="row"> 
                                        <?php
                                            while ($query->have_posts()) { 
                                                $query->the_post();
                                                if ( $term->slug == get_the_terms( get_the_ID(), $taxonomy->name )[0]->slug ) {
                                                    ?>
                                                    <div class="col-md-12 resource-item">
                                                        <a href="<?php echo get_field('attach_file'); ?>" target="_blank">
                                                            <h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pdf-icon.png" class="img-responsive" alt=""> <span><?php the_title(); ?></span></h3>
                                                            <hr class="custom">
                                                        </a>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        
                    }
                    
                }
                
            }
            
        }
        else {
            ?>
            No results found
            <?php
        }
        wp_die();
    }
?>