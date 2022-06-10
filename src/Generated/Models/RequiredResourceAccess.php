<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RequiredResourceAccess implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ResourceAccess>|null $resourceAccess The list of OAuth2.0 permission scopes and app roles that the application requires from the specified resource.
    */
    private ?array $resourceAccess = null;
    
    /**
     * @var string|null $resourceAppId The unique identifier for the resource that the application requires access to. This should be equal to the appId declared on the target resource application.
    */
    private ?string $resourceAppId = null;
    
    /**
     * Instantiates a new requiredResourceAccess and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequiredResourceAccess
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequiredResourceAccess {
        return new RequiredResourceAccess();
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
            'resourceAccess' => function (ParseNode $n) use ($o) { $o->setResourceAccess($n->getCollectionOfObjectValues(array(ResourceAccess::class, 'createFromDiscriminatorValue'))); },
            'resourceAppId' => function (ParseNode $n) use ($o) { $o->setResourceAppId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the resourceAccess property value. The list of OAuth2.0 permission scopes and app roles that the application requires from the specified resource.
     * @return array<ResourceAccess>|null
    */
    public function getResourceAccess(): ?array {
        return $this->resourceAccess;
    }

    /**
     * Gets the resourceAppId property value. The unique identifier for the resource that the application requires access to. This should be equal to the appId declared on the target resource application.
     * @return string|null
    */
    public function getResourceAppId(): ?string {
        return $this->resourceAppId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('resourceAccess', $this->resourceAccess);
        $writer->writeStringValue('resourceAppId', $this->resourceAppId);
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
     * Sets the resourceAccess property value. The list of OAuth2.0 permission scopes and app roles that the application requires from the specified resource.
     *  @param array<ResourceAccess>|null $value Value to set for the resourceAccess property.
    */
    public function setResourceAccess(?array $value ): void {
        $this->resourceAccess = $value;
    }

    /**
     * Sets the resourceAppId property value. The unique identifier for the resource that the application requires access to. This should be equal to the appId declared on the target resource application.
     *  @param string|null $value Value to set for the resourceAppId property.
    */
    public function setResourceAppId(?string $value ): void {
        $this->resourceAppId = $value;
    }

}
