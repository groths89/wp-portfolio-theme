<?php 
$hero = get_field('hero');
$file = $hero['hero_file'];
if($hero):
?>

<header class="section sec1 header active" id="home">
    <div class="header-content">
        <div class="left-header">
            <div class="h-shape"></div>
            <div class="image">
                <img src="<?php echo esc_url( $hero['hero_img']['url'] ); ?>" alt="<?php echo esc_attr( $hero['hero_img']['alt'] ); ?>" />
            </div>
        </div>
        <div class="right-header">
            <div class="h-shape"></div>
            <div class="text">

                <h1>
                <?php 
                echo $hero['hero_h1'];
                ?>
                </h1>
                <p>
                <?php 
                echo $hero['hero_paragraph'];
                ?>
                </p>
                <div class="btns">

                <?php
                if( $file ): ?>
                    <a href="<?php echo $file['url']; ?>" class="btn">
                        <span class="btn-text">Download <?php echo $file['title']; ?></span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
<?php endif; ?>