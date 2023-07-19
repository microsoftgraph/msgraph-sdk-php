<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureADAuthentication File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AzureADAuthentication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureADAuthentication extends Entity
{

     /**
     * Gets the attainments
    * A list of monthly serviceLevelAgreementAttainment objects.
     *
     * @return array|null The attainments
     */
    public function getAttainments()
    {
        if (array_key_exists("attainments", $this->_propDict)) {
           return $this->_propDict["attainments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attainments
    * A list of monthly serviceLevelAgreementAttainment objects.
    *
    * @param ServiceLevelAgreementAttainment[] $val The attainments
    *
    * @return AzureADAuthentication
    */
    public function setAttainments($val)
    {
        $this->_propDict["attainments"] = $val;
        return $this;
    }

}
