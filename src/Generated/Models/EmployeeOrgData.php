<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmployeeOrgData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $costCenter The cost center associated with the user. Returned only on $select. Supports $filter.
    */
    private ?string $costCenter = null;
    
    /**
     * @var string|null $division The name of the division in which the user works. Returned only on $select. Supports $filter.
    */
    private ?string $division = null;
    
    /**
     * Instantiates a new employeeOrgData and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmployeeOrgData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmployeeOrgData {
        return new EmployeeOrgData();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the costCenter property value. The cost center associated with the user. Returned only on $select. Supports $filter.
     * @return string|null
    */
    public function getCostCenter(): ?string {
        return $this->costCenter;
    }

    /**
     * Gets the division property value. The name of the division in which the user works. Returned only on $select. Supports $filter.
     * @return string|null
    */
    public function getDivision(): ?string {
        return $this->division;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'costCenter' => function (ParseNode $n) use ($o) { $o->setCostCenter($n->getStringValue()); },
            'division' => function (ParseNode $n) use ($o) { $o->setDivision($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('costCenter', $this->costCenter);
        $writer->writeStringValue('division', $this->division);
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
     * Sets the costCenter property value. The cost center associated with the user. Returned only on $select. Supports $filter.
     *  @param string|null $value Value to set for the costCenter property.
    */
    public function setCostCenter(?string $value ): void {
        $this->costCenter = $value;
    }

    /**
     * Sets the division property value. The name of the division in which the user works. Returned only on $select. Supports $filter.
     *  @param string|null $value Value to set for the division property.
    */
    public function setDivision(?string $value ): void {
        $this->division = $value;
    }

}
