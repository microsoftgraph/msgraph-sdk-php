<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PayloadDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new payloadDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PayloadDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PayloadDetail {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.emailPayloadDetail': return new EmailPayloadDetail();
            }
        }
        return new PayloadDetail();
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
     * Gets the coachmarks property value. Payload coachmark details.
     * @return array<PayloadCoachmark>|null
    */
    public function getCoachmarks(): ?array {
        $val = $this->getBackingStore()->get('coachmarks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PayloadCoachmark::class);
            /** @var array<PayloadCoachmark>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coachmarks'");
    }

    /**
     * Gets the content property value. Payload content details.
     * @return string|null
    */
    public function getContent(): ?string {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'coachmarks' => fn(ParseNode $n) => $o->setCoachmarks($n->getCollectionOfObjectValues([PayloadCoachmark::class, 'createFromDiscriminatorValue'])),
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'phishingUrl' => fn(ParseNode $n) => $o->setPhishingUrl($n->getStringValue()),
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
     * Gets the phishingUrl property value. The phishing URL used to target a user.
     * @return string|null
    */
    public function getPhishingUrl(): ?string {
        $val = $this->getBackingStore()->get('phishingUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phishingUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('coachmarks', $this->getCoachmarks());
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('phishingUrl', $this->getPhishingUrl());
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
     * Sets the coachmarks property value. Payload coachmark details.
     * @param array<PayloadCoachmark>|null $value Value to set for the coachmarks property.
    */
    public function setCoachmarks(?array $value): void {
        $this->getBackingStore()->set('coachmarks', $value);
    }

    /**
     * Sets the content property value. Payload content details.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the phishingUrl property value. The phishing URL used to target a user.
     * @param string|null $value Value to set for the phishingUrl property.
    */
    public function setPhishingUrl(?string $value): void {
        $this->getBackingStore()->set('phishingUrl', $value);
    }

}
