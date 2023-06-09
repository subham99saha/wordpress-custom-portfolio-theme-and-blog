<aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0"><?php the_author_meta( 'description' ); ?></p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <?php wp_get_archives( 'type=monthly' ); ?>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="<?php echo get_option('facebook'); ?>">Facebook</a></li>
              <li><a href="<?php echo get_option('instagram'); ?>">Instagram</a></li>
              <li><a href="<?php echo get_option('linkedin'); ?>">LinkedIn</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->