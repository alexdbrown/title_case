<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_oneWord()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "sunshine";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Sunshine", $result);
        }

        function test_makeTitleCase_multipleWords()
        {

        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "the little mermaid";

        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        $this->assertEquals("The Little Mermaid", $result);

        }

        function test_makeTitleCase_recognizeDesignatedWords()
        {

        $test_TitleCaseGenerator = new titleCaseGenerator;
        $input = "beowulf from brighton beach";

        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        $this->assertEquals("Beowulf from Brighton Beach", $result);

        }

        function test_makeTitleCase_designatedWordFirst()
        {
            $test_TitleCaseGenerator = new titleCaseGenerator;
            $input = "from beowulf to the hulk";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("From Beowulf to the Hulk", $result);
        }
    }
?>
