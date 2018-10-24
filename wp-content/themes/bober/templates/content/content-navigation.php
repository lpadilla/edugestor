<?php if (paginate_links() ) :  ?>

    <div class="pagination-btns">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <nav class="navigation pagination">
                        <div class="nav-links">
                            <?php echo paginate_links(); ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>