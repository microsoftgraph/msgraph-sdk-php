<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Call File
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
* Call class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Call extends Entity
{
    /**
    * Gets the state
    *
    * @return CallState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Beta\Model\CallState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new CallState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param CallState $val The state
    *
    * @return Call
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaState
    *
    * @return CallMediaState The mediaState
    */
    public function getMediaState()
    {
        if (array_key_exists("mediaState", $this->_propDict)) {
            if (is_a($this->_propDict["mediaState"], "Microsoft\Graph\Beta\Model\CallMediaState")) {
                return $this->_propDict["mediaState"];
            } else {
                $this->_propDict["mediaState"] = new CallMediaState($this->_propDict["mediaState"]);
                return $this->_propDict["mediaState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaState
    *
    * @param CallMediaState $val The mediaState
    *
    * @return Call
    */
    public function setMediaState($val)
    {
        $this->_propDict["mediaState"] = $val;
        return $this;
    }
    
    /**
    * Gets the resultInfo
    *
    * @return ResultInfo The resultInfo
    */
    public function getResultInfo()
    {
        if (array_key_exists("resultInfo", $this->_propDict)) {
            if (is_a($this->_propDict["resultInfo"], "Microsoft\Graph\Beta\Model\ResultInfo")) {
                return $this->_propDict["resultInfo"];
            } else {
                $this->_propDict["resultInfo"] = new ResultInfo($this->_propDict["resultInfo"]);
                return $this->_propDict["resultInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resultInfo
    *
    * @param ResultInfo $val The resultInfo
    *
    * @return Call
    */
    public function setResultInfo($val)
    {
        $this->_propDict["resultInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the terminationReason
    *
    * @return string The terminationReason
    */
    public function getTerminationReason()
    {
        if (array_key_exists("terminationReason", $this->_propDict)) {
            return $this->_propDict["terminationReason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the terminationReason
    *
    * @param string $val The terminationReason
    *
    * @return Call
    */
    public function setTerminationReason($val)
    {
        $this->_propDict["terminationReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the direction
    *
    * @return CallDirection The direction
    */
    public function getDirection()
    {
        if (array_key_exists("direction", $this->_propDict)) {
            if (is_a($this->_propDict["direction"], "Microsoft\Graph\Beta\Model\CallDirection")) {
                return $this->_propDict["direction"];
            } else {
                $this->_propDict["direction"] = new CallDirection($this->_propDict["direction"]);
                return $this->_propDict["direction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the direction
    *
    * @param CallDirection $val The direction
    *
    * @return Call
    */
    public function setDirection($val)
    {
        $this->_propDict["direction"] = $val;
        return $this;
    }
    
    /**
    * Gets the ringingTimeoutInSeconds
    *
    * @return int The ringingTimeoutInSeconds
    */
    public function getRingingTimeoutInSeconds()
    {
        if (array_key_exists("ringingTimeoutInSeconds", $this->_propDict)) {
            return $this->_propDict["ringingTimeoutInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ringingTimeoutInSeconds
    *
    * @param int $val The ringingTimeoutInSeconds
    *
    * @return Call
    */
    public function setRingingTimeoutInSeconds($val)
    {
        $this->_propDict["ringingTimeoutInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the subject
    *
    * @return string The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subject
    *
    * @param string $val The subject
    *
    * @return Call
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    
    /**
    * Gets the callbackUri
    *
    * @return string The callbackUri
    */
    public function getCallbackUri()
    {
        if (array_key_exists("callbackUri", $this->_propDict)) {
            return $this->_propDict["callbackUri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the callbackUri
    *
    * @param string $val The callbackUri
    *
    * @return Call
    */
    public function setCallbackUri($val)
    {
        $this->_propDict["callbackUri"] = $val;
        return $this;
    }
    

     /** 
     * Gets the callRoutes
     *
     * @return array The callRoutes
     */
    public function getCallRoutes()
    {
        if (array_key_exists("callRoutes", $this->_propDict)) {
           return $this->_propDict["callRoutes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the callRoutes
    *
    * @param CallRoute $val The callRoutes
    *
    * @return Call
    */
    public function setCallRoutes($val)
    {
		$this->_propDict["callRoutes"] = $val;
        return $this;
    }
    
    /**
    * Gets the source
    *
    * @return ParticipantInfo The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "Microsoft\Graph\Beta\Model\ParticipantInfo")) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new ParticipantInfo($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }
    
    /**
    * Sets the source
    *
    * @param ParticipantInfo $val The source
    *
    * @return Call
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
    

     /** 
     * Gets the targets
     *
     * @return array The targets
     */
    public function getTargets()
    {
        if (array_key_exists("targets", $this->_propDict)) {
           return $this->_propDict["targets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the targets
    *
    * @param ParticipantInfo $val The targets
    *
    * @return Call
    */
    public function setTargets($val)
    {
		$this->_propDict["targets"] = $val;
        return $this;
    }
    
    /**
    * Gets the answeredBy
    *
    * @return ParticipantInfo The answeredBy
    */
    public function getAnsweredBy()
    {
        if (array_key_exists("answeredBy", $this->_propDict)) {
            if (is_a($this->_propDict["answeredBy"], "Microsoft\Graph\Beta\Model\ParticipantInfo")) {
                return $this->_propDict["answeredBy"];
            } else {
                $this->_propDict["answeredBy"] = new ParticipantInfo($this->_propDict["answeredBy"]);
                return $this->_propDict["answeredBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the answeredBy
    *
    * @param ParticipantInfo $val The answeredBy
    *
    * @return Call
    */
    public function setAnsweredBy($val)
    {
        $this->_propDict["answeredBy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the requestedModalities
     *
     * @return array The requestedModalities
     */
    public function getRequestedModalities()
    {
        if (array_key_exists("requestedModalities", $this->_propDict)) {
           return $this->_propDict["requestedModalities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the requestedModalities
    *
    * @param Modality $val The requestedModalities
    *
    * @return Call
    */
    public function setRequestedModalities($val)
    {
		$this->_propDict["requestedModalities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the activeModalities
     *
     * @return array The activeModalities
     */
    public function getActiveModalities()
    {
        if (array_key_exists("activeModalities", $this->_propDict)) {
           return $this->_propDict["activeModalities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the activeModalities
    *
    * @param Modality $val The activeModalities
    *
    * @return Call
    */
    public function setActiveModalities($val)
    {
		$this->_propDict["activeModalities"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaConfig
    *
    * @return MediaConfig The mediaConfig
    */
    public function getMediaConfig()
    {
        if (array_key_exists("mediaConfig", $this->_propDict)) {
            if (is_a($this->_propDict["mediaConfig"], "Microsoft\Graph\Beta\Model\MediaConfig")) {
                return $this->_propDict["mediaConfig"];
            } else {
                $this->_propDict["mediaConfig"] = new MediaConfig($this->_propDict["mediaConfig"]);
                return $this->_propDict["mediaConfig"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaConfig
    *
    * @param MediaConfig $val The mediaConfig
    *
    * @return Call
    */
    public function setMediaConfig($val)
    {
        $this->_propDict["mediaConfig"] = $val;
        return $this;
    }
    
    /**
    * Gets the chatInfo
    *
    * @return ChatInfo The chatInfo
    */
    public function getChatInfo()
    {
        if (array_key_exists("chatInfo", $this->_propDict)) {
            if (is_a($this->_propDict["chatInfo"], "Microsoft\Graph\Beta\Model\ChatInfo")) {
                return $this->_propDict["chatInfo"];
            } else {
                $this->_propDict["chatInfo"] = new ChatInfo($this->_propDict["chatInfo"]);
                return $this->_propDict["chatInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the chatInfo
    *
    * @param ChatInfo $val The chatInfo
    *
    * @return Call
    */
    public function setChatInfo($val)
    {
        $this->_propDict["chatInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the meetingInfo
    *
    * @return MeetingInfo The meetingInfo
    */
    public function getMeetingInfo()
    {
        if (array_key_exists("meetingInfo", $this->_propDict)) {
            if (is_a($this->_propDict["meetingInfo"], "Microsoft\Graph\Beta\Model\MeetingInfo")) {
                return $this->_propDict["meetingInfo"];
            } else {
                $this->_propDict["meetingInfo"] = new MeetingInfo($this->_propDict["meetingInfo"]);
                return $this->_propDict["meetingInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the meetingInfo
    *
    * @param MeetingInfo $val The meetingInfo
    *
    * @return Call
    */
    public function setMeetingInfo($val)
    {
        $this->_propDict["meetingInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the meetingCapability
    *
    * @return MeetingCapability The meetingCapability
    */
    public function getMeetingCapability()
    {
        if (array_key_exists("meetingCapability", $this->_propDict)) {
            if (is_a($this->_propDict["meetingCapability"], "Microsoft\Graph\Beta\Model\MeetingCapability")) {
                return $this->_propDict["meetingCapability"];
            } else {
                $this->_propDict["meetingCapability"] = new MeetingCapability($this->_propDict["meetingCapability"]);
                return $this->_propDict["meetingCapability"];
            }
        }
        return null;
    }
    
    /**
    * Sets the meetingCapability
    *
    * @param MeetingCapability $val The meetingCapability
    *
    * @return Call
    */
    public function setMeetingCapability($val)
    {
        $this->_propDict["meetingCapability"] = $val;
        return $this;
    }
    

     /** 
     * Gets the routingPolicies
     *
     * @return array The routingPolicies
     */
    public function getRoutingPolicies()
    {
        if (array_key_exists("routingPolicies", $this->_propDict)) {
           return $this->_propDict["routingPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the routingPolicies
    *
    * @param RoutingPolicy $val The routingPolicies
    *
    * @return Call
    */
    public function setRoutingPolicies($val)
    {
		$this->_propDict["routingPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantId
    *
    * @return string The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return Call
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the myParticipantId
    *
    * @return string The myParticipantId
    */
    public function getMyParticipantId()
    {
        if (array_key_exists("myParticipantId", $this->_propDict)) {
            return $this->_propDict["myParticipantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the myParticipantId
    *
    * @param string $val The myParticipantId
    *
    * @return Call
    */
    public function setMyParticipantId($val)
    {
        $this->_propDict["myParticipantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the toneInfo
    *
    * @return ToneInfo The toneInfo
    */
    public function getToneInfo()
    {
        if (array_key_exists("toneInfo", $this->_propDict)) {
            if (is_a($this->_propDict["toneInfo"], "Microsoft\Graph\Beta\Model\ToneInfo")) {
                return $this->_propDict["toneInfo"];
            } else {
                $this->_propDict["toneInfo"] = new ToneInfo($this->_propDict["toneInfo"]);
                return $this->_propDict["toneInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the toneInfo
    *
    * @param ToneInfo $val The toneInfo
    *
    * @return Call
    */
    public function setToneInfo($val)
    {
        $this->_propDict["toneInfo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the participants
     *
     * @return array The participants
     */
    public function getParticipants()
    {
        if (array_key_exists("participants", $this->_propDict)) {
           return $this->_propDict["participants"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the participants
    *
    * @param Participant $val The participants
    *
    * @return Call
    */
    public function setParticipants($val)
    {
		$this->_propDict["participants"] = $val;
        return $this;
    }
    

     /** 
     * Gets the audioRoutingGroups
     *
     * @return array The audioRoutingGroups
     */
    public function getAudioRoutingGroups()
    {
        if (array_key_exists("audioRoutingGroups", $this->_propDict)) {
           return $this->_propDict["audioRoutingGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the audioRoutingGroups
    *
    * @param AudioRoutingGroup $val The audioRoutingGroups
    *
    * @return Call
    */
    public function setAudioRoutingGroups($val)
    {
		$this->_propDict["audioRoutingGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    *
    * @param CommsOperation $val The operations
    *
    * @return Call
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    
}