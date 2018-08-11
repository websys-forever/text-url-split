<?php

namespace WebsysForever;

class Parser
{
    function urlSplit($sourceText)
    {
        if (preg_match_all(
                '~(https?://.+?)\s+.+?(?=https?|$)~is',
                $sourceText, 
                $arSourceMatch, 
                PREG_SET_ORDER
        )) {
            return $arSourceMatch;
        }
        return false;
    }
}

