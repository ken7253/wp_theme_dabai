<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns#">
    <?php wp_head(); ?>
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#F2C078">
    <meta name="msapplication-TileColor" content="#F2C078">
    <?php if (is_single()) : ?>
        <?php if ($post->post_excerpt) { ?>
            <meta name="description" content="<? echo $post->post_excerpt; ?>">
        <?php } else {
            $summary = strip_tags($post->post_content);
            $summary = str_replace("\n", "", $summary);
            $summary = mb_substr($summary, 0, 120) . "…"; ?>
            <meta name="description" content="<?php echo $summary; ?>">
        <?php } ?>
    <?php elseif (is_home() || is_front_page()) : ?>
        <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php else : ?>
        <meta name="description" content="<?php the_excerpt(); ?>">
    <?php endif; ?>
    <?php if (is_home()) {
        $canonical_url = get_bloginfo('url') . "/";
    } else if (is_category()) {
        $canonical_url = get_category_link(get_query_var('cat'));
    } else if (is_page() || is_single()) {
        $canonical_url = get_permalink();
    }
    if ($paged >= 2 || $page >= 2) {
        $canonical_url = $canonical_url . 'page/' . max($paged, $page) . '/';
    }
    ?>
    <?php if (!(is_404())) : ?>
        <link rel="canonical" href="<?php echo $canonical_url; ?>" />
    <?php endif; ?>
    <!-- ogp -->
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <?php if (is_single()) : ?>
        <?php if ($post->post_excerpt) { ?>
            <meta property="og:description" content="<? echo $post->post_excerpt; ?>">
        <?php } else {
            $summary = strip_tags($post->post_content);
            $summary = str_replace("\n", "", $summary);
            $summary = mb_substr($summary, 0, 120) . "…"; ?>
            <meta property="og:description" content="<?php echo $summary; ?>">
        <?php } ?>
    <?php elseif (is_home() || is_front_page()) : ?>
        <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <?php else : ?>
        <meta property="og:description" content="<?php the_excerpt(); ?>">
    <?php endif; ?>
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:url" content="<?php echo get_the_permalink(); ?>">
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/common/site-img.png">
    <meta property="og:site_title" content="<?php bloginfo('name'); ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@dabaiosamu">
    <!-- META END -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" rel="icon">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/common/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <!-- stylesheet -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/reboot.css" rel="stylesheet" type="text/css">
    <link href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animation.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/sp.css" rel="stylesheet" type="text/css">
    <!-- script -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <![endif]-->
    <!-- vue dev mode -->
    <script rel="preload" src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        (function(d) {
            var config = {
                    kitId: 'rrt1gej',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162454798-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-162454798-1');
    </script>
</head>

<body id="body">
    <header id="header">
        <div class="header-container">
            <a href="<?php echo esc_url(home_url('/')) ?>">
                <h1 class="common-ttl-h1">dabaiosamu</h1>
            </a>
            <div v-on:click="show = !show" id="menu-toggle" class="hum-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <transition name="fadeTop">
            <nav v-if="show" class="main-nav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')) ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')) ?>archive">BLOG</a></li>
                    <li><a href="https://www.twitch.tv/dabaiosamu" target="_blank" rel="noopener">TWITCH</a></li>
                    <li><a href="https://twitter.com/dabaiosamu" target="_blank" rel="noopener">TWITTER</a></li>
                    <li><a href="https://www.youtube.com/channel/UCNetO5A5Uc-Dk9wUnqm_PFw" target="_blank" rel="noopener">YOUTUBE</a></li>
                </ul>
            </nav>
        </transition>
    </header>