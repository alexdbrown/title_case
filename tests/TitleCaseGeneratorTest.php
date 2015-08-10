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

        function test_makeTitleCase_nonLetterCharacters()
        {
            $test_TitleCaseGenerator = new titleCaseGenerator;
            $input = "57 beowulf alternative endings!!";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("57 Beowulf Alternative Endings!!", $result);
        }

        function test_makeTitleCase_upperCaseEntries()
        {
            $test_TitleCaseGenerator = new titleCaseGenerator;
            $input = "BEOWULF ON THE ROCKS";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Beowulf on the Rocks", $result);
        }

        function test_makeTitleCase_mixedCaseEntries()
        {
            $test_TitleCaseGenerator = new titleCaseGenerator;
            $input = "BeoWulf aNd mE";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Beowulf and Me", $result);
        }

        function test_makeTitleCase_uniqueCaseEntries()
        {
            $test_TitleCaseGenerator = new titleCaseGenerator;
            $input = "here's to beowulf and [McDuff] and [O'Malley]";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Here's to Beowulf and McDuff and O'Malley", $result);
        }

    }
?>
