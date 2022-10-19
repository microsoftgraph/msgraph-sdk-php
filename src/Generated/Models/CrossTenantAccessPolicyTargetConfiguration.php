<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicyTargetConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var CrossTenantAccessPolicyTargetConfigurationAccessType|null $accessType Defines whether access is allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue.
    */
    private ?CrossTenantAccessPolicyTargetConfigurationAccessType $accessType = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<CrossTenantAccessPolicyTarget>|null $targets Specifies whether to target users, groups, or applications with this rule.
    */
    private ?array $targets = null;
    
    /**
     * Instantiates a new crossTenantAccessPolicyTargetConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.crossTenantAccessPolicyTargetConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicyTargetConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicyTargetConfiguration {
        return new CrossTenantAccessPolicyTargetConfiguration();
    }

    /**
     * Gets the accessType property value. Defines whether access is allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue.
     * @return CrossTenantAccessPolicyTargetConfigurationAccessType|null
    */
    public function getAccessType(): ?CrossTenantAccessPolicyTargetConfigurationAccessType {
        return $this->accessType;
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
            'accessType' => fn(ParseNode $n) => $o->setAccessType($n->getEnumValue(CrossTenantAccessPolicyTargetConfigurationAccessType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'targets' => fn(ParseNode $n) => $o->setTargets($n->getCollectionOfObjectValues([CrossTenantAccessPolicyTarget::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the targets property value. Specifies whether to target users, groups, or applications with this rule.
     * @return array<CrossTenantAccessPolicyTarget>|null
    */
    public function getTargets(): ?array {
        return $this->targets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessType', $this->accessType);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('targets', $this->targets);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessType property value. Defines whether access is allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue.
     *  @param CrossTenantAccessPolicyTargetConfigurationAccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?CrossTenantAccessPolicyTargetConfigurationAccessType $value ): void {
        $this->accessType = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the targets property value. Specifies whether to target users, groups, or applications with this rule.
     *  @param array<CrossTenantAccessPolicyTarget>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value ): void {
        $this->targets = $value;
    }

}
