<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DriveRecipient implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $alias The alias of the domain object, for cases where an email address is unavailable (e.g. security groups).
    */
    private ?string $alias = null;
    
    /**
     * @var string|null $email The email address for the recipient, if the recipient has an associated email address.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $objectId The unique identifier for the recipient in the directory.
    */
    private ?string $objectId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new driveRecipient and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.driveRecipient');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriveRecipient
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriveRecipient {
        return new DriveRecipient();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the alias property value. The alias of the domain object, for cases where an email address is unavailable (e.g. security groups).
     * @return string|null
    */
    public function getAlias(): ?string {
        return $this->alias;
    }

    /**
     * Gets the email property value. The email address for the recipient, if the recipient has an associated email address.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alias' => function (ParseNode $n) use ($o) { $o->setAlias($n->getStringValue()); },
            'email' => function (ParseNode $n) use ($o) { $o->setEmail($n->getStringValue()); },
            'objectId' => function (ParseNode $n) use ($o) { $o->setObjectId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the objectId property value. The unique identifier for the recipient in the directory.
     * @return string|null
    */
    public function getObjectId(): ?string {
        return $this->objectId;
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
        $writer->writeStringValue('alias', $this->alias);
        $writer->writeStringValue('email', $this->email);
        $writer->writeStringValue('objectId', $this->objectId);
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
     * Sets the alias property value. The alias of the domain object, for cases where an email address is unavailable (e.g. security groups).
     *  @param string|null $value Value to set for the alias property.
    */
    public function setAlias(?string $value ): void {
        $this->alias = $value;
    }

    /**
     * Sets the email property value. The email address for the recipient, if the recipient has an associated email address.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the objectId property value. The unique identifier for the recipient in the directory.
     *  @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value ): void {
        $this->objectId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
