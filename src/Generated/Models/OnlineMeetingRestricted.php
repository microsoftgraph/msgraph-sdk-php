<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OnlineMeetingRestricted implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OnlineMeetingRestricted and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnlineMeetingRestricted
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnlineMeetingRestricted {
        return new OnlineMeetingRestricted();
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
     * Gets the contentSharingDisabled property value. Specifies the reason shared content from this participant is disabled. The possible values are: watermarkProtection, unknownFutureValue.
     * @return OnlineMeetingContentSharingDisabledReason|null
    */
    public function getContentSharingDisabled(): ?OnlineMeetingContentSharingDisabledReason {
        $val = $this->getBackingStore()->get('contentSharingDisabled');
        if (is_null($val) || $val instanceof OnlineMeetingContentSharingDisabledReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentSharingDisabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentSharingDisabled' => fn(ParseNode $n) => $o->setContentSharingDisabled($n->getEnumValue(OnlineMeetingContentSharingDisabledReason::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'videoDisabled' => fn(ParseNode $n) => $o->setVideoDisabled($n->getEnumValue(OnlineMeetingVideoDisabledReason::class)),
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
     * Gets the videoDisabled property value. Specifies the reason video from this participant is disabled. The possible values are: watermarkProtection, unknownFutureValue.
     * @return OnlineMeetingVideoDisabledReason|null
    */
    public function getVideoDisabled(): ?OnlineMeetingVideoDisabledReason {
        $val = $this->getBackingStore()->get('videoDisabled');
        if (is_null($val) || $val instanceof OnlineMeetingVideoDisabledReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'videoDisabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('contentSharingDisabled', $this->getContentSharingDisabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('videoDisabled', $this->getVideoDisabled());
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
     * Sets the contentSharingDisabled property value. Specifies the reason shared content from this participant is disabled. The possible values are: watermarkProtection, unknownFutureValue.
     * @param OnlineMeetingContentSharingDisabledReason|null $value Value to set for the contentSharingDisabled property.
    */
    public function setContentSharingDisabled(?OnlineMeetingContentSharingDisabledReason $value): void {
        $this->getBackingStore()->set('contentSharingDisabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the videoDisabled property value. Specifies the reason video from this participant is disabled. The possible values are: watermarkProtection, unknownFutureValue.
     * @param OnlineMeetingVideoDisabledReason|null $value Value to set for the videoDisabled property.
    */
    public function setVideoDisabled(?OnlineMeetingVideoDisabledReason $value): void {
        $this->getBackingStore()->set('videoDisabled', $value);
    }

}
