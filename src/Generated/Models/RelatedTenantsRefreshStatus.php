<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Represents the status of the most recent Related Tenants refresh operation.
*/
class RelatedTenantsRefreshStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RelatedTenantsRefreshStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedTenantsRefreshStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedTenantsRefreshStatus {
        return new RelatedTenantsRefreshStatus();
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
            'isFirstRefresh' => fn(ParseNode $n) => $o->setIsFirstRefresh($n->getBooleanValue()),
            'mostRecentRefreshDateTime' => fn(ParseNode $n) => $o->setMostRecentRefreshDateTime($n->getDateTimeValue()),
            'mostRecentRefreshRequestStatus' => fn(ParseNode $n) => $o->setMostRecentRefreshRequestStatus($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isFirstRefresh property value. The isFirstRefresh property
     * @return bool|null
    */
    public function getIsFirstRefresh(): ?bool {
        $val = $this->getBackingStore()->get('isFirstRefresh');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFirstRefresh'");
    }

    /**
     * Gets the mostRecentRefreshDateTime property value. The mostRecentRefreshDateTime property
     * @return DateTime|null
    */
    public function getMostRecentRefreshDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('mostRecentRefreshDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mostRecentRefreshDateTime'");
    }

    /**
     * Gets the mostRecentRefreshRequestStatus property value. The mostRecentRefreshRequestStatus property
     * @return string|null
    */
    public function getMostRecentRefreshRequestStatus(): ?string {
        $val = $this->getBackingStore()->get('mostRecentRefreshRequestStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mostRecentRefreshRequestStatus'");
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
        $writer->writeBooleanValue('isFirstRefresh', $this->getIsFirstRefresh());
        $writer->writeDateTimeValue('mostRecentRefreshDateTime', $this->getMostRecentRefreshDateTime());
        $writer->writeStringValue('mostRecentRefreshRequestStatus', $this->getMostRecentRefreshRequestStatus());
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
     * Sets the isFirstRefresh property value. The isFirstRefresh property
     * @param bool|null $value Value to set for the isFirstRefresh property.
    */
    public function setIsFirstRefresh(?bool $value): void {
        $this->getBackingStore()->set('isFirstRefresh', $value);
    }

    /**
     * Sets the mostRecentRefreshDateTime property value. The mostRecentRefreshDateTime property
     * @param DateTime|null $value Value to set for the mostRecentRefreshDateTime property.
    */
    public function setMostRecentRefreshDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('mostRecentRefreshDateTime', $value);
    }

    /**
     * Sets the mostRecentRefreshRequestStatus property value. The mostRecentRefreshRequestStatus property
     * @param string|null $value Value to set for the mostRecentRefreshRequestStatus property.
    */
    public function setMostRecentRefreshRequestStatus(?string $value): void {
        $this->getBackingStore()->set('mostRecentRefreshRequestStatus', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
