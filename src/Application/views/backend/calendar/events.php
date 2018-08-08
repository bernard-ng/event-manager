<?php include(APP."/Views/includes/menu.php"); ?>
<section class="container row">
    <h2 style="margin-bottom: -35px; margin-top: -30px">
        <strong><?= $current_month ?></strong>

        <span class="right">
            <a href="/events?m=<?= $previousMonth ?>&y=<?= $previousYear ?>" class="btn blue darken-3">Précédent</a>
            <a href="/events?m=<?= $nextMonth ?>&y=<?= $nextYear ?>" class="btn blue darken-2">Suivant</a>
        </span>
    </h2>
</section>
<section class="calendar container">
    <table class="calendar__table calendar__table--<?= $weeks ?>weeks">
        <?php for($i = 0; $i < $weeks; $i++): ?>
            <tr>
                <?php
                    foreach($days as $k => $day):
                        $date = (clone $start)->modify("+" . ($k + $i * 7) . "days");
                        $eventsForDay = $events[$date->format('Y-m-d')] ?? [];
                ?>
                    <td class="<?= $calendar->withInMonth($date)? '' : 'calendar__othermonth' ?>">
                        <?php if ($i === 0): ?>
                            <div class="calendar__weekday"><?= $day ?></div>
                        <?php endif; ?>

                        <div class="calendar__day"><?= $date->format('d') ?><div>
                        <?php foreach($eventsForDay as $event): ?>
                            <div class="calendar__event truncate">
                                <?= (new DateTime($event['started']))->format('H:i'); ?> -
                                <a href="events/<?= $event['id'] ?>"><i class="icon icon-calendar"></i> voir</a>
                            </div>
                        <?php endforeach; ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endfor; ?>
    </table>
</section>
<a class="btn fixed-action-btn btn-floating btn-large blue darken-3" href="events/add">
    <i class="icon icon-plus"></i>
</a>
