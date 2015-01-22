<?php

class display_override
{
        
    function changeDisplay()
    {
        $CI =& get_instance();
        $output = $CI->output->get_output();
        
        // Variable to find content found within a "<p>" element with "class="lead""
        // NOTE: I apologize in advance if my regex is too complicated.
        // I find it to be extremely fun, and adding all the "\s*", ensures capture of potential cases with extrea spaces.
        $matchExpression = "/(<\s*p\s+class\s*=\s*\"lead\"\s*>.*<\s*\/\s*p\s*>)/";
        
        // Checks whether output has <p class="lead">...</p>
        if (preg_match($matchExpression, $output, $leadContent))
        {
            // Finds all the capital letters, and bold them.
            $leadContent[0] = preg_replace("/([A-Z])/", "<strong>$1</strong>", $leadContent[0]);
            // Reassmbles the newly formatted text back into the original output.
            $output = preg_replace($matchExpression, $leadContent[0], $output);
        }
        
        // Displays output.
        echo $output;
        
    }
}