<?php

namespace Microsoft\Graph\Generated\Drives\Item\Root\Permissions\Item\Grant;

use Microsoft\Graph\Generated\Models\DriveRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GrantPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DriveRecipient>|null $recipients The recipients property
    */
    private ?array $recipients = null;
    
    /**
     * @var array<string>|null $roles The roles property
    */
    private ?array $roles = null;
    
    /**
     * Instantiates a new grantPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GrantPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GrantPostRequestBody {
        return new GrantPostRequestBody();
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
            'recipients' => function (ParseNode $n) use ($o) { $o->setRecipients($n->getCollectionOfObjectValues(array(DriveRecipient::class, 'createFromDiscriminatorValue'))); },
            'roles' => function (ParseNode $n) use ($o) { $o->setRoles($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return array<DriveRecipient>|null
    */
    public function getRecipients(): ?array {
        return $this->recipients;
    }

    /**
     * Gets the roles property value. The roles property
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->roles;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('recipients', $this->recipients);
        $writer->writeCollectionOfPrimitiveValues('roles', $this->roles);
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
     * Sets the recipients property value. The recipients property
     *  @param array<DriveRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value ): void {
        $this->recipients = $value;
    }

    /**
     * Sets the roles property value. The roles property
     *  @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value ): void {
        $this->roles = $value;
    }

}
