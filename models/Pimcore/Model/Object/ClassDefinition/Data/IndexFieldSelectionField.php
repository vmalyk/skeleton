<?php
/**
 * Pimcore
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2009-2015 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GNU General Public License version 3 (GPLv3)
 */


namespace Pimcore\Model\Object\ClassDefinition\Data;

class IndexFieldSelectionField extends Textarea {

    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = "indexFieldSelectionField";


    public $specificPriceField = false;
    public $showAllFields = false;
    public $considerTenants = false;

    public function setSpecificPriceField($specificPriceField) {
        $this->specificPriceField = $specificPriceField;
    }

    public function getSpecificPriceField() {
        return $this->specificPriceField;
    }

    public function setShowAllFields($showAllFields) {
        $this->showAllFields = $showAllFields;
    }

    public function getShowAllFields() {
        return $this->showAllFields;
    }

    public function setConsiderTenants($considerTenants) {
        $this->considerTenants = $considerTenants;
    }

    public function getConsiderTenants() {
        return $this->considerTenants;
    }


    /**
     * @param $data
     * @return bool
     */
    public function isEmpty($data) {
        if(is_string($data)) {
            return (strlen($data) < 1);
        } else if(is_array($data)) {
            return empty($data);
        }
        return true;
    }

    /**
     * @see Model\Object\ClassDefinition\Data::getDataFromEditmode
     * @param string $data
     * @param null|\Pimcore\Model\Object\AbstractObject $object
     * @param mixed $params
     * @return string
     */
    public function getDataFromEditmode($data, $object = null, $params = array()) {
        if(is_array($data)) {
            $data = implode(",", $data);
        }

        return $data;
    }

}
