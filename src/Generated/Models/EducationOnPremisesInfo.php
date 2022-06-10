<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationOnPremisesInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $immutableId Unique identifier for the user object in Active Directory.
    */
    private ?string $immutableId = null;
    
    /**
     * Instantiates a new educationOnPremisesInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationOnPremisesInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationOnPremisesInfo {
        return new EducationOnPremisesInfo();
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
            'immutableId' => function (ParseNode $n) use ($o) { $o->setImmutableId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the immutableId property value. Unique identifier for the user object in Active Directory.
     * @return string|null
    */
    public function getImmutableId(): ?string {
        return $this->immutableId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('immutableId', $this->immutableId);
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
     * Sets the immutableId property value. Unique identifier for the user object in Active Directory.
     *  @param string|null $value Value to set for the immutableId property.
    */
    public function setImmutableId(?string $value ): void {
        $this->immutableId = $value;
    }

}
