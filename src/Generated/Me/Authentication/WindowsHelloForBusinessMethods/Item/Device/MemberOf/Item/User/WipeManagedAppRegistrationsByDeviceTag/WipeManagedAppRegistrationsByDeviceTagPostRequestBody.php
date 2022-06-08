<?php

namespace Microsoft\Graph\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\MemberOf\Item\User\WipeManagedAppRegistrationsByDeviceTag;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WipeManagedAppRegistrationsByDeviceTagPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $deviceTag The deviceTag property
    */
    private ?string $deviceTag = null;
    
    /**
     * Instantiates a new wipeManagedAppRegistrationsByDeviceTagPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WipeManagedAppRegistrationsByDeviceTagPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WipeManagedAppRegistrationsByDeviceTagPostRequestBody {
        return new WipeManagedAppRegistrationsByDeviceTagPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceTag property value. The deviceTag property
     * @return string|null
    */
    public function getDeviceTag(): ?string {
        return $this->deviceTag;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceTag' => function (ParseNode $n) use ($o) { $o->setDeviceTag($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceTag', $this->deviceTag);
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
     * Sets the deviceTag property value. The deviceTag property
     *  @param string|null $value Value to set for the deviceTag property.
    */
    public function setDeviceTag(?string $value ): void {
        $this->deviceTag = $value;
    }

}
