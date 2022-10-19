<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RedundancyDetectionSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isEnabled Indicates whether email threading and near duplicate detection are enabled.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var int|null $maxWords Specifies the maximum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
    */
    private ?int $maxWords = null;
    
    /**
     * @var int|null $minWords Specifies the minimum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
    */
    private ?int $minWords = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $similarityThreshold Specifies the similarity level for documents to be put in the same near duplicate set. To learn more, see Document and email similarity threshold.
    */
    private ?int $similarityThreshold = null;
    
    /**
     * Instantiates a new redundancyDetectionSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.redundancyDetectionSettings');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        return $this->isEnabled;
    }

    /**
     * Gets the maxWords property value. Specifies the maximum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
     * @return int|null
    */
    public function getMaxWords(): ?int {
        return $this->maxWords;
    }

    /**
     * Gets the minWords property value. Specifies the minimum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
     * @return int|null
    */
    public function getMinWords(): ?int {
        return $this->minWords;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the similarityThreshold property value. Specifies the similarity level for documents to be put in the same near duplicate set. To learn more, see Document and email similarity threshold.
     * @return int|null
    */
    public function getSimilarityThreshold(): ?int {
        return $this->similarityThreshold;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeIntegerValue('maxWords', $this->maxWords);
        $writer->writeIntegerValue('minWords', $this->minWords);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('similarityThreshold', $this->similarityThreshold);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether email threading and near duplicate detection are enabled.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the maxWords property value. Specifies the maximum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
     *  @param int|null $value Value to set for the maxWords property.
    */
    public function setMaxWords(?int $value ): void {
        $this->maxWords = $value;
    }

    /**
     * Sets the minWords property value. Specifies the minimum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words.
     *  @param int|null $value Value to set for the minWords property.
    */
    public function setMinWords(?int $value ): void {
        $this->minWords = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the similarityThreshold property value. Specifies the similarity level for documents to be put in the same near duplicate set. To learn more, see Document and email similarity threshold.
     *  @param int|null $value Value to set for the similarityThreshold property.
    */
    public function setSimilarityThreshold(?int $value ): void {
        $this->similarityThreshold = $value;
    }

}
