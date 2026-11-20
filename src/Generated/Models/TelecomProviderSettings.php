<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TelecomProviderSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TelecomProviderSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TelecomProviderSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TelecomProviderSettings {
        return new TelecomProviderSettings();
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
     * Gets the appId property value. The application (client) ID used to authenticate to the telecom provider.
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
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
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'isEvaluationModeEnabled' => fn(ParseNode $n) => $o->setIsEvaluationModeEnabled($n->getBooleanValue()),
            'migrationPercentage' => fn(ParseNode $n) => $o->setMigrationPercentage($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the isEvaluationModeEnabled property value. true to run the telecom provider integration in evaluation (nonenforcing) mode; otherwise, false.
     * @return bool|null
    */
    public function getIsEvaluationModeEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEvaluationModeEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEvaluationModeEnabled'");
    }

    /**
     * Gets the migrationPercentage property value. The percentage of authentication traffic routed to the telecom provider. Valid values range from 0 through 100.
     * @return int|null
    */
    public function getMigrationPercentage(): ?int {
        $val = $this->getBackingStore()->get('migrationPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'migrationPercentage'");
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
     * Gets the url property value. The endpoint URL of the telecom provider integration.
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeBooleanValue('isEvaluationModeEnabled', $this->getIsEvaluationModeEnabled());
        $writer->writeIntegerValue('migrationPercentage', $this->getMigrationPercentage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('url', $this->getUrl());
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
     * Sets the appId property value. The application (client) ID used to authenticate to the telecom provider.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isEvaluationModeEnabled property value. true to run the telecom provider integration in evaluation (nonenforcing) mode; otherwise, false.
     * @param bool|null $value Value to set for the isEvaluationModeEnabled property.
    */
    public function setIsEvaluationModeEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEvaluationModeEnabled', $value);
    }

    /**
     * Sets the migrationPercentage property value. The percentage of authentication traffic routed to the telecom provider. Valid values range from 0 through 100.
     * @param int|null $value Value to set for the migrationPercentage property.
    */
    public function setMigrationPercentage(?int $value): void {
        $this->getBackingStore()->set('migrationPercentage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the url property value. The endpoint URL of the telecom provider integration.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
