<?php
/**
* word-sensitive substring function with html tags awareness
* @param text The text to cut
* @param len The maximum length of the cut string
* @returns string
**/
function substrws( $text, $len=100 ) {

    if( (strlen($text) > $len) ) {

        $whitespaceposition = strpos($text," ",$len)-1;

        if( $whitespaceposition > 0 )
            $text = substr($text, 0, ($whitespaceposition+1));

        // close unclosed html tags
        if( preg_match_all("|<([a-zA-Z]+)>|",$text,$aBuffer) ) {

            if( !empty($aBuffer[1]) ) {

                preg_match_all("|</([a-zA-Z]+)>|",$text,$aBuffer2);

                if( count($aBuffer[1]) != count($aBuffer2[1]) ) {

                    foreach( $aBuffer[1] as $index => $tag ) {

                        if( empty($aBuffer2[1][$index]) || $aBuffer2[1][$index] != $tag)
                            $text .= '</'.$tag.'>';
                    }
                }
            }
        }
    }

    return $text;
}
?>