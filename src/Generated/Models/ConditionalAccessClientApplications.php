<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessClientApplications implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $excludeServicePrincipals Service principal IDs excluded from the policy scope.
    */
    private ?array $excludeServicePrincipals = null;
    
    /**
     * @var array<string>|null $includeServicePrincipals Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
    */
    private ?array $includeServicePrincipals = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new conditionalAccessClientApplications and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessClientApplications');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessClientApplications
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessClientApplications {
        return new ConditionalAccessClientApplications();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeServicePrincipals property value. Service principal IDs excluded from the policy scope.
     * @return array<string>|null
    */
    public function getExcludeServicePrincipals(): ?array {
        return $this->excludeServicePrincipals;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeServicePrincipals' => function (ParseNode $n) use ($o) { $o->setExcludeServicePrincipals($n->getCollectionOfPrimitiveValues()); },
            'includeServicePrincipals' => function (ParseNode $n) use ($o) { $o->setIncludeServicePrincipals($n->getCollectionOfPrimitiveValues()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the includeServicePrincipals property value. Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     * @return array<string>|null
    */
    public function getIncludeServicePrincipals(): ?array {
        return $this->includeServicePrincipals;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeServicePrincipals', $this->excludeServicePrincipals);
        $writer->writeCollectionOfPrimitiveValues('includeServicePrincipals', $this->includeServicePrincipals);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the excludeServicePrincipals property value. Service principal IDs excluded from the policy scope.
     *  @param array<string>|null $value Value to set for the excludeServicePrincipals property.
    */
    public function setExcludeServicePrincipals(?array $value ): void {
        $this->excludeServicePrincipals = $value;
    }

    /**
     * Sets the includeServicePrincipals property value. Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     *  @param array<string>|null $value Value to set for the includeServicePrincipals property.
    */
    public function setIncludeServicePrincipals(?array $value ): void {
        $this->includeServicePrincipals = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
