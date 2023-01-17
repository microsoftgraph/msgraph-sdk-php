<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Graph\Generated\Models\CallRecords\CallRecord;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudCommunications extends Entity implements Parsable 
{
    /**
     * Instantiates a new cloudCommunications and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudCommunications
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudCommunications {
        return new CloudCommunications();
    }

    /**
     * Gets the callRecords property value. The callRecords property
     * @return array<CallRecord>|null
    */
    public function getCallRecords(): ?array {
        return $this->getBackingStore()->get('callRecords');
    }

    /**
     * Gets the calls property value. The calls property
     * @return array<Call>|null
    */
    public function getCalls(): ?array {
        return $this->getBackingStore()->get('calls');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callRecords' => fn(ParseNode $n) => $o->setCallRecords($n->getCollectionOfObjectValues([CallRecord::class, 'createFromDiscriminatorValue'])),
            'calls' => fn(ParseNode $n) => $o->setCalls($n->getCollectionOfObjectValues([Call::class, 'createFromDiscriminatorValue'])),
            'onlineMeetings' => fn(ParseNode $n) => $o->setOnlineMeetings($n->getCollectionOfObjectValues([OnlineMeeting::class, 'createFromDiscriminatorValue'])),
            'presences' => fn(ParseNode $n) => $o->setPresences($n->getCollectionOfObjectValues([Presence::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the onlineMeetings property value. The onlineMeetings property
     * @return array<OnlineMeeting>|null
    */
    public function getOnlineMeetings(): ?array {
        return $this->getBackingStore()->get('onlineMeetings');
    }

    /**
     * Gets the presences property value. The presences property
     * @return array<Presence>|null
    */
    public function getPresences(): ?array {
        return $this->getBackingStore()->get('presences');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('callRecords', $this->getCallRecords());
        $writer->writeCollectionOfObjectValues('calls', $this->getCalls());
        $writer->writeCollectionOfObjectValues('onlineMeetings', $this->getOnlineMeetings());
        $writer->writeCollectionOfObjectValues('presences', $this->getPresences());
    }

    /**
     * Sets the callRecords property value. The callRecords property
     *  @param array<CallRecord>|null $value Value to set for the callRecords property.
    */
    public function setCallRecords(?array $value): void {
        $this->getBackingStore()->set('callRecords', $value);
    }

    /**
     * Sets the calls property value. The calls property
     *  @param array<Call>|null $value Value to set for the calls property.
    */
    public function setCalls(?array $value): void {
        $this->getBackingStore()->set('calls', $value);
    }

    /**
     * Sets the onlineMeetings property value. The onlineMeetings property
     *  @param array<OnlineMeeting>|null $value Value to set for the onlineMeetings property.
    */
    public function setOnlineMeetings(?array $value): void {
        $this->getBackingStore()->set('onlineMeetings', $value);
    }

    /**
     * Sets the presences property value. The presences property
     *  @param array<Presence>|null $value Value to set for the presences property.
    */
    public function setPresences(?array $value): void {
        $this->getBackingStore()->set('presences', $value);
    }

}
