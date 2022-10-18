<?php

namespace Microsoft\Graph\Generated\DirectoryRoleTemplates\GetAvailableExtensionProperties;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetAvailableExtensionPropertiesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isSyncedFromOnPremises The isSyncedFromOnPremises property
    */
    private ?bool $isSyncedFromOnPremises = null;
    
    /**
     * Instantiates a new getAvailableExtensionPropertiesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetAvailableExtensionPropertiesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetAvailableExtensionPropertiesPostRequestBody {
        return new GetAvailableExtensionPropertiesPostRequestBody();
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
            'isSyncedFromOnPremises' => fn(ParseNode $n) => $o->setIsSyncedFromOnPremises($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the isSyncedFromOnPremises property value. The isSyncedFromOnPremises property
     * @return bool|null
    */
    public function getIsSyncedFromOnPremises(): ?bool {
        return $this->isSyncedFromOnPremises;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isSyncedFromOnPremises', $this->isSyncedFromOnPremises);
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
     * Sets the isSyncedFromOnPremises property value. The isSyncedFromOnPremises property
     *  @param bool|null $value Value to set for the isSyncedFromOnPremises property.
    */
    public function setIsSyncedFromOnPremises(?bool $value ): void {
        $this->isSyncedFromOnPremises = $value;
    }

}
