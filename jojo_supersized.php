<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007-2008 Harvey Kane <code@ragepank.com>
 * Copyright 2007-2008 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <mikec@jojocms.org>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 * @package jojo_gallery3
 */
class Jojo_Plugin_Jojo_supersized extends Jojo_Plugin
{

     public static function foot() {
        global $smarty;
        $slideshow = (boolean)(Jojo::getOption('supersized_slideshow', 'no')=='yes');
        $random = (boolean)(Jojo::getOption('supersized_random', 'yes')=='yes');
        $initialise = (boolean)(Jojo::getOption('supersized_code', 'yes')=='yes');
        $ssimages = Jojo::selectQuery("SELECT * FROM {ssimage} ORDER BY displayorder, name");
        if ($ssimages) {
            if (count($ssimages)>1) {
                $ssimages = $random ? shuffle($ssimages) : $ssimages;
                $ssimages = $slideshow ?  $ssimages : array_slice($ssimages, 0, 1);
            }
            foreach ($ssimages as &$a){
                $a['name'] = htmlspecialchars($a['name'], ENT_COMPAT, 'UTF-8', false);
                $a['caption'] = htmlspecialchars($a['caption'], ENT_COMPAT, 'UTF-8', false);
                $a['image'] = urlencode($a['image']);
            }
            $smarty->assign('ssimages', $ssimages);
            $smarty->assign('ssinitialise', $initialise);
            $smarty->assign('sscrop', Jojo::getOption('supersized_size', '1200x800'));
            $code = $smarty->fetch('jojo_supersized_js.tpl');
            return $code;
        }
    }


}
