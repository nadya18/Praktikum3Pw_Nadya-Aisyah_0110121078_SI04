<?php
    function kelulusan($_nilai) {
        if ($_nilai > 55 ){
            return '<span class="badge badge-success">LULUS</span>';
        }else {
            return '<span class="badge badge-danger">TIDAK LULUS</span>';
        }
    }

    function grade($total) {
        if ($total >= 0 && $total <=35) {
            return '<span class="badge badge-primary">E</span>';
        } else if ($total >= 36 && $total <= 55) {
            return '<span class="badge badge-primary">D</span>';
        } else if ($total >= 56 && $total <= 69) {
            return '<span class="badge badge-primary">C</span>';
        } else if ($total >= 70 && $total <= 84) {
            return '<span class="badge badge-primary">B</span>';
        } else if ($total >= 85 && $total <= 100) {
            return '<span class="badge badge-primary">A</span>';
        } else if ($total < 0 ) {
            return '<span class="badge badge-primary">I</span>';
        } else if ($total > 100 ) {
            return '<span class="badge badge-primary">I</span>';
        }
    }

    function predikat($grade) {
        switch ($grade) {
            case 'E':
                return '<span class="badge badge-danger">SANGAT KURANG</span>';
                break;
            case 'D':
                return '<span class="badge badge-warning">KURANG</span>';
                break;
            case 'C':
                return '<span class="badge badge-primary">CUKUP</span>';
                break;
            case 'B':
                return '<span class="badge badge-info">MEMUASKAN</span>';
                break;
            case 'A':
                return '<span class="badge badge-success">SANGAT MEMUASKAN</span>';
                break;
            case 'I':
                return '<span class="badge badge-danger">TIDAK ADA</span>';
                break;
        }
    }