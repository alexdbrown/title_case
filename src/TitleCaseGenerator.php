<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {

            $recognize_designated_words = array("as", "in", "for", "from", "to", "at", "a","on", "the", "and", "an", "by", "of", "nor", "up", "but", "or", "this", "is");

            $input_array_of_words = explode(" ", $input_title);

            $output_titlecased = array();
            foreach ($input_array_of_words as $word) {
                $word_test ="";
                if ($word[0] === "[") {
                    $word_test = substr($word, 1, (strlen($word) - 2));
                } else {
                    $lower_case_word = strtolower($word);
                    if (in_array($lower_case_word, $recognize_designated_words) && $word != $input_array_of_words[0]) {
                    $word_test = lcfirst($lower_case_word);
                } else {
                    $word_test = ucfirst($lower_case_word);
                    }
                }

                array_push($output_titlecased, $word_test);
            }
            return implode(" ", $output_titlecased);
        }

    }

?>
