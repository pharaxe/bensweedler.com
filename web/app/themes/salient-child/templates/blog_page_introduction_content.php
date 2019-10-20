<?php function blog_page_introduction_content() { ob_start(); ?>

<div class="row">
   <h1 class="blog-header">Blog</h1>
   <a class="rss-feed-call-to-action" href="https://www.bensweedler.com/blog/feed/">
      <img src="https://dev.bensweedler.com/app/uploads/2019/10/Generic_Feed-icon-1.svg" />
   </a>
   <p class="blog-description">
      This blog is writings about software engineering, communication skills, my personal journal.
   </p>
</div>

<?php
  echo ob_get_clean();
} ?>
