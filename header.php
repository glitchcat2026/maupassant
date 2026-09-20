<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
	<meta name="viewport" content="width=device-width,user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <script type="text/javascript" src="<?php $this->options->themeUrl('javascript/darkmode.js?v=4'); ?>"></script> 
    <link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css?v=20260920'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/darkmode.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource-variable/noto-serif-sc@5.3.0/wght.css">
    <link rel="icon" type="image/png" href="<?php $this->options->themeUrl('favicon.png'); ?>" />
    <script>
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark-mode');
        }
    </script>
    <!-- begin latex support -->
    <script async type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/mathjax@4/tex-mml-chtml.js">
    </script>
    <script>
    window.MathJax = {
    tex: {
        inlineMath: [['$', '$'], ['\\(', '\\)']],
        displayMath: [['$$', '$$'], ['\\[', '\\]']]
    }
    };
    </script>
    <!-- end latex support -->
    <?php $this->header("generator=&template=&"); ?>
</head>
<body>

<header id="header" class="clearfix">
    <div class="container">
        <div class="col-group">
            <div class="site-name">
                <?php if ($this->is('index')): ?>
                    <h1>
                        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                            <?php $this->options->title() ?>
                        </a>
                    </h1>
                <?php else:?>
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                        <?php $this->options->title() ?>
                    </a>
                <?php endif; ?>
        	    <p class="description"><?php $this->options->description() ?></p>
            </div>
            <div>
                <nav id="nav-menu" class="clearfix">
                    <a class="<?php if($this->is('index')): ?>current<?php endif; ?><?php if($this->is('post')): ?>current<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('博客'); ?></a>
		            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		                <?php while($pages->next()): ?>
		                <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                        <?php endwhile; ?>

                    <span class="nav-dropdown">
                        <a href="#" class="nav-dropdown-toggle">项目</a>
                        <span class="nav-dropdown-menu">
                            <a href="https://openlist.glitchcat.top">网盘</a>
                        </span>
                    </span>

                   <a href="javascript:void(0);" id="dark-mode">夜间模式</a>
		        </nav>
            </div>
        </div>
    </div>
</header>
<div id="body">
    <div class="container">
        <div class="col-group">
