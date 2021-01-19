<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php wp_footer(); ?>
</body>
</html>