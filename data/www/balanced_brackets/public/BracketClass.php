<?php

class BracketClass
{

    public function isValidBrackets($bracket)
    {
        if ($bracket === "") {
            return true;
        } elseif (!is_string($bracket)) {
            throw new InvalidArgumentException("Not a string");
        }

        $balance = array();

        for ($i = 0; $i < strlen($bracket); $i++) {
            //chars  (){}[]
            if (!($bracket[$i] === "(" || $bracket[$i] === ")"
                || $bracket[$i] === "{" || $bracket[$i] === "}"
                || $bracket[$i] === "[" || $bracket[$i] === "]")) {
                throw new InvalidArgumentException("Invalid string");
            } elseif ($bracket[$i] === "(" || $bracket[$i] === "{" || $bracket[$i] === "[") {
                array_push($balance, $bracket[$i]);
            } elseif ($bracket[$i] === ")") {
                if (array_pop($balance) !== "(") {
                    return false;
                }
            } elseif ($bracket[$i] === "}") {
                if (array_pop($balance) !== "{") {
                    return false;
                }
            } elseif ($bracket[$i] === "]") {
                if (array_pop($balance) !== "[") {
                    return false;
                }
            }
        }

        if (count($balance) == 0) {
            return true;
        }

        return false;
    }
}
