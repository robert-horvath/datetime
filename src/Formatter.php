<?php
declare(strict_types = 1);
namespace RHo\DateTime;

use DateTime as DT;
use DateTimeZone as DTZ;

class Formatter
{

    /**
     * Converts PHP DateTime object to RFC 1123 (HTTP header date) string
     *
     * @param \DateTime $dt
     * @return string E.g.: Tue, 3 Jun 2008 11:05:30 GMT
     */
    static function toHttpLongDateTime(DT $dt): string
    {
        $dtz = new DTZ('GMT');
        return $dt->setTimezone($dtz)->format('D, d M Y H:i:s T');
    }

    /**
     * Converts PHP DateTime object to RFC 1123 (HTTP header date) string
     * with milliseconds
     *
     * @param \DateTime $dt
     * @return string E.g.: Tue, 3 Jun 2008 11:05:30.169378 GMT
     */
    static function toHttpLongDateTimeWithMillisecond(DT $dt): string
    {
        $dtz = new DTZ('GMT');
        return $dt->setTimezone($dtz)->format('D, d M Y H:i:s.u T');
    }

    /**
     * Converts PHP DateTime object to MySQL DATETIME string
     *
     * @param \DateTime $dt
     * @return string E.g.: 2012-01-23 17:12:49
     */
    static function toMySqlDateTime(DT $dt): string
    {
        $dtz = new DTZ('Europe/Budapest');
        return $dt->setTimezone($dtz)->format('Y-m-d H:i:s');
    }

    /**
     * Converts PHP DateTime object to MySQL DATETIME string
     * with milliseconds
     * 
     * @param \DateTime $dt
     * @return string E.g.: 2012-01-23 17:12:49.472104
     */
    static function toMySqlDateTimeWithMillisecond(DT $dt): string
    {
        $dtz = new DTZ('Europe/Budapest');
        return $dt->setTimezone($dtz)->format('Y-m-d H:i:s.u');
    }
}