<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OnPremisesAccidentalDeletionPrevention implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new onPremisesAccidentalDeletionPrevention and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesAccidentalDeletionPrevention
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesAccidentalDeletionPrevention {
        return new OnPremisesAccidentalDeletionPrevention();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the alertThreshold property value. Threshold value which triggers accidental deletion prevention. The threshold is either an absolute number of objects or a percentage number of objects.
     * @return int|null
    */
    public function getAlertThreshold(): ?int {
        return $this->getBackingStore()->get('alertThreshold');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alertThreshold' => fn(ParseNode $n) => $o->setAlertThreshold($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'synchronizationPreventionType' => fn(ParseNode $n) => $o->setSynchronizationPreventionType($n->getEnumValue(OnPremisesDirectorySynchronizationDeletionPreventionType::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the synchronizationPreventionType property value. The status of the accidental deletion prevention feature. The possible values are: disabled, enabledForCount, enabledForPercentage, unknownFutureValue.
     * @return OnPremisesDirectorySynchronizationDeletionPreventionType|null
    */
    public function getSynchronizationPreventionType(): ?OnPremisesDirectorySynchronizationDeletionPreventionType {
        return $this->getBackingStore()->get('synchronizationPreventionType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('alertThreshold', $this->getAlertThreshold());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('synchronizationPreventionType', $this->getSynchronizationPreventionType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alertThreshold property value. Threshold value which triggers accidental deletion prevention. The threshold is either an absolute number of objects or a percentage number of objects.
     * @param int|null $value Value to set for the alertThreshold property.
    */
    public function setAlertThreshold(?int $value): void {
        $this->getBackingStore()->set('alertThreshold', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the synchronizationPreventionType property value. The status of the accidental deletion prevention feature. The possible values are: disabled, enabledForCount, enabledForPercentage, unknownFutureValue.
     * @param OnPremisesDirectorySynchronizationDeletionPreventionType|null $value Value to set for the synchronizationPreventionType property.
    */
    public function setSynchronizationPreventionType(?OnPremisesDirectorySynchronizationDeletionPreventionType $value): void {
        $this->getBackingStore()->set('synchronizationPreventionType', $value);
    }

}
