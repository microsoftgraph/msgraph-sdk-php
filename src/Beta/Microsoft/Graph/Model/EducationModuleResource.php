<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationModuleResource File
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
* EducationModuleResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationModuleResource extends Entity
{
    /**
    * Gets the resource
    *
    * @return EducationResource|null The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Beta\Microsoft\Graph\Model\EducationResource") || is_null($this->_propDict["resource"])) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new EducationResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }

    /**
    * Sets the resource
    *
    * @param EducationResource $val The resource
    *
    * @return EducationModuleResource
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }

}
