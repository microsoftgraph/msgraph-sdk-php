<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationPointsOutcome File
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
* EducationPointsOutcome class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationPointsOutcome extends EducationOutcome
{
    /**
    * Gets the points
    *
    * @return EducationAssignmentPointsGrade The points
    */
    public function getPoints()
    {
        if (array_key_exists("points", $this->_propDict)) {
            if (is_a($this->_propDict["points"], "Microsoft\Graph\Beta\Model\EducationAssignmentPointsGrade")) {
                return $this->_propDict["points"];
            } else {
                $this->_propDict["points"] = new EducationAssignmentPointsGrade($this->_propDict["points"]);
                return $this->_propDict["points"];
            }
        }
        return null;
    }
    
    /**
    * Sets the points
    *
    * @param EducationAssignmentPointsGrade $val The points
    *
    * @return EducationPointsOutcome
    */
    public function setPoints($val)
    {
        $this->_propDict["points"] = $val;
        return $this;
    }
    
    /**
    * Gets the publishedPoints
    *
    * @return EducationAssignmentPointsGrade The publishedPoints
    */
    public function getPublishedPoints()
    {
        if (array_key_exists("publishedPoints", $this->_propDict)) {
            if (is_a($this->_propDict["publishedPoints"], "Microsoft\Graph\Beta\Model\EducationAssignmentPointsGrade")) {
                return $this->_propDict["publishedPoints"];
            } else {
                $this->_propDict["publishedPoints"] = new EducationAssignmentPointsGrade($this->_propDict["publishedPoints"]);
                return $this->_propDict["publishedPoints"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishedPoints
    *
    * @param EducationAssignmentPointsGrade $val The publishedPoints
    *
    * @return EducationPointsOutcome
    */
    public function setPublishedPoints($val)
    {
        $this->_propDict["publishedPoints"] = $val;
        return $this;
    }
    
}