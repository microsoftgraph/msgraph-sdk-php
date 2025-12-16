<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OnlineMeetingBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new OnlineMeetingBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnlineMeetingBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnlineMeetingBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.onlineMeeting': return new OnlineMeeting();
                case '#microsoft.graph.virtualEventSession': return new VirtualEventSession();
            }
        }
        return new OnlineMeetingBase();
    }

    /**
     * Gets the allowAttendeeToEnableCamera property value. Indicates whether attendees can turn on their camera.
     * @return bool|null
    */
    public function getAllowAttendeeToEnableCamera(): ?bool {
        $val = $this->getBackingStore()->get('allowAttendeeToEnableCamera');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAttendeeToEnableCamera'");
    }

    /**
     * Gets the allowAttendeeToEnableMic property value. Indicates whether attendees can turn on their microphone.
     * @return bool|null
    */
    public function getAllowAttendeeToEnableMic(): ?bool {
        $val = $this->getBackingStore()->get('allowAttendeeToEnableMic');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAttendeeToEnableMic'");
    }

    /**
     * Gets the allowBreakoutRooms property value. Indicates whether breakout rooms are enabled for the meeting.
     * @return bool|null
    */
    public function getAllowBreakoutRooms(): ?bool {
        $val = $this->getBackingStore()->get('allowBreakoutRooms');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowBreakoutRooms'");
    }

    /**
     * Gets the allowCopyingAndSharingMeetingContent property value. Indicates whether the ability to copy and share meeting content is enabled for the meeting.
     * @return bool|null
    */
    public function getAllowCopyingAndSharingMeetingContent(): ?bool {
        $val = $this->getBackingStore()->get('allowCopyingAndSharingMeetingContent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowCopyingAndSharingMeetingContent'");
    }

    /**
     * Gets the allowedLobbyAdmitters property value. Specifies the users who can admit from the lobby. The possible values are: organizerAndCoOrganizersAndPresenters, organizerAndCoOrganizers, unknownFutureValue.
     * @return AllowedLobbyAdmitterRoles|null
    */
    public function getAllowedLobbyAdmitters(): ?AllowedLobbyAdmitterRoles {
        $val = $this->getBackingStore()->get('allowedLobbyAdmitters');
        if (is_null($val) || $val instanceof AllowedLobbyAdmitterRoles) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedLobbyAdmitters'");
    }

    /**
     * Gets the allowedPresenters property value. Specifies who can be a presenter in a meeting. The possible values are: everyone, organization, roleIsPresenter, organizer, unknownFutureValue. Inherited from onlineMeetingBase.
     * @return OnlineMeetingPresenters|null
    */
    public function getAllowedPresenters(): ?OnlineMeetingPresenters {
        $val = $this->getBackingStore()->get('allowedPresenters');
        if (is_null($val) || $val instanceof OnlineMeetingPresenters) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedPresenters'");
    }

    /**
     * Gets the allowLiveShare property value. Indicates whether live share is enabled for the meeting. The possible values are: enabled, disabled, unknownFutureValue.
     * @return MeetingLiveShareOptions|null
    */
    public function getAllowLiveShare(): ?MeetingLiveShareOptions {
        $val = $this->getBackingStore()->get('allowLiveShare');
        if (is_null($val) || $val instanceof MeetingLiveShareOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowLiveShare'");
    }

    /**
     * Gets the allowMeetingChat property value. Specifies the mode of the meeting chat.
     * @return MeetingChatMode|null
    */
    public function getAllowMeetingChat(): ?MeetingChatMode {
        $val = $this->getBackingStore()->get('allowMeetingChat');
        if (is_null($val) || $val instanceof MeetingChatMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowMeetingChat'");
    }

    /**
     * Gets the allowParticipantsToChangeName property value. Specifies if participants are allowed to rename themselves in an instance of the meeting.
     * @return bool|null
    */
    public function getAllowParticipantsToChangeName(): ?bool {
        $val = $this->getBackingStore()->get('allowParticipantsToChangeName');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowParticipantsToChangeName'");
    }

    /**
     * Gets the allowPowerPointSharing property value. Indicates whether PowerPoint live is enabled for the meeting.
     * @return bool|null
    */
    public function getAllowPowerPointSharing(): ?bool {
        $val = $this->getBackingStore()->get('allowPowerPointSharing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowPowerPointSharing'");
    }

    /**
     * Gets the allowRecording property value. Indicates whether recording is enabled for the meeting.
     * @return bool|null
    */
    public function getAllowRecording(): ?bool {
        $val = $this->getBackingStore()->get('allowRecording');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowRecording'");
    }

    /**
     * Gets the allowTeamworkReactions property value. Indicates if Teams reactions are enabled for the meeting.
     * @return bool|null
    */
    public function getAllowTeamworkReactions(): ?bool {
        $val = $this->getBackingStore()->get('allowTeamworkReactions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowTeamworkReactions'");
    }

    /**
     * Gets the allowTranscription property value. Indicates whether transcription is enabled for the meeting.
     * @return bool|null
    */
    public function getAllowTranscription(): ?bool {
        $val = $this->getBackingStore()->get('allowTranscription');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowTranscription'");
    }

    /**
     * Gets the allowWhiteboard property value. Indicates whether whiteboard is enabled for the meeting.
     * @return bool|null
    */
    public function getAllowWhiteboard(): ?bool {
        $val = $this->getBackingStore()->get('allowWhiteboard');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowWhiteboard'");
    }

    /**
     * Gets the attendanceReports property value. The attendance reports of an online meeting. Read-only.
     * @return array<MeetingAttendanceReport>|null
    */
    public function getAttendanceReports(): ?array {
        $val = $this->getBackingStore()->get('attendanceReports');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MeetingAttendanceReport::class);
            /** @var array<MeetingAttendanceReport>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attendanceReports'");
    }

    /**
     * Gets the audioConferencing property value. The phone access (dial-in) information for an online meeting. Read-only.
     * @return AudioConferencing|null
    */
    public function getAudioConferencing(): ?AudioConferencing {
        $val = $this->getBackingStore()->get('audioConferencing');
        if (is_null($val) || $val instanceof AudioConferencing) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audioConferencing'");
    }

    /**
     * Gets the chatInfo property value. The chat information associated with this online meeting.
     * @return ChatInfo|null
    */
    public function getChatInfo(): ?ChatInfo {
        $val = $this->getBackingStore()->get('chatInfo');
        if (is_null($val) || $val instanceof ChatInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chatInfo'");
    }

    /**
     * Gets the chatRestrictions property value. Specifies the configuration settings for meeting chat restrictions.
     * @return ChatRestrictions|null
    */
    public function getChatRestrictions(): ?ChatRestrictions {
        $val = $this->getBackingStore()->get('chatRestrictions');
        if (is_null($val) || $val instanceof ChatRestrictions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chatRestrictions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAttendeeToEnableCamera' => fn(ParseNode $n) => $o->setAllowAttendeeToEnableCamera($n->getBooleanValue()),
            'allowAttendeeToEnableMic' => fn(ParseNode $n) => $o->setAllowAttendeeToEnableMic($n->getBooleanValue()),
            'allowBreakoutRooms' => fn(ParseNode $n) => $o->setAllowBreakoutRooms($n->getBooleanValue()),
            'allowCopyingAndSharingMeetingContent' => fn(ParseNode $n) => $o->setAllowCopyingAndSharingMeetingContent($n->getBooleanValue()),
            'allowedLobbyAdmitters' => fn(ParseNode $n) => $o->setAllowedLobbyAdmitters($n->getEnumValue(AllowedLobbyAdmitterRoles::class)),
            'allowedPresenters' => fn(ParseNode $n) => $o->setAllowedPresenters($n->getEnumValue(OnlineMeetingPresenters::class)),
            'allowLiveShare' => fn(ParseNode $n) => $o->setAllowLiveShare($n->getEnumValue(MeetingLiveShareOptions::class)),
            'allowMeetingChat' => fn(ParseNode $n) => $o->setAllowMeetingChat($n->getEnumValue(MeetingChatMode::class)),
            'allowParticipantsToChangeName' => fn(ParseNode $n) => $o->setAllowParticipantsToChangeName($n->getBooleanValue()),
            'allowPowerPointSharing' => fn(ParseNode $n) => $o->setAllowPowerPointSharing($n->getBooleanValue()),
            'allowRecording' => fn(ParseNode $n) => $o->setAllowRecording($n->getBooleanValue()),
            'allowTeamworkReactions' => fn(ParseNode $n) => $o->setAllowTeamworkReactions($n->getBooleanValue()),
            'allowTranscription' => fn(ParseNode $n) => $o->setAllowTranscription($n->getBooleanValue()),
            'allowWhiteboard' => fn(ParseNode $n) => $o->setAllowWhiteboard($n->getBooleanValue()),
            'attendanceReports' => fn(ParseNode $n) => $o->setAttendanceReports($n->getCollectionOfObjectValues([MeetingAttendanceReport::class, 'createFromDiscriminatorValue'])),
            'audioConferencing' => fn(ParseNode $n) => $o->setAudioConferencing($n->getObjectValue([AudioConferencing::class, 'createFromDiscriminatorValue'])),
            'chatInfo' => fn(ParseNode $n) => $o->setChatInfo($n->getObjectValue([ChatInfo::class, 'createFromDiscriminatorValue'])),
            'chatRestrictions' => fn(ParseNode $n) => $o->setChatRestrictions($n->getObjectValue([ChatRestrictions::class, 'createFromDiscriminatorValue'])),
            'isEndToEndEncryptionEnabled' => fn(ParseNode $n) => $o->setIsEndToEndEncryptionEnabled($n->getBooleanValue()),
            'isEntryExitAnnounced' => fn(ParseNode $n) => $o->setIsEntryExitAnnounced($n->getBooleanValue()),
            'joinInformation' => fn(ParseNode $n) => $o->setJoinInformation($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'joinMeetingIdSettings' => fn(ParseNode $n) => $o->setJoinMeetingIdSettings($n->getObjectValue([JoinMeetingIdSettings::class, 'createFromDiscriminatorValue'])),
            'joinWebUrl' => fn(ParseNode $n) => $o->setJoinWebUrl($n->getStringValue()),
            'lobbyBypassSettings' => fn(ParseNode $n) => $o->setLobbyBypassSettings($n->getObjectValue([LobbyBypassSettings::class, 'createFromDiscriminatorValue'])),
            'recordAutomatically' => fn(ParseNode $n) => $o->setRecordAutomatically($n->getBooleanValue()),
            'shareMeetingChatHistoryDefault' => fn(ParseNode $n) => $o->setShareMeetingChatHistoryDefault($n->getEnumValue(MeetingChatHistoryDefaultMode::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'videoTeleconferenceId' => fn(ParseNode $n) => $o->setVideoTeleconferenceId($n->getStringValue()),
            'watermarkProtection' => fn(ParseNode $n) => $o->setWatermarkProtection($n->getObjectValue([WatermarkProtectionValues::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEndToEndEncryptionEnabled property value. Indicates whether end-to-end encryption (E2EE) is enabled for the online meeting.
     * @return bool|null
    */
    public function getIsEndToEndEncryptionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEndToEndEncryptionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEndToEndEncryptionEnabled'");
    }

    /**
     * Gets the isEntryExitAnnounced property value. Indicates whether to announce when callers join or leave.
     * @return bool|null
    */
    public function getIsEntryExitAnnounced(): ?bool {
        $val = $this->getBackingStore()->get('isEntryExitAnnounced');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEntryExitAnnounced'");
    }

    /**
     * Gets the joinInformation property value. The join information in the language and locale variant specified in 'Accept-Language' request HTTP header. Read-only.
     * @return ItemBody|null
    */
    public function getJoinInformation(): ?ItemBody {
        $val = $this->getBackingStore()->get('joinInformation');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinInformation'");
    }

    /**
     * Gets the joinMeetingIdSettings property value. Specifies the joinMeetingId, the meeting passcode, and the requirement for the passcode. Once an onlineMeeting is created, the joinMeetingIdSettings can't be modified. To make any changes to this property, you must cancel this meeting and create a new one.
     * @return JoinMeetingIdSettings|null
    */
    public function getJoinMeetingIdSettings(): ?JoinMeetingIdSettings {
        $val = $this->getBackingStore()->get('joinMeetingIdSettings');
        if (is_null($val) || $val instanceof JoinMeetingIdSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinMeetingIdSettings'");
    }

    /**
     * Gets the joinWebUrl property value. The join URL of the online meeting. Read-only.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        $val = $this->getBackingStore()->get('joinWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinWebUrl'");
    }

    /**
     * Gets the lobbyBypassSettings property value. Specifies which participants can bypass the meeting lobby.
     * @return LobbyBypassSettings|null
    */
    public function getLobbyBypassSettings(): ?LobbyBypassSettings {
        $val = $this->getBackingStore()->get('lobbyBypassSettings');
        if (is_null($val) || $val instanceof LobbyBypassSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lobbyBypassSettings'");
    }

    /**
     * Gets the recordAutomatically property value. Indicates whether to record the meeting automatically.
     * @return bool|null
    */
    public function getRecordAutomatically(): ?bool {
        $val = $this->getBackingStore()->get('recordAutomatically');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordAutomatically'");
    }

    /**
     * Gets the shareMeetingChatHistoryDefault property value. Specifies whether meeting chat history is shared with participants.  The possible values are: all, none, unknownFutureValue.
     * @return MeetingChatHistoryDefaultMode|null
    */
    public function getShareMeetingChatHistoryDefault(): ?MeetingChatHistoryDefaultMode {
        $val = $this->getBackingStore()->get('shareMeetingChatHistoryDefault');
        if (is_null($val) || $val instanceof MeetingChatHistoryDefaultMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shareMeetingChatHistoryDefault'");
    }

    /**
     * Gets the subject property value. The subject of the online meeting.
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the videoTeleconferenceId property value. The video teleconferencing ID. Read-only.
     * @return string|null
    */
    public function getVideoTeleconferenceId(): ?string {
        $val = $this->getBackingStore()->get('videoTeleconferenceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'videoTeleconferenceId'");
    }

    /**
     * Gets the watermarkProtection property value. Specifies whether the client application should apply a watermark to a content type.
     * @return WatermarkProtectionValues|null
    */
    public function getWatermarkProtection(): ?WatermarkProtectionValues {
        $val = $this->getBackingStore()->get('watermarkProtection');
        if (is_null($val) || $val instanceof WatermarkProtectionValues) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'watermarkProtection'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAttendeeToEnableCamera', $this->getAllowAttendeeToEnableCamera());
        $writer->writeBooleanValue('allowAttendeeToEnableMic', $this->getAllowAttendeeToEnableMic());
        $writer->writeBooleanValue('allowBreakoutRooms', $this->getAllowBreakoutRooms());
        $writer->writeBooleanValue('allowCopyingAndSharingMeetingContent', $this->getAllowCopyingAndSharingMeetingContent());
        $writer->writeEnumValue('allowedLobbyAdmitters', $this->getAllowedLobbyAdmitters());
        $writer->writeEnumValue('allowedPresenters', $this->getAllowedPresenters());
        $writer->writeEnumValue('allowLiveShare', $this->getAllowLiveShare());
        $writer->writeEnumValue('allowMeetingChat', $this->getAllowMeetingChat());
        $writer->writeBooleanValue('allowParticipantsToChangeName', $this->getAllowParticipantsToChangeName());
        $writer->writeBooleanValue('allowPowerPointSharing', $this->getAllowPowerPointSharing());
        $writer->writeBooleanValue('allowRecording', $this->getAllowRecording());
        $writer->writeBooleanValue('allowTeamworkReactions', $this->getAllowTeamworkReactions());
        $writer->writeBooleanValue('allowTranscription', $this->getAllowTranscription());
        $writer->writeBooleanValue('allowWhiteboard', $this->getAllowWhiteboard());
        $writer->writeCollectionOfObjectValues('attendanceReports', $this->getAttendanceReports());
        $writer->writeObjectValue('audioConferencing', $this->getAudioConferencing());
        $writer->writeObjectValue('chatInfo', $this->getChatInfo());
        $writer->writeObjectValue('chatRestrictions', $this->getChatRestrictions());
        $writer->writeBooleanValue('isEndToEndEncryptionEnabled', $this->getIsEndToEndEncryptionEnabled());
        $writer->writeBooleanValue('isEntryExitAnnounced', $this->getIsEntryExitAnnounced());
        $writer->writeObjectValue('joinInformation', $this->getJoinInformation());
        $writer->writeObjectValue('joinMeetingIdSettings', $this->getJoinMeetingIdSettings());
        $writer->writeStringValue('joinWebUrl', $this->getJoinWebUrl());
        $writer->writeObjectValue('lobbyBypassSettings', $this->getLobbyBypassSettings());
        $writer->writeBooleanValue('recordAutomatically', $this->getRecordAutomatically());
        $writer->writeEnumValue('shareMeetingChatHistoryDefault', $this->getShareMeetingChatHistoryDefault());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeStringValue('videoTeleconferenceId', $this->getVideoTeleconferenceId());
        $writer->writeObjectValue('watermarkProtection', $this->getWatermarkProtection());
    }

    /**
     * Sets the allowAttendeeToEnableCamera property value. Indicates whether attendees can turn on their camera.
     * @param bool|null $value Value to set for the allowAttendeeToEnableCamera property.
    */
    public function setAllowAttendeeToEnableCamera(?bool $value): void {
        $this->getBackingStore()->set('allowAttendeeToEnableCamera', $value);
    }

    /**
     * Sets the allowAttendeeToEnableMic property value. Indicates whether attendees can turn on their microphone.
     * @param bool|null $value Value to set for the allowAttendeeToEnableMic property.
    */
    public function setAllowAttendeeToEnableMic(?bool $value): void {
        $this->getBackingStore()->set('allowAttendeeToEnableMic', $value);
    }

    /**
     * Sets the allowBreakoutRooms property value. Indicates whether breakout rooms are enabled for the meeting.
     * @param bool|null $value Value to set for the allowBreakoutRooms property.
    */
    public function setAllowBreakoutRooms(?bool $value): void {
        $this->getBackingStore()->set('allowBreakoutRooms', $value);
    }

    /**
     * Sets the allowCopyingAndSharingMeetingContent property value. Indicates whether the ability to copy and share meeting content is enabled for the meeting.
     * @param bool|null $value Value to set for the allowCopyingAndSharingMeetingContent property.
    */
    public function setAllowCopyingAndSharingMeetingContent(?bool $value): void {
        $this->getBackingStore()->set('allowCopyingAndSharingMeetingContent', $value);
    }

    /**
     * Sets the allowedLobbyAdmitters property value. Specifies the users who can admit from the lobby. The possible values are: organizerAndCoOrganizersAndPresenters, organizerAndCoOrganizers, unknownFutureValue.
     * @param AllowedLobbyAdmitterRoles|null $value Value to set for the allowedLobbyAdmitters property.
    */
    public function setAllowedLobbyAdmitters(?AllowedLobbyAdmitterRoles $value): void {
        $this->getBackingStore()->set('allowedLobbyAdmitters', $value);
    }

    /**
     * Sets the allowedPresenters property value. Specifies who can be a presenter in a meeting. The possible values are: everyone, organization, roleIsPresenter, organizer, unknownFutureValue. Inherited from onlineMeetingBase.
     * @param OnlineMeetingPresenters|null $value Value to set for the allowedPresenters property.
    */
    public function setAllowedPresenters(?OnlineMeetingPresenters $value): void {
        $this->getBackingStore()->set('allowedPresenters', $value);
    }

    /**
     * Sets the allowLiveShare property value. Indicates whether live share is enabled for the meeting. The possible values are: enabled, disabled, unknownFutureValue.
     * @param MeetingLiveShareOptions|null $value Value to set for the allowLiveShare property.
    */
    public function setAllowLiveShare(?MeetingLiveShareOptions $value): void {
        $this->getBackingStore()->set('allowLiveShare', $value);
    }

    /**
     * Sets the allowMeetingChat property value. Specifies the mode of the meeting chat.
     * @param MeetingChatMode|null $value Value to set for the allowMeetingChat property.
    */
    public function setAllowMeetingChat(?MeetingChatMode $value): void {
        $this->getBackingStore()->set('allowMeetingChat', $value);
    }

    /**
     * Sets the allowParticipantsToChangeName property value. Specifies if participants are allowed to rename themselves in an instance of the meeting.
     * @param bool|null $value Value to set for the allowParticipantsToChangeName property.
    */
    public function setAllowParticipantsToChangeName(?bool $value): void {
        $this->getBackingStore()->set('allowParticipantsToChangeName', $value);
    }

    /**
     * Sets the allowPowerPointSharing property value. Indicates whether PowerPoint live is enabled for the meeting.
     * @param bool|null $value Value to set for the allowPowerPointSharing property.
    */
    public function setAllowPowerPointSharing(?bool $value): void {
        $this->getBackingStore()->set('allowPowerPointSharing', $value);
    }

    /**
     * Sets the allowRecording property value. Indicates whether recording is enabled for the meeting.
     * @param bool|null $value Value to set for the allowRecording property.
    */
    public function setAllowRecording(?bool $value): void {
        $this->getBackingStore()->set('allowRecording', $value);
    }

    /**
     * Sets the allowTeamworkReactions property value. Indicates if Teams reactions are enabled for the meeting.
     * @param bool|null $value Value to set for the allowTeamworkReactions property.
    */
    public function setAllowTeamworkReactions(?bool $value): void {
        $this->getBackingStore()->set('allowTeamworkReactions', $value);
    }

    /**
     * Sets the allowTranscription property value. Indicates whether transcription is enabled for the meeting.
     * @param bool|null $value Value to set for the allowTranscription property.
    */
    public function setAllowTranscription(?bool $value): void {
        $this->getBackingStore()->set('allowTranscription', $value);
    }

    /**
     * Sets the allowWhiteboard property value. Indicates whether whiteboard is enabled for the meeting.
     * @param bool|null $value Value to set for the allowWhiteboard property.
    */
    public function setAllowWhiteboard(?bool $value): void {
        $this->getBackingStore()->set('allowWhiteboard', $value);
    }

    /**
     * Sets the attendanceReports property value. The attendance reports of an online meeting. Read-only.
     * @param array<MeetingAttendanceReport>|null $value Value to set for the attendanceReports property.
    */
    public function setAttendanceReports(?array $value): void {
        $this->getBackingStore()->set('attendanceReports', $value);
    }

    /**
     * Sets the audioConferencing property value. The phone access (dial-in) information for an online meeting. Read-only.
     * @param AudioConferencing|null $value Value to set for the audioConferencing property.
    */
    public function setAudioConferencing(?AudioConferencing $value): void {
        $this->getBackingStore()->set('audioConferencing', $value);
    }

    /**
     * Sets the chatInfo property value. The chat information associated with this online meeting.
     * @param ChatInfo|null $value Value to set for the chatInfo property.
    */
    public function setChatInfo(?ChatInfo $value): void {
        $this->getBackingStore()->set('chatInfo', $value);
    }

    /**
     * Sets the chatRestrictions property value. Specifies the configuration settings for meeting chat restrictions.
     * @param ChatRestrictions|null $value Value to set for the chatRestrictions property.
    */
    public function setChatRestrictions(?ChatRestrictions $value): void {
        $this->getBackingStore()->set('chatRestrictions', $value);
    }

    /**
     * Sets the isEndToEndEncryptionEnabled property value. Indicates whether end-to-end encryption (E2EE) is enabled for the online meeting.
     * @param bool|null $value Value to set for the isEndToEndEncryptionEnabled property.
    */
    public function setIsEndToEndEncryptionEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEndToEndEncryptionEnabled', $value);
    }

    /**
     * Sets the isEntryExitAnnounced property value. Indicates whether to announce when callers join or leave.
     * @param bool|null $value Value to set for the isEntryExitAnnounced property.
    */
    public function setIsEntryExitAnnounced(?bool $value): void {
        $this->getBackingStore()->set('isEntryExitAnnounced', $value);
    }

    /**
     * Sets the joinInformation property value. The join information in the language and locale variant specified in 'Accept-Language' request HTTP header. Read-only.
     * @param ItemBody|null $value Value to set for the joinInformation property.
    */
    public function setJoinInformation(?ItemBody $value): void {
        $this->getBackingStore()->set('joinInformation', $value);
    }

    /**
     * Sets the joinMeetingIdSettings property value. Specifies the joinMeetingId, the meeting passcode, and the requirement for the passcode. Once an onlineMeeting is created, the joinMeetingIdSettings can't be modified. To make any changes to this property, you must cancel this meeting and create a new one.
     * @param JoinMeetingIdSettings|null $value Value to set for the joinMeetingIdSettings property.
    */
    public function setJoinMeetingIdSettings(?JoinMeetingIdSettings $value): void {
        $this->getBackingStore()->set('joinMeetingIdSettings', $value);
    }

    /**
     * Sets the joinWebUrl property value. The join URL of the online meeting. Read-only.
     * @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value): void {
        $this->getBackingStore()->set('joinWebUrl', $value);
    }

    /**
     * Sets the lobbyBypassSettings property value. Specifies which participants can bypass the meeting lobby.
     * @param LobbyBypassSettings|null $value Value to set for the lobbyBypassSettings property.
    */
    public function setLobbyBypassSettings(?LobbyBypassSettings $value): void {
        $this->getBackingStore()->set('lobbyBypassSettings', $value);
    }

    /**
     * Sets the recordAutomatically property value. Indicates whether to record the meeting automatically.
     * @param bool|null $value Value to set for the recordAutomatically property.
    */
    public function setRecordAutomatically(?bool $value): void {
        $this->getBackingStore()->set('recordAutomatically', $value);
    }

    /**
     * Sets the shareMeetingChatHistoryDefault property value. Specifies whether meeting chat history is shared with participants.  The possible values are: all, none, unknownFutureValue.
     * @param MeetingChatHistoryDefaultMode|null $value Value to set for the shareMeetingChatHistoryDefault property.
    */
    public function setShareMeetingChatHistoryDefault(?MeetingChatHistoryDefaultMode $value): void {
        $this->getBackingStore()->set('shareMeetingChatHistoryDefault', $value);
    }

    /**
     * Sets the subject property value. The subject of the online meeting.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the videoTeleconferenceId property value. The video teleconferencing ID. Read-only.
     * @param string|null $value Value to set for the videoTeleconferenceId property.
    */
    public function setVideoTeleconferenceId(?string $value): void {
        $this->getBackingStore()->set('videoTeleconferenceId', $value);
    }

    /**
     * Sets the watermarkProtection property value. Specifies whether the client application should apply a watermark to a content type.
     * @param WatermarkProtectionValues|null $value Value to set for the watermarkProtection property.
    */
    public function setWatermarkProtection(?WatermarkProtectionValues $value): void {
        $this->getBackingStore()->set('watermarkProtection', $value);
    }

}
