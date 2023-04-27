<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Call extends Entity implements Parsable 
{
    /**
     * Instantiates a new Call and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Call
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Call {
        return new Call();
    }

    /**
     * Gets the audioRoutingGroups property value. The audioRoutingGroups property
     * @return array<AudioRoutingGroup>|null
    */
    public function getAudioRoutingGroups(): ?array {
        return $this->getBackingStore()->get('audioRoutingGroups');
    }

    /**
     * Gets the callbackUri property value. The callback URL on which callbacks will be delivered. Must be https.
     * @return string|null
    */
    public function getCallbackUri(): ?string {
        return $this->getBackingStore()->get('callbackUri');
    }

    /**
     * Gets the callChainId property value. A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     * @return string|null
    */
    public function getCallChainId(): ?string {
        return $this->getBackingStore()->get('callChainId');
    }

    /**
     * Gets the callOptions property value. Contains the optional features for the call.
     * @return CallOptions|null
    */
    public function getCallOptions(): ?CallOptions {
        return $this->getBackingStore()->get('callOptions');
    }

    /**
     * Gets the callRoutes property value. The routing information on how the call was retargeted. Read-only.
     * @return array<CallRoute>|null
    */
    public function getCallRoutes(): ?array {
        return $this->getBackingStore()->get('callRoutes');
    }

    /**
     * Gets the chatInfo property value. The chat information. Required information for joining a meeting.
     * @return ChatInfo|null
    */
    public function getChatInfo(): ?ChatInfo {
        return $this->getBackingStore()->get('chatInfo');
    }

    /**
     * Gets the contentSharingSessions property value. The contentSharingSessions property
     * @return array<ContentSharingSession>|null
    */
    public function getContentSharingSessions(): ?array {
        return $this->getBackingStore()->get('contentSharingSessions');
    }

    /**
     * Gets the direction property value. The direction of the call. The possible value are incoming or outgoing. Read-only.
     * @return CallDirection|null
    */
    public function getDirection(): ?CallDirection {
        return $this->getBackingStore()->get('direction');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audioRoutingGroups' => fn(ParseNode $n) => $o->setAudioRoutingGroups($n->getCollectionOfObjectValues([AudioRoutingGroup::class, 'createFromDiscriminatorValue'])),
            'callbackUri' => fn(ParseNode $n) => $o->setCallbackUri($n->getStringValue()),
            'callChainId' => fn(ParseNode $n) => $o->setCallChainId($n->getStringValue()),
            'callOptions' => fn(ParseNode $n) => $o->setCallOptions($n->getObjectValue([CallOptions::class, 'createFromDiscriminatorValue'])),
            'callRoutes' => fn(ParseNode $n) => $o->setCallRoutes($n->getCollectionOfObjectValues([CallRoute::class, 'createFromDiscriminatorValue'])),
            'chatInfo' => fn(ParseNode $n) => $o->setChatInfo($n->getObjectValue([ChatInfo::class, 'createFromDiscriminatorValue'])),
            'contentSharingSessions' => fn(ParseNode $n) => $o->setContentSharingSessions($n->getCollectionOfObjectValues([ContentSharingSession::class, 'createFromDiscriminatorValue'])),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getEnumValue(CallDirection::class)),
            'incomingContext' => fn(ParseNode $n) => $o->setIncomingContext($n->getObjectValue([IncomingContext::class, 'createFromDiscriminatorValue'])),
            'mediaConfig' => fn(ParseNode $n) => $o->setMediaConfig($n->getObjectValue([MediaConfig::class, 'createFromDiscriminatorValue'])),
            'mediaState' => fn(ParseNode $n) => $o->setMediaState($n->getObjectValue([CallMediaState::class, 'createFromDiscriminatorValue'])),
            'meetingInfo' => fn(ParseNode $n) => $o->setMeetingInfo($n->getObjectValue([MeetingInfo::class, 'createFromDiscriminatorValue'])),
            'myParticipantId' => fn(ParseNode $n) => $o->setMyParticipantId($n->getStringValue()),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([CommsOperation::class, 'createFromDiscriminatorValue'])),
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getCollectionOfObjectValues([Participant::class, 'createFromDiscriminatorValue'])),
            'requestedModalities' => fn(ParseNode $n) => $o->setRequestedModalities($n->getCollectionOfEnumValues(Modality::class)),
            'resultInfo' => fn(ParseNode $n) => $o->setResultInfo($n->getObjectValue([ResultInfo::class, 'createFromDiscriminatorValue'])),
            'source' => fn(ParseNode $n) => $o->setSource($n->getObjectValue([ParticipantInfo::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(CallState::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'targets' => fn(ParseNode $n) => $o->setTargets($n->getCollectionOfObjectValues([InvitationParticipantInfo::class, 'createFromDiscriminatorValue'])),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'toneInfo' => fn(ParseNode $n) => $o->setToneInfo($n->getObjectValue([ToneInfo::class, 'createFromDiscriminatorValue'])),
            'transcription' => fn(ParseNode $n) => $o->setTranscription($n->getObjectValue([CallTranscriptionInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the incomingContext property value. Call context associated with an incoming call.
     * @return IncomingContext|null
    */
    public function getIncomingContext(): ?IncomingContext {
        return $this->getBackingStore()->get('incomingContext');
    }

    /**
     * Gets the mediaConfig property value. The media configuration. Required.
     * @return MediaConfig|null
    */
    public function getMediaConfig(): ?MediaConfig {
        return $this->getBackingStore()->get('mediaConfig');
    }

    /**
     * Gets the mediaState property value. Read-only. The call media state.
     * @return CallMediaState|null
    */
    public function getMediaState(): ?CallMediaState {
        return $this->getBackingStore()->get('mediaState');
    }

    /**
     * Gets the meetingInfo property value. The meeting information. Required information for meeting scenarios.
     * @return MeetingInfo|null
    */
    public function getMeetingInfo(): ?MeetingInfo {
        return $this->getBackingStore()->get('meetingInfo');
    }

    /**
     * Gets the myParticipantId property value. The myParticipantId property
     * @return string|null
    */
    public function getMyParticipantId(): ?string {
        return $this->getBackingStore()->get('myParticipantId');
    }

    /**
     * Gets the operations property value. The operations property
     * @return array<CommsOperation>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
    }

    /**
     * Gets the participants property value. The participants property
     * @return array<Participant>|null
    */
    public function getParticipants(): ?array {
        return $this->getBackingStore()->get('participants');
    }

    /**
     * Gets the requestedModalities property value. The list of requested modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data.
     * @return array<Modality>|null
    */
    public function getRequestedModalities(): ?array {
        return $this->getBackingStore()->get('requestedModalities');
    }

    /**
     * Gets the resultInfo property value. The result information. For example can hold termination reason. Read-only.
     * @return ResultInfo|null
    */
    public function getResultInfo(): ?ResultInfo {
        return $this->getBackingStore()->get('resultInfo');
    }

    /**
     * Gets the source property value. The originator of the call.
     * @return ParticipantInfo|null
    */
    public function getSource(): ?ParticipantInfo {
        return $this->getBackingStore()->get('source');
    }

    /**
     * Gets the state property value. The call state. Possible values are: incoming, establishing, ringing, established, hold, transferring, transferAccepted, redirecting, terminating, terminated. Read-only.
     * @return CallState|null
    */
    public function getState(): ?CallState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the subject property value. The subject of the conversation.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->getBackingStore()->get('subject');
    }

    /**
     * Gets the targets property value. The targets of the call. Required information for creating peer to peer call.
     * @return array<InvitationParticipantInfo>|null
    */
    public function getTargets(): ?array {
        return $this->getBackingStore()->get('targets');
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Gets the toneInfo property value. The toneInfo property
     * @return ToneInfo|null
    */
    public function getToneInfo(): ?ToneInfo {
        return $this->getBackingStore()->get('toneInfo');
    }

    /**
     * Gets the transcription property value. The transcription information for the call. Read-only.
     * @return CallTranscriptionInfo|null
    */
    public function getTranscription(): ?CallTranscriptionInfo {
        return $this->getBackingStore()->get('transcription');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('audioRoutingGroups', $this->getAudioRoutingGroups());
        $writer->writeStringValue('callbackUri', $this->getCallbackUri());
        $writer->writeStringValue('callChainId', $this->getCallChainId());
        $writer->writeObjectValue('callOptions', $this->getCallOptions());
        $writer->writeCollectionOfObjectValues('callRoutes', $this->getCallRoutes());
        $writer->writeObjectValue('chatInfo', $this->getChatInfo());
        $writer->writeCollectionOfObjectValues('contentSharingSessions', $this->getContentSharingSessions());
        $writer->writeEnumValue('direction', $this->getDirection());
        $writer->writeObjectValue('incomingContext', $this->getIncomingContext());
        $writer->writeObjectValue('mediaConfig', $this->getMediaConfig());
        $writer->writeObjectValue('mediaState', $this->getMediaState());
        $writer->writeObjectValue('meetingInfo', $this->getMeetingInfo());
        $writer->writeStringValue('myParticipantId', $this->getMyParticipantId());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('participants', $this->getParticipants());
        $writer->writeCollectionOfEnumValues('requestedModalities', $this->getRequestedModalities());
        $writer->writeObjectValue('resultInfo', $this->getResultInfo());
        $writer->writeObjectValue('source', $this->getSource());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeCollectionOfObjectValues('targets', $this->getTargets());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeObjectValue('toneInfo', $this->getToneInfo());
        $writer->writeObjectValue('transcription', $this->getTranscription());
    }

    /**
     * Sets the audioRoutingGroups property value. The audioRoutingGroups property
     * @param array<AudioRoutingGroup>|null $value Value to set for the audioRoutingGroups property.
    */
    public function setAudioRoutingGroups(?array $value): void {
        $this->getBackingStore()->set('audioRoutingGroups', $value);
    }

    /**
     * Sets the callbackUri property value. The callback URL on which callbacks will be delivered. Must be https.
     * @param string|null $value Value to set for the callbackUri property.
    */
    public function setCallbackUri(?string $value): void {
        $this->getBackingStore()->set('callbackUri', $value);
    }

    /**
     * Sets the callChainId property value. A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     * @param string|null $value Value to set for the callChainId property.
    */
    public function setCallChainId(?string $value): void {
        $this->getBackingStore()->set('callChainId', $value);
    }

    /**
     * Sets the callOptions property value. Contains the optional features for the call.
     * @param CallOptions|null $value Value to set for the callOptions property.
    */
    public function setCallOptions(?CallOptions $value): void {
        $this->getBackingStore()->set('callOptions', $value);
    }

    /**
     * Sets the callRoutes property value. The routing information on how the call was retargeted. Read-only.
     * @param array<CallRoute>|null $value Value to set for the callRoutes property.
    */
    public function setCallRoutes(?array $value): void {
        $this->getBackingStore()->set('callRoutes', $value);
    }

    /**
     * Sets the chatInfo property value. The chat information. Required information for joining a meeting.
     * @param ChatInfo|null $value Value to set for the chatInfo property.
    */
    public function setChatInfo(?ChatInfo $value): void {
        $this->getBackingStore()->set('chatInfo', $value);
    }

    /**
     * Sets the contentSharingSessions property value. The contentSharingSessions property
     * @param array<ContentSharingSession>|null $value Value to set for the contentSharingSessions property.
    */
    public function setContentSharingSessions(?array $value): void {
        $this->getBackingStore()->set('contentSharingSessions', $value);
    }

    /**
     * Sets the direction property value. The direction of the call. The possible value are incoming or outgoing. Read-only.
     * @param CallDirection|null $value Value to set for the direction property.
    */
    public function setDirection(?CallDirection $value): void {
        $this->getBackingStore()->set('direction', $value);
    }

    /**
     * Sets the incomingContext property value. Call context associated with an incoming call.
     * @param IncomingContext|null $value Value to set for the incomingContext property.
    */
    public function setIncomingContext(?IncomingContext $value): void {
        $this->getBackingStore()->set('incomingContext', $value);
    }

    /**
     * Sets the mediaConfig property value. The media configuration. Required.
     * @param MediaConfig|null $value Value to set for the mediaConfig property.
    */
    public function setMediaConfig(?MediaConfig $value): void {
        $this->getBackingStore()->set('mediaConfig', $value);
    }

    /**
     * Sets the mediaState property value. Read-only. The call media state.
     * @param CallMediaState|null $value Value to set for the mediaState property.
    */
    public function setMediaState(?CallMediaState $value): void {
        $this->getBackingStore()->set('mediaState', $value);
    }

    /**
     * Sets the meetingInfo property value. The meeting information. Required information for meeting scenarios.
     * @param MeetingInfo|null $value Value to set for the meetingInfo property.
    */
    public function setMeetingInfo(?MeetingInfo $value): void {
        $this->getBackingStore()->set('meetingInfo', $value);
    }

    /**
     * Sets the myParticipantId property value. The myParticipantId property
     * @param string|null $value Value to set for the myParticipantId property.
    */
    public function setMyParticipantId(?string $value): void {
        $this->getBackingStore()->set('myParticipantId', $value);
    }

    /**
     * Sets the operations property value. The operations property
     * @param array<CommsOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the participants property value. The participants property
     * @param array<Participant>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value): void {
        $this->getBackingStore()->set('participants', $value);
    }

    /**
     * Sets the requestedModalities property value. The list of requested modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data.
     * @param array<Modality>|null $value Value to set for the requestedModalities property.
    */
    public function setRequestedModalities(?array $value): void {
        $this->getBackingStore()->set('requestedModalities', $value);
    }

    /**
     * Sets the resultInfo property value. The result information. For example can hold termination reason. Read-only.
     * @param ResultInfo|null $value Value to set for the resultInfo property.
    */
    public function setResultInfo(?ResultInfo $value): void {
        $this->getBackingStore()->set('resultInfo', $value);
    }

    /**
     * Sets the source property value. The originator of the call.
     * @param ParticipantInfo|null $value Value to set for the source property.
    */
    public function setSource(?ParticipantInfo $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the state property value. The call state. Possible values are: incoming, establishing, ringing, established, hold, transferring, transferAccepted, redirecting, terminating, terminated. Read-only.
     * @param CallState|null $value Value to set for the state property.
    */
    public function setState(?CallState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the subject property value. The subject of the conversation.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the targets property value. The targets of the call. Required information for creating peer to peer call.
     * @param array<InvitationParticipantInfo>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value): void {
        $this->getBackingStore()->set('targets', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the toneInfo property value. The toneInfo property
     * @param ToneInfo|null $value Value to set for the toneInfo property.
    */
    public function setToneInfo(?ToneInfo $value): void {
        $this->getBackingStore()->set('toneInfo', $value);
    }

    /**
     * Sets the transcription property value. The transcription information for the call. Read-only.
     * @param CallTranscriptionInfo|null $value Value to set for the transcription property.
    */
    public function setTranscription(?CallTranscriptionInfo $value): void {
        $this->getBackingStore()->set('transcription', $value);
    }

}
