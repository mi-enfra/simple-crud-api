<?php
    // @codeCoverageIgnoreStart
    namespace App\Kata\BinarySearch;

    use App\Kata\BinarySearch\BinarySearch;
    use PHPUnit\Framework\TestCase;

final class BinarySearchTest extends TestCase
{
    /**
     * @dataProvider sampleHaystack
     */
    public function test_existingValue(array $haystack)
    {
        $BinarySearch = new BinarySearch();
        $index = count($haystack) - 1;
        while ($index >= 0) {
            $php_result = array_search($haystack[$index], $haystack);
            $custom_result = $BinarySearch->search($haystack[$index], $haystack);
            $this->assertEquals(
                $php_result,
                $custom_result,
                'Searched for ' . $haystack[$index] . ', returned ' . $custom_result . ' instead of ' . $php_result
            );
            $index--;
        }
    }
    
    /**
     * @dataProvider sampleHaystack
     */
    public function test_nonExistentValue(array $haystack)
    {
        $BinarySearch = new BinarySearch();
        $index = count($haystack) - 1;
        while ($index >= 0) {
            // $php_result = array_search($haystack[$index], $haystack);
            $custom_result = $BinarySearch->search(100, $haystack);
            $this->assertEquals(
                -1,
                $custom_result,
                'Searched for ' . $haystack[$index] . ', returned ' . $custom_result . ' instead of -1'
            );
            $index--;
        }
    }

    public function sampleHaystack() : array
    {
        return [
            [
                'haystack' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            ],
            [
                'haystack' => [1, 3, 5, 7, 9, 11],
            ],
        ];
    }

    private function createOneToTen() : array
    {
        $haystack = [];
        $i = 10;
        while ($i > 0) {
            $haystack[$i - 1] = $i;
            $i--;
        }
        return $haystack;
    }
}
