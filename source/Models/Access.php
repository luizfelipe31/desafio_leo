<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Description of Access
 *
 * @author Luiz
 */
class Access extends DataLayer {

    public function __construct() {
        parent::__construct("accesses", ["ip"]);
    }

}
