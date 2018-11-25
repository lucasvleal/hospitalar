<?php require 'header.php'; ?>

<?php

    date_default_timezone_set('America/Araguaina');
        // Get prev & next month
    if (isset($_GET['ym'])) {
        $ym = $_GET['ym'];
    } else {
        // This month
        $ym = date('Y-m');
    }
    // Check format
    $timestamp = strtotime($ym . '-01');
    if ($timestamp === false) {
        $ym = date('Y-m');
        $timestamp = strtotime($ym . '-01');
    }
    // Today
    $today = date('Y-m-d', time());
    // For H3 title
    $html_title = date('Y / m', $timestamp);
    // Create prev & next month link     mktime(hour,minute,second,month,day,year)
    $prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
    $next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
    // You can also use strtotime!
    // $prev = date('Y-m', strtotime('-1 month', $timestamp));
    // $next = date('Y-m', strtotime('+1 month', $timestamp));
    // Number of days in the month
    $day_count = date('t', $timestamp);
    
    // 0:Sun 1:Mon 2:Tue ...
    $str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
    //$str = date('w', $timestamp);
    // Create Calendar!!
    $weeks = array();
    $week = '';
    // Add empty cell
    $week .= str_repeat('<td></td>', $str);
    for ( $day = 1; $day <= $day_count; $day++, $str++) {
        
        $date = $ym . '-' . $day;
        
        if ($today == $date) {
            $week .= '<td class="hoje">' . $day;
        } else {
            $week .= '<td>' . $day;
        }
        $week .= '</td>';
        
        // End of the week OR End of the month
        if ($str % 7 == 6 || $day == $day_count) {
            if ($day == $day_count) {
                // Add empty cell
                $week .= str_repeat('<td></td>', 6 - ($str % 7));
            }
            $weeks[] = '<tr>' . $week . '</tr>';
            // Prepare for new week
            $week = '';
        }
    }

?>

<div class=" containerAgenda col-md-12 col-sm-12">
    <h1 class="h1Agenda">Calendário para agendamentos. </h1>
    <p style="color: white">
        Escolha o dia desejado para o agendamento de sua consulta.
    </p>
    <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
    <br />
    <table class="table table-bordered agenda">
        <tr>
            <th>D</th>
            <th>S</th>
            <th>T</th>
            <th>Q</th>
            <th>Q</th>
            <th>S</th>
            <th>S</th>
        </tr>
        <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
    </table>
</div>
<?php require 'footer.php'; ?>