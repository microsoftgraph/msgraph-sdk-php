<?php

namespace Microsoft\Graph\DeviceAppManagement\MobileApps\Item\Assign;

use Microsoft\Graph\Models\MobileAppAssignment;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<MobileAppAssignment>|null $mobileAppAssignments The mobileAppAssignments property
    */
    private ?array $mobileAppAssignments = null;
    
    /**
     * Instantiates a new assignPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignPostRequestBody {
        return new AssignPostRequestBody();
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
            'mobileAppAssignments' => function (ParseNode $n) use ($o) { $o->setMobileAppAssignments($n->getCollectionOfObjectValues(array(MobileAppAssignment::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the mobileAppAssignments property value. The mobileAppAssignments property
     * @return array<MobileAppAssignment>|null
    */
    public function getMobileAppAssignments(): ?array {
        return $this->mobileAppAssignments;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('mobileAppAssignments', $this->mobileAppAssignments);
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
     * Sets the mobileAppAssignments property value. The mobileAppAssignments property
     *  @param array<MobileAppAssignment>|null $value Value to set for the mobileAppAssignments property.
    */
    public function setMobileAppAssignments(?array $value ): void {
        $this->mobileAppAssignments = $value;
    }

}
