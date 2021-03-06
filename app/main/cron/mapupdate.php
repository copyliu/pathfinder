<?php
/**
 * Created by PhpStorm.
 * User: exodus4d
 * Date: 30.07.2015
 * Time: 17:54
 */

namespace cron;
use Controller;
use DB;

class MapUpdate {

    const LOG_TEXT_MAPS = '%s (%d maps)';

    // disabled maps will be fully deleted after (x) days
    const DAYS_UNTIL_MAP_DELETION = 30;

    /**
     * deactivate all "private" maps whose lifetime is over
     * >> php index.php "/cron/deactivateMapData"
     * @param $f3
     */
    function deactivateMapData($f3){

        DB\Database::instance()->setDB('PF');

        $sqlDeactivateExpiredMaps = "UPDATE map SET
                active = 0
            WHERE
                map.active = 1 AND
                map.typeId = 2 AND
                TIMESTAMPDIFF(DAY, map.created, NOW() ) > :lifetime";

        $privateMapLifetime = (int)$f3->get('PATHFINDER.MAP.PRIVATE.LIFETIME');

        $f3->get('DB')->exec($sqlDeactivateExpiredMaps, ['lifetime' => $privateMapLifetime]);
        $deactivatedMapsCount = $f3->get('DB')->count();

        // Log ------------------------
        $log = Controller\LogController::getLogger('cron_' . __FUNCTION__);
        $log->write( sprintf(self::LOG_TEXT_MAPS, __FUNCTION__, $deactivatedMapsCount) );
    }

    /**
     * delete all deactivated maps
     * >> php index.php "/cron/deleteMapData"
     * @param $f3
     */
    function deleteMapData($f3){

        DB\Database::instance()->setDB('PF');

        $sqlDeleteDisabledMaps = "DELETE FROM
                map
            WHERE
                map.active = 0 AND
                TIMESTAMPDIFF(DAY, map.updated, NOW() ) > :deletion_time";

        $f3->get('DB')->exec($sqlDeleteDisabledMaps, ['deletion_time' => self::DAYS_UNTIL_MAP_DELETION]);

        $deletedMapsCount = $f3->get('DB')->count();

        // Log ------------------------
        $log = Controller\LogController::getLogger('cron_' . __FUNCTION__);
        $log->write( sprintf(self::LOG_TEXT_MAPS, __FUNCTION__, $deletedMapsCount) );
    }

}