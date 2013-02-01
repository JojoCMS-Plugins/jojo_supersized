        <script type="text/javascript" src="{$SITEURL}/js/supersized{if !$slideshow}.core{/if}.min.js"></script>
        <script type="text/javascript">
     jQuery(function($){ldelim}
                $.supersized({ldelim}
                    slides  :   [
                    {foreach from=$ssimages item=i}{ldelim}image : '{$SITEURL}/images/{$sscrop}/ssimages/{$i.image}'{if $i.caption} title : '{$i.caption}'{/if}{if $i.link} url : '{$i.link}'{/if}{rdelim}
                    {/foreach}
                     ]
                {rdelim});
            {rdelim});
        </script>
