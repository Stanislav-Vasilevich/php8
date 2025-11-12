<?php error_reporting(-1);

    function get_table(int $num1, int $num2)
    {
        $tr = 1;

        $table = "<table border='1' width='50%'>";

        while ($tr <= $num1) {
            $td = 1;

            $table .= "<tr>";

            while ($td <= $num2) {
                $table .= "<td> $tr * $td = " . $tr * $td . "</td>";
                $td++;
            }

            $table .= "</tr>";

            $tr++;
        }

        $table .= "</table>";

        return $table;
    }