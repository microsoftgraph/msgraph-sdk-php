<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EventMessageDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EventMessageDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EventMessageDetail {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.callEndedEventMessageDetail': return new CallEndedEventMessageDetail();
                case '#microsoft.graph.callRecordingEventMessageDetail': return new CallRecordingEventMessageDetail();
                case '#microsoft.graph.callStartedEventMessageDetail': return new CallStartedEventMessageDetail();
                case '#microsoft.graph.callTranscriptEventMessageDetail': return new CallTranscriptEventMessageDetail();
                case '#microsoft.graph.channelAddedEventMessageDetail': return new ChannelAddedEventMessageDetail();
                case '#microsoft.graph.channelDeletedEventMessageDetail': return new ChannelDeletedEventMessageDetail();
                case '#microsoft.graph.channelDescriptionUpdatedEventMessageDetail': return new ChannelDescriptionUpdatedEventMessageDetail();
                case '#microsoft.graph.channelRenamedEventMessageDetail': return new ChannelRenamedEventMessageDetail();
                case '#microsoft.graph.channelSetAsFavoriteByDefaultEventMessageDetail': return new ChannelSetAsFavoriteByDefaultEventMessageDetail();
                case '#microsoft.graph.channelUnsetAsFavoriteByDefaultEventMessageDetail': return new ChannelUnsetAsFavoriteByDefaultEventMessageDetail();
                case '#microsoft.graph.chatRenamedEventMessageDetail': return new ChatRenamedEventMessageDetail();
                case '#microsoft.graph.conversationMemberRoleUpdatedEventMessageDetail': return new ConversationMemberRoleUpdatedEventMessageDetail();
                case '#microsoft.graph.meetingPolicyUpdatedEventMessageDetail': return new MeetingPolicyUpdatedEventMessageDetail();
                case '#microsoft.graph.membersAddedEventMessageDetail': return new MembersAddedEventMessageDetail();
                case '#microsoft.graph.membersDeletedEventMessageDetail': return new MembersDeletedEventMessageDetail();
                case '#microsoft.graph.membersJoinedEventMessageDetail': return new MembersJoinedEventMessageDetail();
                case '#microsoft.graph.membersLeftEventMessageDetail': return new MembersLeftEventMessageDetail();
                case '#microsoft.graph.messagePinnedEventMessageDetail': return new MessagePinnedEventMessageDetail();
                case '#microsoft.graph.messageUnpinnedEventMessageDetail': return new MessageUnpinnedEventMessageDetail();
                case '#microsoft.graph.tabUpdatedEventMessageDetail': return new TabUpdatedEventMessageDetail();
                case '#microsoft.graph.teamArchivedEventMessageDetail': return new TeamArchivedEventMessageDetail();
                case '#microsoft.graph.teamCreatedEventMessageDetail': return new TeamCreatedEventMessageDetail();
                case '#microsoft.graph.teamDescriptionUpdatedEventMessageDetail': return new TeamDescriptionUpdatedEventMessageDetail();
                case '#microsoft.graph.teamJoiningDisabledEventMessageDetail': return new TeamJoiningDisabledEventMessageDetail();
                case '#microsoft.graph.teamJoiningEnabledEventMessageDetail': return new TeamJoiningEnabledEventMessageDetail();
                case '#microsoft.graph.teamRenamedEventMessageDetail': return new TeamRenamedEventMessageDetail();
                case '#microsoft.graph.teamsAppInstalledEventMessageDetail': return new TeamsAppInstalledEventMessageDetail();
                case '#microsoft.graph.teamsAppRemovedEventMessageDetail': return new TeamsAppRemovedEventMessageDetail();
                case '#microsoft.graph.teamsAppUpgradedEventMessageDetail': return new TeamsAppUpgradedEventMessageDetail();
                case '#microsoft.graph.teamUnarchivedEventMessageDetail': return new TeamUnarchivedEventMessageDetail();
            }
        }
        return new EventMessageDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
