<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationOnPremisesInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* EducationOnPremisesInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationOnPremisesInfo extends Entity
{
    /**
    * Gets the immutableId
    *
    * @return string The immutableId
    */
    public function getImmutableId()
    {
        if (array_key_exists("immutableId", $this->_propDict)) {
            return $this->_propDict["immutableId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the immutableId
    *
    * @param string $val The value of the immutableId
    *
    * @return EducationOnPremisesInfo
    */
    public function setImmutableId($val)
    {
        $this->_propDict["immutableId"] = $val;
        return $this;
    }
}
