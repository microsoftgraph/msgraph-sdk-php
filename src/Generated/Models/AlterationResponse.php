<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AlterationResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $originalQueryString Defines the original user query string.
    */
    private ?string $originalQueryString = null;
    
    /**
     * @var SearchAlteration|null $queryAlteration Defines the details of alteration information for the spelling correction.
    */
    private ?SearchAlteration $queryAlteration = null;
    
    /**
     * @var SearchAlterationType|null $queryAlterationType Defines the type of the spelling correction. Possible values are suggestion, modification.
    */
    private ?SearchAlterationType $queryAlterationType = null;
    
    /**
     * Instantiates a new alterationResponse and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlterationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlterationResponse {
        return new AlterationResponse();
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
            'originalQueryString' => function (ParseNode $n) use ($o) { $o->setOriginalQueryString($n->getStringValue()); },
            'queryAlteration' => function (ParseNode $n) use ($o) { $o->setQueryAlteration($n->getObjectValue(array(SearchAlteration::class, 'createFromDiscriminatorValue'))); },
            'queryAlterationType' => function (ParseNode $n) use ($o) { $o->setQueryAlterationType($n->getEnumValue(SearchAlterationType::class)); },
        ];
    }

    /**
     * Gets the originalQueryString property value. Defines the original user query string.
     * @return string|null
    */
    public function getOriginalQueryString(): ?string {
        return $this->originalQueryString;
    }

    /**
     * Gets the queryAlteration property value. Defines the details of alteration information for the spelling correction.
     * @return SearchAlteration|null
    */
    public function getQueryAlteration(): ?SearchAlteration {
        return $this->queryAlteration;
    }

    /**
     * Gets the queryAlterationType property value. Defines the type of the spelling correction. Possible values are suggestion, modification.
     * @return SearchAlterationType|null
    */
    public function getQueryAlterationType(): ?SearchAlterationType {
        return $this->queryAlterationType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('originalQueryString', $this->originalQueryString);
        $writer->writeObjectValue('queryAlteration', $this->queryAlteration);
        $writer->writeEnumValue('queryAlterationType', $this->queryAlterationType);
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
     * Sets the originalQueryString property value. Defines the original user query string.
     *  @param string|null $value Value to set for the originalQueryString property.
    */
    public function setOriginalQueryString(?string $value ): void {
        $this->originalQueryString = $value;
    }

    /**
     * Sets the queryAlteration property value. Defines the details of alteration information for the spelling correction.
     *  @param SearchAlteration|null $value Value to set for the queryAlteration property.
    */
    public function setQueryAlteration(?SearchAlteration $value ): void {
        $this->queryAlteration = $value;
    }

    /**
     * Sets the queryAlterationType property value. Defines the type of the spelling correction. Possible values are suggestion, modification.
     *  @param SearchAlterationType|null $value Value to set for the queryAlterationType property.
    */
    public function setQueryAlterationType(?SearchAlterationType $value ): void {
        $this->queryAlterationType = $value;
    }

}
