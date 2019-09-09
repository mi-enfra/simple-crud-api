<?php
    namespace App\Kata\BinarySearch;

final class BinarySearch
{
    public function search(int $needle, array $haystack) : int
    {
        if (count($haystack) < 1
            || $needle < 1
        ) {
            return -1;
        }
        $haystack_index = array_keys($haystack);
        while (count($haystack_index) > 0) {
            $haystack_midpoint = intval(count($haystack_index) / 2);
            switch ($needle <=> $haystack[$haystack_index[$haystack_midpoint]]) {
                case -1:
                    // Get lower half
                    $haystack_index = array_slice($haystack_index, 0, $haystack_midpoint);
                    break;
                case 1:
                    // Get upper half
                    $haystack_index = array_slice($haystack_index, $haystack_midpoint);
                    break;
                case 0:
                    return $haystack_index[$haystack_midpoint];
            }
            if (count($haystack_index) === 1
                && isset($haystack_index[$haystack_midpoint])
                && $needle !== $haystack[$haystack_index[$haystack_midpoint]]
            ) {
                return -1;
            }
        }
        return -1;
    }
}
