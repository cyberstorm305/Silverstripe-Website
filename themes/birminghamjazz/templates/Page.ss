<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="$ContentLocale">
<!--<![endif]-->
<!--[if IE 6 ]>
<html lang="$ContentLocale" class="ie ie6"><![endif]-->
<!--[if IE 7 ]>
<html lang="$ContentLocale" class="ie ie7"><![endif]-->
<!--[if IE 8 ]>
<html lang="$ContentLocale" class="ie ie8"><![endif]-->
<head>
    <% base_tag %>
    <title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    $MetaTags(false)
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css">
    <% require themedCSS('template') %>
</head>
<body <% if $i18nScriptDirection %>dir="$i18nScriptDirection"<% end_if %>>
<header class="header" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="$BaseHref" class="brand" rel="home">
                    <h1>$SiteConfig.Title</h1>
                    <% if $SiteConfig.Tagline %>
                        <p>$SiteConfig.Tagline</p>
                    <% end_if %>
                </a>
                <% if $SearchForm %>
                    <span class="search-dropdown-icon">L</span>
                    <div class="search-bar">
                        $SearchForm
                    </div>
                <% end_if %>
            </div>
            <div class="col-md-6">
                <% include Navigation %>
            </div>
        </div>
    </div>
</header>

<div class="main" role="main">
    <div class="container">
        $Layout
    </div>
</div>
    <% include Footer %>

    <% require javascript('//code.jquery.com/jquery-1.7.2.min.js') %>
    <% require themedJavascript('script') %>

</body>
</html>


