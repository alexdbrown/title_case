<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {

            $recognize_designated_words = array("as", "in", "for", "from", "to", "at", "a","on", "the");
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            foreach ($input_array_of_words as $word) {
                $word_test ="";
                if (in_array($word, $recognize_designated_words) && $word != $input_array_of_words[0]) {
                    $word_test = lcfirst($word);
                } else {
                    $word_test = ucfirst($word);
                }
                array_push($output_titlecased, $word_test);
            }
            return implode(" ", $output_titlecased);
        }

    }

?>
