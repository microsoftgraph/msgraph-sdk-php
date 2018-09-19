<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentPointsGradeType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* EducationAssignmentPointsGradeType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationAssignmentPointsGradeType extends EducationAssignmentGradeType
{

    /**
    * Gets the maxPoints
    *
    * @return Single The maxPoints
    */
    public function getMaxPoints()
    {
        if (array_key_exists("maxPoints", $this->_propDict)) {
            if (is_a($this->_propDict["maxPoints"], "Microsoft\Graph\Beta\Model\Single")) {
                return $this->_propDict["maxPoints"];
            } else {
                $this->_propDict["maxPoints"] = new Single($this->_propDict["maxPoints"]);
                return $this->_propDict["maxPoints"];
            }
        }
        return null;
    }

    /**
    * Sets the maxPoints
    *
    * @param Single $val The value to assign to the maxPoints
    *
    * @return EducationAssignmentPointsGradeType The EducationAssignmentPointsGradeType
    */
    public function setMaxPoints($val)
    {
        $this->_propDict["maxPoints"] = $val;
         return $this;
    }
}
