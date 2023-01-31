<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RedundancyDetectionSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new redundancyDetectionSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RedundancyDetectionSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RedundancyDetectionSettings {
        return new RedundancyDetectionSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
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
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'maxWords' => fn(ParseNode $n) => $o->setMaxWords($n->getIntegerValue()),
            'minWords' => fn(ParseNode $n) => $o->setMinWords($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'similarityThreshold' => fn(ParseNode $n) => $o->setSimilarityThreshold($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the isEnabled property value. Indicates whether email threading and near duplicate detection are enabled.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->getBackingStore()->get('isEnabled');
    }

    /**
     * Gets the maxWords property value. Specifies the maximum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
     * @return int|null
    */
    public function getMaxWords(): ?int {
        return $this->getBackingStore()->get('maxWords');
    }

    /**
     * Gets the minWords property value. Specifies the minimum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
     * @return int|null
    */
    public function getMinWords(): ?int {
        return $this->getBackingStore()->get('minWords');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the similarityThreshold property value. Specifies the similarity level for documents to be put in the same near duplicate set. To learn more, see Document and email similarity threshold.
     * @return int|null
    */
    public function getSimilarityThreshold(): ?int {
        return $this->getBackingStore()->get('similarityThreshold');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeIntegerValue('maxWords', $this->getMaxWords());
        $writer->writeIntegerValue('minWords', $this->getMinWords());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('similarityThreshold', $this->getSimilarityThreshold());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether email threading and near duplicate detection are enabled.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the maxWords property value. Specifies the maximum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
     * @param int|null $value Value to set for the maxWords property.
    */
    public function setMaxWords(?int $value): void {
        $this->getBackingStore()->set('maxWords', $value);
    }

    /**
     * Sets the minWords property value. Specifies the minimum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
     * @param int|null $value Value to set for the minWords property.
    */
    public function setMinWords(?int $value): void {
        $this->getBackingStore()->set('minWords', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the similarityThreshold property value. Specifies the similarity level for documents to be put in the same near duplicate set. To learn more, see Document and email similarity threshold.
     * @param int|null $value Value to set for the similarityThreshold property.
    */
    public function setSimilarityThreshold(?int $value): void {
        $this->getBackingStore()->set('similarityThreshold', $value);
    }

}
