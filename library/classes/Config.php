<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * System iin undsen tohirgoo hiine
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Config {

    static $DB;
    
    /**
     * @param Array $config config.php dotor bgaa utgiig damjuulah
     * @return null 
     */
    public function Config($config) {

        foreach ($config as $k => $v) {
            define(strtoupper($key), $v);
        }
        
        $this->initDatabase();
    }

    /**
     * @param 
     * 
     * @return null
     */
    public function initDatabase() {


        //cache tohiruulah
        if (APPMODE == "dev") {
            $cache = new \Doctrine\Common\Cache\ArrayCache;
        } else {
            $cache = new \Doctrine\Common\Cache\ApcCache;
        }

        /**         * **DB read Core connection***** */
        $DB = new \Doctrine\DBAL\Configuration();
        $DB->setResultCacheImpl($cache);
        $DB_params = array(
            'dbname' => DBCR_NAME,
            'user' => DBCR_USER,
            'password' => DBCR_PASS,
            'host' => DBCR_HOST,
            'driver' => DBCR_DRIVER,
        );
        $this->DB = \Doctrine\DBAL\DriverManager::getConnection($DB_params, $DB);
        $this->DB->setCharset(DB_CHARSET);
    }

}