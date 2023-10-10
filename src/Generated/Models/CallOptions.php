<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CallOptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new callOptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallOptions {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.incomingCallOptions': return new IncomingCallOptions();
                case '#microsoft.graph.outgoingCallOptions': return new OutgoingCallOptions();
            }
        }
        return new CallOptions();
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
            'hideBotAfterEscalation' => fn(ParseNode $n) => $o->setHideBotAfterEscalation($n->getBooleanValue()),
            'isContentSharingNotificationEnabled' => fn(ParseNode $n) => $o->setIsContentSharingNotificationEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the hideBotAfterEscalation property value. Indicates whether to hide the app after the call is escalated.
     * @return bool|null
    */
    public function getHideBotAfterEscalation(): ?bool {
        $val = $this->getBackingStore()->get('hideBotAfterEscalation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideBotAfterEscalation'");
    }

    /**
     * Gets the isContentSharingNotificationEnabled property value. Indicates whether content sharing notifications should be enabled for the call.
     * @return bool|null
    */
    public function getIsContentSharingNotificationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isContentSharingNotificationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isContentSharingNotificationEnabled'");
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
        $writer->writeBooleanValue('hideBotAfterEscalation', $this->getHideBotAfterEscalation());
        $writer->writeBooleanValue('isContentSharingNotificationEnabled', $this->getIsContentSharingNotificationEnabled());
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
     * Sets the hideBotAfterEscalation property value. Indicates whether to hide the app after the call is escalated.
     * @param bool|null $value Value to set for the hideBotAfterEscalation property.
    */
    public function setHideBotAfterEscalation(?bool $value): void {
        $this->getBackingStore()->set('hideBotAfterEscalation', $value);
    }

    /**
     * Sets the isContentSharingNotificationEnabled property value. Indicates whether content sharing notifications should be enabled for the call.
     * @param bool|null $value Value to set for the isContentSharingNotificationEnabled property.
    */
    public function setIsContentSharingNotificationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isContentSharingNotificationEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
