<?php

/**
 * Helper Class
 * 
 * This class was developed with the intention to pass an at-home coding exercise.
 */
class Helpers {

    /**
     * Tally how many values are above or below the `comparisonValue` in the passed array.
     *
     * @param array $integerArray
     * @param int $comparisonValue
     * @return array
     */
    public function aboveBelow(array $integerArray, int $comparisonValue)
    {
        // Initialize our array
        $tally = [
            'above' => 0,
            'below' => 0
        ];

        // Loop on the passed array
        foreach ($integerArray as $value) {
            // Tally `above` values
            if ($value > $comparisonValue) $tally['above']++;

            // Tally `below` values
            if ($value < $comparisonValue) $tally['below']++;
        }

        // Return the final tally
        return $tally;
    }

    /**
     * Rotate characters in the provided string by the provided rotation amount. Handles
     * both forwards and backwards rotations by passing a posive or negative integer.
     *
     * @param string $string
     * @param integer $rotationAmount
     * @return string $rotatedString
     */
    public function stringRotation(string $string, int $rotationAmount)
    {
        // If rotation is 0, return the same string to save time
        if (! $rotationAmount) return $string;

        // Split our string to a workable character array
        $array = str_split($string);

        // Handle forwards rotation
        if ($rotationAmount > 0) {
            for ($i = 0; $i < $rotationAmount; $i++) {
                // Pop the last character from the array
                $last = array_pop($array);
    
                // Add our popped element to the beginning of the array
                array_unshift($array, $last);
            }
        } else {
            // Handle backwards rotation
            for ($i = 0; $i > $rotationAmount; $i--) {
                // Shit element from front of the array
                $first = array_shift($array);

                // Push the first element to the back of the array
                array_push($array, $first);
            }
        }

        // Return the final rotated string
        return implode('', $array);
    }
}