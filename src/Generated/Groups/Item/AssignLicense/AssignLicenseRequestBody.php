<?php

namespace Microsoft\Graph\Generated\Groups\Item\AssignLicense;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\AssignedLicense;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignLicenseRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<AssignedLicense>|null $addLicenses  */
    private ?array $addLicenses = null;
    
    /** @var array<string>|null $removeLicenses  */
    private ?array $removeLicenses = null;
    
    /**
     * Instantiates a new assignLicenseRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignLicenseRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignLicenseRequestBody {
        return new AssignLicenseRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the addLicenses property value. 
     * @return array<AssignedLicense>|null
    */
    public function getAddLicenses(): ?array {
        return $this->addLicenses;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'addLicenses' => function (self $o, ParseNode $n) { $o->setAddLicenses($n->getCollectionOfObjectValues(AssignedLicense::class)); },
            'removeLicenses' => function (self $o, ParseNode $n) { $o->setRemoveLicenses($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the removeLicenses property value. 
     * @return array<string>|null
    */
    public function getRemoveLicenses(): ?array {
        return $this->removeLicenses;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('addLicenses', $this->addLicenses);
        $writer->writeCollectionOfPrimitiveValues('removeLicenses', $this->removeLicenses);
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
     * Sets the addLicenses property value. 
     *  @param array<AssignedLicense>|null $value Value to set for the addLicenses property.
    */
    public function setAddLicenses(?array $value ): void {
        $this->addLicenses = $value;
    }

    /**
     * Sets the removeLicenses property value. 
     *  @param array<string>|null $value Value to set for the removeLicenses property.
    */
    public function setRemoveLicenses(?array $value ): void {
        $this->removeLicenses = $value;
    }

}
