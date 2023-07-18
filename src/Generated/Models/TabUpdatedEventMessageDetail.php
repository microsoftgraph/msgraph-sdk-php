<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TabUpdatedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new tabUpdatedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.tabUpdatedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TabUpdatedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TabUpdatedEventMessageDetail {
        return new TabUpdatedEventMessageDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tabId' => fn(ParseNode $n) => $o->setTabId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiator property value. Initiator of the event.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        $val = $this->getBackingStore()->get('initiator');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiator'");
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
     * Gets the tabId property value. Unique identifier of the tab.
     * @return string|null
    */
    public function getTabId(): ?string {
        $val = $this->getBackingStore()->get('tabId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tabId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initiator', $this->getInitiator());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('tabId', $this->getTabId());
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tabId property value. Unique identifier of the tab.
     * @param string|null $value Value to set for the tabId property.
    */
    public function setTabId(?string $value): void {
        $this->getBackingStore()->set('tabId', $value);
    }

}
