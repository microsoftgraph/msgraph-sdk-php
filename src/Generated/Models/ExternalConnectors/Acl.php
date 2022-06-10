<?php

namespace Microsoft\Graph\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Acl implements AdditionalDataHolder, Parsable 
{
    /**
     * @var AccessType|null $accessType The access granted to the identity. Possible values are: grant, deny.
    */
    private ?AccessType $accessType = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AclType|null $type The type of identity. Possible values are: user, group, everyone, everyoneExceptGuests if the identitySource is azureActiveDirectory and just group if the identitySource is external.
    */
    private ?AclType $type = null;
    
    /**
     * @var string|null $value The unique identifer of the identity. In case of Azure Active Directory identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. In case of external groups value is set to the ID of the externalGroup.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new acl and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Acl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Acl {
        return new Acl();
    }

    /**
     * Gets the accessType property value. The access granted to the identity. Possible values are: grant, deny.
     * @return AccessType|null
    */
    public function getAccessType(): ?AccessType {
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
            'accessType' => function (ParseNode $n) use ($o) { $o->setAccessType($n->getEnumValue(AccessType::class)); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(AclType::class)); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the type property value. The type of identity. Possible values are: user, group, everyone, everyoneExceptGuests if the identitySource is azureActiveDirectory and just group if the identitySource is external.
     * @return AclType|null
    */
    public function getType(): ?AclType {
        return $this->type;
    }

    /**
     * Gets the value property value. The unique identifer of the identity. In case of Azure Active Directory identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. In case of external groups value is set to the ID of the externalGroup.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessType', $this->accessType);
        $writer->writeEnumValue('type', $this->type);
        $writer->writeStringValue('value', $this->value);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessType property value. The access granted to the identity. Possible values are: grant, deny.
     *  @param AccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?AccessType $value ): void {
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
     * Sets the type property value. The type of identity. Possible values are: user, group, everyone, everyoneExceptGuests if the identitySource is azureActiveDirectory and just group if the identitySource is external.
     *  @param AclType|null $value Value to set for the type property.
    */
    public function setType(?AclType $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the value property value. The unique identifer of the identity. In case of Azure Active Directory identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. In case of external groups value is set to the ID of the externalGroup.
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}
