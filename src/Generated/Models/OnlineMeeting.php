<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class OnlineMeeting extends Entity implements Parsable 
{
    /**
     * @var bool|null $allowAttendeeToEnableCamera Indicates whether attendees can turn on their camera.
    */
    private ?bool $allowAttendeeToEnableCamera = null;
    
    /**
     * @var bool|null $allowAttendeeToEnableMic Indicates whether attendees can turn on their microphone.
    */
    private ?bool $allowAttendeeToEnableMic = null;
    
    /**
     * @var OnlineMeetingPresenters|null $allowedPresenters Specifies who can be a presenter in a meeting. Possible values are listed in the following table.
    */
    private ?OnlineMeetingPresenters $allowedPresenters = null;
    
    /**
     * @var MeetingChatMode|null $allowMeetingChat Specifies the mode of meeting chat.
    */
    private ?MeetingChatMode $allowMeetingChat = null;
    
    /**
     * @var bool|null $allowTeamworkReactions Indicates whether Teams reactions are enabled for the meeting.
    */
    private ?bool $allowTeamworkReactions = null;
    
    /**
     * @var array<MeetingAttendanceReport>|null $attendanceReports The attendance reports of an online meeting. Read-only.
    */
    private ?array $attendanceReports = null;
    
    /**
     * @var StreamInterface|null $attendeeReport The content stream of the attendee report of a Microsoft Teams live event. Read-only.
    */
    private ?StreamInterface $attendeeReport = null;
    
    /**
     * @var AudioConferencing|null $audioConferencing The phone access (dial-in) information for an online meeting. Read-only.
    */
    private ?AudioConferencing $audioConferencing = null;
    
    /**
     * @var BroadcastMeetingSettings|null $broadcastSettings Settings related to a live event.
    */
    private ?BroadcastMeetingSettings $broadcastSettings = null;
    
    /**
     * @var ChatInfo|null $chatInfo The chat information associated with this online meeting.
    */
    private ?ChatInfo $chatInfo = null;
    
    /**
     * @var DateTime|null $creationDateTime The meeting creation time in UTC. Read-only.
    */
    private ?DateTime $creationDateTime = null;
    
    /**
     * @var DateTime|null $endDateTime The meeting end time in UTC.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var string|null $externalId The externalId property
    */
    private ?string $externalId = null;
    
    /**
     * @var bool|null $isBroadcast Indicates if this is a Teams live event.
    */
    private ?bool $isBroadcast = null;
    
    /**
     * @var bool|null $isEntryExitAnnounced Indicates whether to announce when callers join or leave.
    */
    private ?bool $isEntryExitAnnounced = null;
    
    /**
     * @var ItemBody|null $joinInformation The join information in the language and locale variant specified in the Accept-Language request HTTP header. Read-only.
    */
    private ?ItemBody $joinInformation = null;
    
    /**
     * @var string|null $joinWebUrl The join URL of the online meeting. Read-only.
    */
    private ?string $joinWebUrl = null;
    
    /**
     * @var LobbyBypassSettings|null $lobbyBypassSettings Specifies which participants can bypass the meeting   lobby.
    */
    private ?LobbyBypassSettings $lobbyBypassSettings = null;
    
    /**
     * @var MeetingParticipants|null $participants The participants associated with the online meeting.  This includes the organizer and the attendees.
    */
    private ?MeetingParticipants $participants = null;
    
    /**
     * @var bool|null $recordAutomatically Indicates whether to record the meeting automatically.
    */
    private ?bool $recordAutomatically = null;
    
    /**
     * @var DateTime|null $startDateTime The meeting start time in UTC.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $subject The subject of the online meeting.
    */
    private ?string $subject = null;
    
    /**
     * @var string|null $videoTeleconferenceId The video teleconferencing ID. Read-only.
    */
    private ?string $videoTeleconferenceId = null;
    
    /**
     * Instantiates a new OnlineMeeting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onlineMeeting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnlineMeeting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnlineMeeting {
        return new OnlineMeeting();
    }

    /**
     * Gets the allowAttendeeToEnableCamera property value. Indicates whether attendees can turn on their camera.
     * @return bool|null
    */
    public function getAllowAttendeeToEnableCamera(): ?bool {
        return $this->allowAttendeeToEnableCamera;
    }

    /**
     * Gets the allowAttendeeToEnableMic property value. Indicates whether attendees can turn on their microphone.
     * @return bool|null
    */
    public function getAllowAttendeeToEnableMic(): ?bool {
        return $this->allowAttendeeToEnableMic;
    }

    /**
     * Gets the allowedPresenters property value. Specifies who can be a presenter in a meeting. Possible values are listed in the following table.
     * @return OnlineMeetingPresenters|null
    */
    public function getAllowedPresenters(): ?OnlineMeetingPresenters {
        return $this->allowedPresenters;
    }

    /**
     * Gets the allowMeetingChat property value. Specifies the mode of meeting chat.
     * @return MeetingChatMode|null
    */
    public function getAllowMeetingChat(): ?MeetingChatMode {
        return $this->allowMeetingChat;
    }

    /**
     * Gets the allowTeamworkReactions property value. Indicates whether Teams reactions are enabled for the meeting.
     * @return bool|null
    */
    public function getAllowTeamworkReactions(): ?bool {
        return $this->allowTeamworkReactions;
    }

    /**
     * Gets the attendanceReports property value. The attendance reports of an online meeting. Read-only.
     * @return array<MeetingAttendanceReport>|null
    */
    public function getAttendanceReports(): ?array {
        return $this->attendanceReports;
    }

    /**
     * Gets the attendeeReport property value. The content stream of the attendee report of a Microsoft Teams live event. Read-only.
     * @return StreamInterface|null
    */
    public function getAttendeeReport(): ?StreamInterface {
        return $this->attendeeReport;
    }

    /**
     * Gets the audioConferencing property value. The phone access (dial-in) information for an online meeting. Read-only.
     * @return AudioConferencing|null
    */
    public function getAudioConferencing(): ?AudioConferencing {
        return $this->audioConferencing;
    }

    /**
     * Gets the broadcastSettings property value. Settings related to a live event.
     * @return BroadcastMeetingSettings|null
    */
    public function getBroadcastSettings(): ?BroadcastMeetingSettings {
        return $this->broadcastSettings;
    }

    /**
     * Gets the chatInfo property value. The chat information associated with this online meeting.
     * @return ChatInfo|null
    */
    public function getChatInfo(): ?ChatInfo {
        return $this->chatInfo;
    }

    /**
     * Gets the creationDateTime property value. The meeting creation time in UTC. Read-only.
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->creationDateTime;
    }

    /**
     * Gets the endDateTime property value. The meeting end time in UTC.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * Gets the externalId property value. The externalId property
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAttendeeToEnableCamera' => function (ParseNode $n) use ($o) { $o->setAllowAttendeeToEnableCamera($n->getBooleanValue()); },
            'allowAttendeeToEnableMic' => function (ParseNode $n) use ($o) { $o->setAllowAttendeeToEnableMic($n->getBooleanValue()); },
            'allowedPresenters' => function (ParseNode $n) use ($o) { $o->setAllowedPresenters($n->getEnumValue(OnlineMeetingPresenters::class)); },
            'allowMeetingChat' => function (ParseNode $n) use ($o) { $o->setAllowMeetingChat($n->getEnumValue(MeetingChatMode::class)); },
            'allowTeamworkReactions' => function (ParseNode $n) use ($o) { $o->setAllowTeamworkReactions($n->getBooleanValue()); },
            'attendanceReports' => function (ParseNode $n) use ($o) { $o->setAttendanceReports($n->getCollectionOfObjectValues(array(MeetingAttendanceReport::class, 'createFromDiscriminatorValue'))); },
            'attendeeReport' => function (ParseNode $n) use ($o) { $o->setAttendeeReport($n->getBinaryContent()); },
            'audioConferencing' => function (ParseNode $n) use ($o) { $o->setAudioConferencing($n->getObjectValue(array(AudioConferencing::class, 'createFromDiscriminatorValue'))); },
            'broadcastSettings' => function (ParseNode $n) use ($o) { $o->setBroadcastSettings($n->getObjectValue(array(BroadcastMeetingSettings::class, 'createFromDiscriminatorValue'))); },
            'chatInfo' => function (ParseNode $n) use ($o) { $o->setChatInfo($n->getObjectValue(array(ChatInfo::class, 'createFromDiscriminatorValue'))); },
            'creationDateTime' => function (ParseNode $n) use ($o) { $o->setCreationDateTime($n->getDateTimeValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'externalId' => function (ParseNode $n) use ($o) { $o->setExternalId($n->getStringValue()); },
            'isBroadcast' => function (ParseNode $n) use ($o) { $o->setIsBroadcast($n->getBooleanValue()); },
            'isEntryExitAnnounced' => function (ParseNode $n) use ($o) { $o->setIsEntryExitAnnounced($n->getBooleanValue()); },
            'joinInformation' => function (ParseNode $n) use ($o) { $o->setJoinInformation($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
            'joinWebUrl' => function (ParseNode $n) use ($o) { $o->setJoinWebUrl($n->getStringValue()); },
            'lobbyBypassSettings' => function (ParseNode $n) use ($o) { $o->setLobbyBypassSettings($n->getObjectValue(array(LobbyBypassSettings::class, 'createFromDiscriminatorValue'))); },
            'participants' => function (ParseNode $n) use ($o) { $o->setParticipants($n->getObjectValue(array(MeetingParticipants::class, 'createFromDiscriminatorValue'))); },
            'recordAutomatically' => function (ParseNode $n) use ($o) { $o->setRecordAutomatically($n->getBooleanValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
            'videoTeleconferenceId' => function (ParseNode $n) use ($o) { $o->setVideoTeleconferenceId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isBroadcast property value. Indicates if this is a Teams live event.
     * @return bool|null
    */
    public function getIsBroadcast(): ?bool {
        return $this->isBroadcast;
    }

    /**
     * Gets the isEntryExitAnnounced property value. Indicates whether to announce when callers join or leave.
     * @return bool|null
    */
    public function getIsEntryExitAnnounced(): ?bool {
        return $this->isEntryExitAnnounced;
    }

    /**
     * Gets the joinInformation property value. The join information in the language and locale variant specified in the Accept-Language request HTTP header. Read-only.
     * @return ItemBody|null
    */
    public function getJoinInformation(): ?ItemBody {
        return $this->joinInformation;
    }

    /**
     * Gets the joinWebUrl property value. The join URL of the online meeting. Read-only.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        return $this->joinWebUrl;
    }

    /**
     * Gets the lobbyBypassSettings property value. Specifies which participants can bypass the meeting   lobby.
     * @return LobbyBypassSettings|null
    */
    public function getLobbyBypassSettings(): ?LobbyBypassSettings {
        return $this->lobbyBypassSettings;
    }

    /**
     * Gets the participants property value. The participants associated with the online meeting.  This includes the organizer and the attendees.
     * @return MeetingParticipants|null
    */
    public function getParticipants(): ?MeetingParticipants {
        return $this->participants;
    }

    /**
     * Gets the recordAutomatically property value. Indicates whether to record the meeting automatically.
     * @return bool|null
    */
    public function getRecordAutomatically(): ?bool {
        return $this->recordAutomatically;
    }

    /**
     * Gets the startDateTime property value. The meeting start time in UTC.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the subject property value. The subject of the online meeting.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the videoTeleconferenceId property value. The video teleconferencing ID. Read-only.
     * @return string|null
    */
    public function getVideoTeleconferenceId(): ?string {
        return $this->videoTeleconferenceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAttendeeToEnableCamera', $this->allowAttendeeToEnableCamera);
        $writer->writeBooleanValue('allowAttendeeToEnableMic', $this->allowAttendeeToEnableMic);
        $writer->writeEnumValue('allowedPresenters', $this->allowedPresenters);
        $writer->writeEnumValue('allowMeetingChat', $this->allowMeetingChat);
        $writer->writeBooleanValue('allowTeamworkReactions', $this->allowTeamworkReactions);
        $writer->writeCollectionOfObjectValues('attendanceReports', $this->attendanceReports);
        $writer->writeBinaryContent('attendeeReport', $this->attendeeReport);
        $writer->writeObjectValue('audioConferencing', $this->audioConferencing);
        $writer->writeObjectValue('broadcastSettings', $this->broadcastSettings);
        $writer->writeObjectValue('chatInfo', $this->chatInfo);
        $writer->writeDateTimeValue('creationDateTime', $this->creationDateTime);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeBooleanValue('isBroadcast', $this->isBroadcast);
        $writer->writeBooleanValue('isEntryExitAnnounced', $this->isEntryExitAnnounced);
        $writer->writeObjectValue('joinInformation', $this->joinInformation);
        $writer->writeStringValue('joinWebUrl', $this->joinWebUrl);
        $writer->writeObjectValue('lobbyBypassSettings', $this->lobbyBypassSettings);
        $writer->writeObjectValue('participants', $this->participants);
        $writer->writeBooleanValue('recordAutomatically', $this->recordAutomatically);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeStringValue('videoTeleconferenceId', $this->videoTeleconferenceId);
    }

    /**
     * Sets the allowAttendeeToEnableCamera property value. Indicates whether attendees can turn on their camera.
     *  @param bool|null $value Value to set for the allowAttendeeToEnableCamera property.
    */
    public function setAllowAttendeeToEnableCamera(?bool $value ): void {
        $this->allowAttendeeToEnableCamera = $value;
    }

    /**
     * Sets the allowAttendeeToEnableMic property value. Indicates whether attendees can turn on their microphone.
     *  @param bool|null $value Value to set for the allowAttendeeToEnableMic property.
    */
    public function setAllowAttendeeToEnableMic(?bool $value ): void {
        $this->allowAttendeeToEnableMic = $value;
    }

    /**
     * Sets the allowedPresenters property value. Specifies who can be a presenter in a meeting. Possible values are listed in the following table.
     *  @param OnlineMeetingPresenters|null $value Value to set for the allowedPresenters property.
    */
    public function setAllowedPresenters(?OnlineMeetingPresenters $value ): void {
        $this->allowedPresenters = $value;
    }

    /**
     * Sets the allowMeetingChat property value. Specifies the mode of meeting chat.
     *  @param MeetingChatMode|null $value Value to set for the allowMeetingChat property.
    */
    public function setAllowMeetingChat(?MeetingChatMode $value ): void {
        $this->allowMeetingChat = $value;
    }

    /**
     * Sets the allowTeamworkReactions property value. Indicates whether Teams reactions are enabled for the meeting.
     *  @param bool|null $value Value to set for the allowTeamworkReactions property.
    */
    public function setAllowTeamworkReactions(?bool $value ): void {
        $this->allowTeamworkReactions = $value;
    }

    /**
     * Sets the attendanceReports property value. The attendance reports of an online meeting. Read-only.
     *  @param array<MeetingAttendanceReport>|null $value Value to set for the attendanceReports property.
    */
    public function setAttendanceReports(?array $value ): void {
        $this->attendanceReports = $value;
    }

    /**
     * Sets the attendeeReport property value. The content stream of the attendee report of a Microsoft Teams live event. Read-only.
     *  @param StreamInterface|null $value Value to set for the attendeeReport property.
    */
    public function setAttendeeReport(?StreamInterface $value ): void {
        $this->attendeeReport = $value;
    }

    /**
     * Sets the audioConferencing property value. The phone access (dial-in) information for an online meeting. Read-only.
     *  @param AudioConferencing|null $value Value to set for the audioConferencing property.
    */
    public function setAudioConferencing(?AudioConferencing $value ): void {
        $this->audioConferencing = $value;
    }

    /**
     * Sets the broadcastSettings property value. Settings related to a live event.
     *  @param BroadcastMeetingSettings|null $value Value to set for the broadcastSettings property.
    */
    public function setBroadcastSettings(?BroadcastMeetingSettings $value ): void {
        $this->broadcastSettings = $value;
    }

    /**
     * Sets the chatInfo property value. The chat information associated with this online meeting.
     *  @param ChatInfo|null $value Value to set for the chatInfo property.
    */
    public function setChatInfo(?ChatInfo $value ): void {
        $this->chatInfo = $value;
    }

    /**
     * Sets the creationDateTime property value. The meeting creation time in UTC. Read-only.
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value ): void {
        $this->creationDateTime = $value;
    }

    /**
     * Sets the endDateTime property value. The meeting end time in UTC.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the externalId property value. The externalId property
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the isBroadcast property value. Indicates if this is a Teams live event.
     *  @param bool|null $value Value to set for the isBroadcast property.
    */
    public function setIsBroadcast(?bool $value ): void {
        $this->isBroadcast = $value;
    }

    /**
     * Sets the isEntryExitAnnounced property value. Indicates whether to announce when callers join or leave.
     *  @param bool|null $value Value to set for the isEntryExitAnnounced property.
    */
    public function setIsEntryExitAnnounced(?bool $value ): void {
        $this->isEntryExitAnnounced = $value;
    }

    /**
     * Sets the joinInformation property value. The join information in the language and locale variant specified in the Accept-Language request HTTP header. Read-only.
     *  @param ItemBody|null $value Value to set for the joinInformation property.
    */
    public function setJoinInformation(?ItemBody $value ): void {
        $this->joinInformation = $value;
    }

    /**
     * Sets the joinWebUrl property value. The join URL of the online meeting. Read-only.
     *  @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value ): void {
        $this->joinWebUrl = $value;
    }

    /**
     * Sets the lobbyBypassSettings property value. Specifies which participants can bypass the meeting   lobby.
     *  @param LobbyBypassSettings|null $value Value to set for the lobbyBypassSettings property.
    */
    public function setLobbyBypassSettings(?LobbyBypassSettings $value ): void {
        $this->lobbyBypassSettings = $value;
    }

    /**
     * Sets the participants property value. The participants associated with the online meeting.  This includes the organizer and the attendees.
     *  @param MeetingParticipants|null $value Value to set for the participants property.
    */
    public function setParticipants(?MeetingParticipants $value ): void {
        $this->participants = $value;
    }

    /**
     * Sets the recordAutomatically property value. Indicates whether to record the meeting automatically.
     *  @param bool|null $value Value to set for the recordAutomatically property.
    */
    public function setRecordAutomatically(?bool $value ): void {
        $this->recordAutomatically = $value;
    }

    /**
     * Sets the startDateTime property value. The meeting start time in UTC.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the subject property value. The subject of the online meeting.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the videoTeleconferenceId property value. The video teleconferencing ID. Read-only.
     *  @param string|null $value Value to set for the videoTeleconferenceId property.
    */
    public function setVideoTeleconferenceId(?string $value ): void {
        $this->videoTeleconferenceId = $value;
    }

}
