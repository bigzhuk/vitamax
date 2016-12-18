<?php

defined('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_testimonialpro', 'sp_testimonialpro_addon');
AddonParser::addAddon('sp_testimonialpro_item', 'sp_testimonialpro_item_addon');

function sp_testimonialpro_addon($atts, $content) {

    extract(spAddonAtts(array(
        'autoplay' => '',
        'arrows' => '',
        "class" => '',
                    ), $atts));

    $carousel_autoplay = ($autoplay) ? 'data-sppb-ride="sppb-carousel"' : '';

    $output = '<div class="sppb-carousel sppb-testimonial-pro sppb-slide ' . $class . ' sppb-text-center" ' . $carousel_autoplay . '>';

    $output .= '<div class="sppb-carousel-inner">';
    $output .= AddonParser::spDoAddon($content);
    $output .= '</div>';

    if ($arrows) {
        $output .= '<a class="left sppb-carousel-control" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>';
        $output .= '<a class="right sppb-carousel-control" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>';
    }

    $output .= '</div>';

    return $output;
}

function sp_testimonialpro_item_addon($atts) {

    extract(spAddonAtts(array(
        "title" => '',
        "avatar" => '',
        "avatar_style" => '',
        'message' => '',
        "url" => '',
                    ), $atts));

    $output = '<div class="sppb-item"><div class="col-sm-6">';

    $title = '<strong class="pro-client-name">' . $title . '</strong>';

    if ($url)
        $title .= '<a target="_blank" href="https://twitter.com/' . $url . '"><span class="pro-client-url">@' . $url . '</span></a>';
    $output .= '<div class="sppb-testimonial-wrapper">';
    $output .= '<div class="sppb-testimonial-message">' . $message . '</div>';
    $output .= '<div class="sppb-client-wrap">';
    if ($avatar)
        $output .= '<img class="sppb-img-responsive sppb-avatar ' . $avatar_style . '" src="' . $avatar . '" alt="">';
    if ($title)
        $output .= '<div class="sppb-testimonial-client">' . $title . '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div></div>';

    return $output;
}
