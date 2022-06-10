<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PreAuthorizedApplication implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appId The unique identifier for the application.
    */
    private ?string $appId = null;
    
    /**
     * @var array<string>|null $delegatedPermissionIds The unique identifier for the oauth2PermissionScopes the application requires.
    */
    private ?array $delegatedPermissionIds = null;
    
    /**
     * Instantiates a new preAuthorizedApplication and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PreAuthorizedApplication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PreAuthorizedApplication {
        return new PreAuthorizedApplication();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appId property value. The unique identifier for the application.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the delegatedPermissionIds property value. The unique identifier for the oauth2PermissionScopes the application requires.
     * @return array<string>|null
    */
    public function getDelegatedPermissionIds(): ?array {
        return $this->delegatedPermissionIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'delegatedPermissionIds' => function (ParseNode $n) use ($o) { $o->setDelegatedPermissionIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeCollectionOfPrimitiveValues('delegatedPermissionIds', $this->delegatedPermissionIds);
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
     * Sets the appId property value. The unique identifier for the application.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the delegatedPermissionIds property value. The unique identifier for the oauth2PermissionScopes the application requires.
     *  @param array<string>|null $value Value to set for the delegatedPermissionIds property.
    */
    public function setDelegatedPermissionIds(?array $value ): void {
        $this->delegatedPermissionIds = $value;
    }

}
