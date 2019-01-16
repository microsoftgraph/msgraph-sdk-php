<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentResource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* EducationAssignmentResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationAssignmentResource extends Entity
{
    /**
    * Gets the distributeForStudentWork
    *
    * @return bool The distributeForStudentWork
    */
    public function getDistributeForStudentWork()
    {
        if (array_key_exists("distributeForStudentWork", $this->_propDict)) {
            return $this->_propDict["distributeForStudentWork"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the distributeForStudentWork
    *
    * @param bool $val The distributeForStudentWork
    *
    * @return EducationAssignmentResource
    */
    public function setDistributeForStudentWork($val)
    {
        $this->_propDict["distributeForStudentWork"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the resource
    *
    * @return EducationResource The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "Microsoft\Graph\Model\EducationResource")) {
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
    * @return EducationAssignmentResource
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
}