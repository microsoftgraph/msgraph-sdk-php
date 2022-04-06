<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Admin implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ServiceAnnouncement|null $serviceAnnouncement A container for service communications resources. Read-only. */
    private ?ServiceAnnouncement $serviceAnnouncement = null;
    
    /**
     * Instantiates a new Admin and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Admin
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Admin {
        return new Admin();
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
        return  [
            'serviceAnnouncement' => function (self $o, ParseNode $n) { $o->setServiceAnnouncement($n->getObjectValue(ServiceAnnouncement::class)); },
        ];
    }

    /**
     * Gets the serviceAnnouncement property value. A container for service communications resources. Read-only.
     * @return ServiceAnnouncement|null
    */
    public function getServiceAnnouncement(): ?ServiceAnnouncement {
        return $this->serviceAnnouncement;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('serviceAnnouncement', $this->serviceAnnouncement);
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
     * Sets the serviceAnnouncement property value. A container for service communications resources. Read-only.
     *  @param ServiceAnnouncement|null $value Value to set for the serviceAnnouncement property.
    */
    public function setServiceAnnouncement(?ServiceAnnouncement $value ): void {
        $this->serviceAnnouncement = $value;
    }

}
